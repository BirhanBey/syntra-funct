<?php

function getMovies()
{

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.themoviedb.org/3/search/movie?query=star+wars',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI5ZGE3OTBkNzZiNGMwOWMxYmIzODRlYzEwNzU0NTA5OCIsInN1YiI6IjYzZDE4MTllY2I3MWI4MDBkNDM5Y2ZjOCIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.44WXof4BxHttBoK4Wk8ZUJpZcu9RxU35eJFepN3W-W0'
        ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);
    $response = json_decode($response);

    return $response;
}

$movies = getMovies()->results;

function cmp($a, $b)
{
    return strcmp($b->vote_average, $a->vote_average);
}
usort($movies, 'cmp');





// usort($movies, function ($a, $b) {
//     if ($a->vote_average == $b->vote_average) {
//         return 0;
//     }
//     return ($a->vote_average > $b->vote_average) ? -1 : 1;
// });

print '<pre>';
print_r($movies);
