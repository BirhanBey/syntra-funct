<?php
function getAPI($url)
{
    // Initiate curl session in a variable (resource)
    $curl_handle = curl_init();

    $url = "https://www.thecocktaildb.com/api/json/v1/1/list.php?c=list";

    // Set the curl URL option
    curl_setopt($curl_handle, CURLOPT_URL, $url);
    // This option will return data as a string instead of direct output
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
    // Bypass SSL verification (for Windows users)
    curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, false);
    // Execute curl & store data in a variable
    $curl_data = curl_exec($curl_handle);
    curl_close($curl_handle);

    $response = json_decode($curl_data);
    return $response->drinks;
}
