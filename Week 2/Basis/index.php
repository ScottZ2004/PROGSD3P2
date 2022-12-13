<?php

/*
* Opdracht 4:
* Maak een nieuwe array en noem deze $omgekeerd.
* De inhoud van deze array bestaat uit de elementen van de weekdagen array.
* Gebruik hiervoor een for loop en array_push() om deze elementen te kopieren naar de nieuwe array
* HINT: de grootte van een array kun je met sizeof() en count() bepalen
*/

/*
* Opdracht 5:
* Gebruik de functie array_reverse om hetzelfde resultaat als in opdracht 4 te verkrijgen.
*/

$weekdagen = array(
    'ma' => 'maandag ',
    'di' => 'dinsdag ',
    'woe' => 'woensdag ',
    'do' => 'donderdag ',
    'vr' => 'vrijdag ',
    'za' => 'zaterdag ',
    'zo' => 'zondag'
);

$weekdagen_no_key = [];

foreach($weekdagen as $key => $weekdag){
    $weekdag = ucfirst($weekdag);
    if($key == 'za' || $key == 'zo'){
        $weekdag = strtoupper($weekdag);
    }
    array_push($weekdagen_no_key, $weekdag);
}

$omgekeerd = [];

for($i = count($weekdagen_no_key) - 1; $i >= 0; $i--){
    array_push($omgekeerd, $weekdagen_no_key[$i]);
}

print_r($omgekeerd);

