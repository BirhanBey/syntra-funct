<?php


$links = [
    'https://stackoverflow.com/',
    'https://www.w3schools.com/',
    'https://apiflash.com/'
];

function getSnapShot($url)
{
    require './includes/options.env.php';

    //foreach
    $params = [
        'access_key' => $access_key,
        'url' => $url,
        'wait_until' => 'page_loaded',
        'response_type' => 'json',
        'no_cookie_banners' => true,
        'no_ads' => true,
        'format' => 'png'
    ];

    //ADD API URL UNDER HERE AND THE QUERY WILL BE BUILT FROM THE PARAMS
    $url = 'https://api.apiflash.com/v1/urltoimage?' . http_build_query($params);
    // create function getApi($url){}
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_SSL_VERIFYPEER => false,
    ));

    $response = curl_exec($curl);
    curl_close($curl);
    $response = json_decode($response);
    return $response->url;
};

foreach ($links as $link) {
    $screenshots[] = getSnapShot($link);
}

// $picture = getSnapShot();

?>
<!-- <img src="<?= $picture ?>" alt=""> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">

            <?php foreach ($screenshots as $screenshot) { ?>
                <div class="col-6">
                    <img class='img-fluid' src="<?= $screenshot ?>" alt="">
                </div>
            <?php }; ?>

        </div>
    </div>
</body>

</html>