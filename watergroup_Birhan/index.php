<?php
require 'db.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body style="margin: 0; padding: 0;">
    <div class="conteiner" style="display: flex; justify-content: center; align-items: center; flex-direction:column; height: 100vh">
        <h1>Welcome to Watergroup Client Service</h1>
        <form class='newreading' method="post" style="display: flex; flex-direction:column">
            <label for="clientID">Please enter your client ID:</label>
            <input type="text" id="clientID" name="clientID"><br>
            <button type="submit" name="searchClient"> Search Client</button><br>
        </form>
        <?php
        //check if there is any 'type' in the link
        if (isset($_GET['type'])) {
            //check if the tpye is 'success'
            if ($_GET['type'] == "success") {
                //make a query for token value from db
                $sorgu = "SELECT * FROM customer WHERE token='" . $_GET['token'] . "'";
                $sql = mysqli_query($mysqli, $sorgu);
                //get customer datas from sql query
                $customerdata = mysqli_fetch_array($sql);
                //check if there is any record
                if ($customerdata > 0) {
                    //make a query to get last two record of meter-reading
                    $sorgu2 = "SELECT * FROM watergroup_entries WHERE customer_id='" . $customerdata['id'] . "' order by created_at desc limit 2";
                    $sql2 = mysqli_query($mysqli, $sorgu2);
                    //get meter-reading datas from sql2 query
                    $entrydata = mysqli_fetch_all($sql2);
                    //show a message if user saved
                    echo "Thank you for your declaration. ";
                    //show another message to show to difference between last two record if the records are more than two
                    if (mysqli_num_rows($sql2) > 1) {
                        echo "<br> You used " . $entrydata[0][2] - $entrydata[1][2] . " m3 since your last statement.";
                    }
                    if (isset($_GET['type == success'])) {
                        include 'config.php';
                    }
                    //create token
                    $rand_token = openssl_random_pseudo_bytes(16);
                    $token = bin2hex($rand_token);
                    //insert the token value into db
                    $tokensql = "UPDATE customer SET token='" . $token . "'  WHERE id='" . $customerdata['id'] . "'";
                    $tokenresult = mysqli_query($mysqli, $tokensql);
                } else {
                    echo 'Token invalid !';
                }
            }
        } else {
            //check if any new record send
            if (isset($_POST['newrecord'])) {
                //assign the token value to a variable
                $token = $_GET['token'];
                //if there is a token value in the url
                if (isset($token)) {
                    //make a query for token value from db
                    $sorgu2 = "SELECT * FROM customer WHERE token='" . $token . "'";
                    $sql2 = mysqli_query($mysqli, $sorgu2);
                    $tokencount = mysqli_fetch_array($sql2);
                    if ($tokencount > 0) {
                        $newreading = $_POST['newreading'];

                        $sorgu2 = "SELECT * FROM watergroup_entries WHERE customer_id=" . $tokencount['id'] . " order by created_at desc limit 1";
                        $sql2 = mysqli_query($mysqli, $sorgu2);
                        $entrydata = mysqli_fetch_array($sql2);

                        if ($entrydata) {
                            //check if the last meter-reading is lower then new-reading
                            if ($entrydata['meter_reading'] < $newreading) {
                                $sql2 = "INSERT INTO `watergroup_entries` (`id`, `customer_id`, `meter_reading`, `created_at`, `updated_at`) VALUES (NULL, '" . $tokencount['id'] . "', '" . $_POST['newreading'] . "', '" . date('Y-m-d H:i:s') . "', NULL);";
                                $result = mysqli_query($mysqli, $sql2);
                                if ($result == 0) {
                                    echo "Bir hata nedeni ile kaydınız eklenmedi. Lütfen sonra tekrar deneyiniz";
                                    //if new declaration is higher then the last one direct the page to url
                                } else {
                                    header("Location:index.php?type=success&token=" . $token);
                                }
                                //show a message if new declaration is lower then the last one
                            } else {
                                echo 'Warning: You declarated a lower value than your last record. ';
                            }
                        }
                        // else {
                        //     $sql2 = "INSERT INTO `watergroup_entries` (`id`, `customer_id`, `meter_reading`, `created_at`, `updated_at`) VALUES (NULL, '" . $tokencount['id'] . "', '" . $_POST['newreading'] . "', '" . date('Y-m-d H:i:s') . "', NULL);";
                        //     $result = mysqli_query($mysqli, $sql2);
                        //     if ($result == 0) {
                        //         echo "Bir hata nedeni ile kaydınız eklenmedi. Lütfen sonra tekrar deneyiniz";
                        //     } else {
                        //         header("Location:index.php?type=success&token=" . $token);
                        //     }
                        // }
                    } else {
                        echo 'Token Invalid!!!';
                    }
                } else {
                    echo 'There are no Token !';
                }
            }
            //check the client list for the post value if it is exists.
            if (isset($_POST['searchClient'])) {
                $customerID = $_POST['clientID'];
                //if custumer id is not empty then make a query get the data about customerID to compare it with post vallue
                if ($customerID != "") {
                    $sorgu = "SELECT * FROM customer WHERE id=" . $customerID . "";
                    $sql = mysqli_query($mysqli, $sorgu);
                    $clientData = mysqli_fetch_array($sql);
                    //if post value doesnt match with db give a message.
                    if (!$clientData) {
                        echo 'ClientID Not Found';
                        //if it matches, create a token for it
                    } else {
                        $rand_token = openssl_random_pseudo_bytes(16);
                        $token = bin2hex($rand_token);

                        $tokensql = "UPDATE customer SET token='" . $token . "'  WHERE id='" . $customerID . "'";
                        $tokenresult = mysqli_query($mysqli, $tokensql);
                        //if token created succesfully direct the page token version
                        if ($tokenresult > 0) {
                            header("Location:?token=" . $token);
                        } else {
                            echo 'Fatal Error! Try Again';
                        }
                    }
                } else {
                    echo 'ClientID can not be empty';
                }
            }
            //if there  is a token value in the url then make a query to get token values from db
            if (isset($_GET['token'])) {
                $sorgu = "SELECT * FROM customer WHERE token='" . $_GET['token'] . "'";
                $sql = mysqli_query($mysqli, $sorgu);
                $clientData = mysqli_fetch_array($sql);
                //if any of them is true for 'get value' then 1
                if ($clientData > 0) {
                    $sorgu2 = "SELECT * FROM watergroup_entries WHERE customer_id=" . $clientData['id'] . " order by created_at desc limit 1";
                    $sql2 = mysqli_query($mysqli, $sorgu2);
                    $entrydata = mysqli_fetch_array($sql2);
        ?>
                    <form class='result' method="post" style="display: flex; flex-direction:column; gap:2px">
                        <label for="cID">Customer ID:</label>
                        <input type="text" id="cID" name="cID" value="<?php echo $clientData['id']; ?>" disabled>
                        <label for="fname">First Name:</label>
                        <input type="text" id="fname" name="fname" value="<?php echo $clientData['first_name']; ?>" disabled>
                        <label for="lname">Last Name:</label>
                        <input type="text" id="lname" name="lname" value="<?php echo $clientData['last_name']; ?>" disabled>
                        <label for="street">Street:</label>
                        <input type="text" id="street" name="street" value="<?php echo $clientData['street_name']; ?>" disabled>
                        <label for="number">Number :</label>
                        <input type="text" id="number" name="number" value="<?php echo $clientData['address_number']; ?>" disabled>
                        <label for="number">Box:</label>
                        <input type="text" id="number" name="number" value="<?php echo $clientData['box_number']; ?>" disabled>
                        <label for="pcode">Post Code:</label>
                        <input type="text" id="pcode" name="pcode" value="<?php echo $clientData['post_code']; ?>" disabled>
                        <label for="location">Location:</label>
                        <input type="text" id="location" name="location" value="<?php echo $clientData['location']; ?>" disabled>
                        <label for="lreading">Last Reading:</label>
                        <input type="text" id="lreading" name="lreading" value="<?php echo $entrydata['meter_reading']; ?>" disabled>
                        <label for="newreading">New Declaration:</label>
                        <input type="text" id="newreading" name="newreading"><br>
                        <button type="submit" name="newrecord"> Add New Record </button>

                    </form>
        <?php
                } else {
                    echo 'Client Not Found';
                }
            }
        }
        ?>

    </div>
</body>

</html>