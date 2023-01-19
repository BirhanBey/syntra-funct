<?php
require_once('MysqliDb.php');
$db = new MysqliDb('localhost', 'root', 'rootpass', 'moviesdb');


$sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;

// set page limit to 2 results per page. 20 by default
$db->pageLimit = 10;
$movies = $db->arraybuilder()->paginate("movies", $sayfa);

foreach ($movies as $movie) {
    echo $movie['name'] . '<br>';
}
echo "showing $sayfa out of " . $db->totalPages;


$toplam_icerik = count($movies);

$toplam_sayfa =  $db->totalPages;
$en_az_orta = ceil($db->pageLimit / 2);
$en_fazla_orta = ($toplam_sayfa + 1) - $en_az_orta;

$sayfa_orta = $sayfa;
if ($sayfa_orta < $en_az_orta) $sayfa_orta = $en_az_orta;
if ($sayfa_orta > $en_fazla_orta) $sayfa_orta = $en_fazla_orta;

$sol_sayfalar = round($sayfa_orta - (($db->pageLimit - 1) / 2));
$sag_sayfalar = round((($db->pageLimit - 1) / 2) + $sayfa_orta);

if ($sol_sayfalar < 1) $sol_sayfalar = 1;
if ($sag_sayfalar > $toplam_sayfa) $sag_sayfalar = $toplam_sayfa;

if ($sayfa != 1) echo ' <a href="?sayfa=1">&lt;&lt;İlk sayfa</a> ';
if ($sayfa != 1) echo ' <a href="?sayfa=' . ($sayfa - 1) . '">&lt;Önceki</a> ';

for ($s = $sol_sayfalar; $s <= $sag_sayfalar; $s++) {
    if ($sayfa == $s) {
        echo '[' . $s . '] ';
    } else {
        echo '<a href="?sayfa=' . $s . '">' . $s . '</a> ';
    }
}

if ($sayfa != $toplam_sayfa) echo ' <a href="?sayfa=' . ($sayfa + 1) . '">Sonraki&gt;</a> ';
if ($sayfa != $toplam_sayfa) echo ' <a href="?sayfa=' . $toplam_sayfa . '">Son sayfa&gt;&gt;</a>';


$data = array(
    "id" => null,
    "name" => "nodejs in babannesi kaşar",
    "genre" => "1",
    "studio" => "tire",
    "score" => "99.99",
    "rotten_tomatoes_score" => "1",
    "Year" => "2023"
);
$db->setTrace(true);
$ins = $db->insert("movies", $data);

print_r($ins);

echo $db->getLastQuery();
echo '<br>' . $db->getInsertId();


print_r($db->trace);
