<?php
$heroesgames = array(
    "mobile legend bang bang" => array(
        "saber squad" => "jhonson, layla, cyclop, rafaela",
        "marychritsmes" => "lancelot, edura, karina, miya",
    ),
    "beberapa skin dari mobile legend bang bang" => array(
        "elite" => "zilong, bane, balmond, argus",
        "star" => "lancelot, alucard, miya",
		"epic" => "jhonson, selena, lesley, zilong, saber, ",
		"zodiak" => "hilda, iritel, lancelot, martis, aurora",
    ),
    "hero mage" => array(
        "mage terbang" => "kadita, edura, cang'e, valae, gord",
        "mage jalan" => "harley, valir,veksana, lunox, pharsa, aurora, cyclop, zhak, alice, harith ",
    )
);

$keys = array_keys($heroesgames);
for($i = 0; $i < count($heroesgames); $i++) {
    echo $keys[$i] . "<br>";
    foreach($heroesgames[$keys[$i]] as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }
    echo "<br>";
}
echo "=============================================================================================";
echo "<br/>";

//no2

 $hero_game_dari_indonesia = array(
 
'nama hero yang pertama dari Indonesia' => array('Nama hero' => array('gatotkaca'), 'dari game' => array('mobile legend bang bang')),
 
'nama hero yang kedua dari Indonesia' => array('Nama hero' => array('kadita'), 'dari game' => array('mobile legend bang bang')),
 
'nama hero yang ketiga dari Indonesia' =>array('Nama hero' => array('wiro sableng'), 'dari game' => array('arena of valor'))
 
);

//menampilkan perulangan array multidimensi
foreach($hero_game_dari_indonesia as $name => $data){
 echo $name . '<br/>';
 foreach($data as $name2 => $value){
 echo $name2 . ' : ' . $value[0] .'<br> ';
 }
 echo '<br/>';
}
echo "===============================================================================================";
echo "<br/>";

//no3
 $games_survival = array(
 
'game 1' => array('Nama game' => array('PUBG'), 'dari game' => array('mobile phone dan pc')),
 
'game 2' => array('Nama game' => array('POINT BLANK'), 'dari game' => array('pc')),
 
'game 3' =>array('Nama game' => array('FREE FIRE'), 'dari game' => array('mobile phone dan pc'))
 
);

//menampilkan perulangan array multidimensi
foreach($games_survival as $name => $data){
 echo $name . '<br/>';
 foreach($data as $name2 => $value){
 echo $name2 . ' : ' . $value[0] .'<br> ';
 }
 echo '<br/>';
}
echo "===============================================================================================";
echo "<br/>";

//no4
$film = array(
    "film-film yang baru tayang" => array(
        "film action " => "capten marvel,",
        "film comedy" => "yowisben",
		"film romantic" => "dilan, dear nathan",
    ),
    "film horor" => array(
        "film horor dari luar" => "the nun, annabel",
        "film horor lokal" => "the dol, roy kiyoshi, sabrina",
    ),
    "film yang segera akan datang" => array(
        "film action" => "end game, fast and furious",
    )
);

$keys = array_keys($film);
for($i = 0; $i < count($film); $i++) {
    echo $keys[$i] . "<br>";
    foreach($film[$keys[$i]] as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }
    echo "<br>";
}
?>