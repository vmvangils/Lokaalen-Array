<?php 

// echo "Hello World!";

// $voorbeeld =  [

//     [1,2,3],
//     [4,5,6],
//     [7,8,9]

// ];

// $x = $voorbeeld[1][2];
// var_dump($x);

// $huizen = [
//     [
//     "locatie" => "Rotterdam",
//     "prijs" => 517000,
//     "groote" => 9500,
//     ],
//     [
//     "Locatie" => "Schiedam",
//     "prijs" => 910000,
//     "groote" => 20000,
//     ],
// ];
    
//     var_dump($huizen["huis-1"]);
//     var_dump($huizen["huis-2"]);

//     $max_prijs = 0;

// foreach ($huizen as $huis) {
//     if ($huis['prijs'] > $max_prijs) {
//         $max_prijs = $huis['prijs'];
//     }
// }

// echo 'The maximum price is: ' . $max_prijs;

// $totale_groote = 0;

// foreach ($huizen as $huis) {
//     $totale_groote += (int) filter_var($huis['groote'], FILTER_SANITIZE_NUMBER_INT);
// }

// echo 'The total size is: ' . $totale_groote . ' m2';

// $grootstehuis = $huizen[0];
// foreach ($huizen as $huis){
//         if($grootstehuis["groote"] < $huis["groote"]){
//             $grootstehuis = $huis;
//         }
// }

// var_dump($grootstehuis);

    // $games = array (
    //     array(
    //         "title" => "Fortnite",
    //     ),
    //     array(
    //         "title" => "minecraft"
    //     ),
    //     array(
    //         "title" => "gta"
    //     ),
    //     array(
    //         "title" => "cod"
    //     ),
    //     array(
    //         "title" => "csgo"
    //     )
    // );

    // print_r($games);

    // $games = [
    //     ["naam" => "FIFA", "prijs" => 80],
    //     ["naam" => "CoD", "prijs" => 1000],
    //     ["naam" => "Fortnite", "prijs" => 0],
    //     ["naam" => "GTA6", "prijs" => 100],
    //     ["naam" => "RdR", "prijs" => 20]
    // ];
    // foreach($games as $game){
    //     echo $game['naam'] . "- €" , $game['prijs'];
    // }

//     echo "<ul>";
// foreach($games as $game){
//     echo "<li>" . $game['naam'] . "- €" , $game['prijs'] . "</li>";
// }
// echo "</ul>";


    $lokalen = [
        ["naam" => "lokaalnummer", "capaciteit" => 45],
        ["naam" => "lokaalnummer", "capaciteit" => 32],
        ["naam" => "lokaalnummer", "capaciteit" => 60],
        ["naam" => "lokaalnummer", "capaciteit" => 15],
        ["naam" => "lokaalnummer", "capaciteit" => 23],
        ["naam" => "lokaalnummer", "capaciteit" => 40]
        
    ];

    foreach($lokalen as $lokaal){
        echo $lokaal['capaciteit'] . "<br>" , $lokaal['naam'];
    }