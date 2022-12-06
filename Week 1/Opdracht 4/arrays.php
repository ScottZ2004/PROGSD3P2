<?php

$aanhef = array(
    "aanhef" => "Beste",
    "persoon" => "klant");

$korting = array(
    "product" => str_replace("[[product]]", "Platenspeler", "U heeft in de voorgaande bestelling voor [[product]] gekozen"),
    "korting" => "Bij Uw volgende bestelling kunnen we U een korting van 10% aanbieden op hetzelfde product"
);

$ondertekening = array(
  "groet" => "Met vriendelijke groet,",
  "naam" => "Scott",
  "functie" => "Directeur Webshop beheer"
);

$aanbieding = array_merge($aanhef, $korting, $ondertekening)
/*
* Opdracht 4:
* Voeg nu alle arrays samen in een nieuwe array die je $aanbieding noemt.
* Gebruik hiervoor de methode array_merge()
*/

/*
* Opdracht 5:
* Toon de inhoud van de nieuwe array $aanbieding
*/

print_r(var_dump($aanhef));
echo "<br>";
print_r(var_dump($korting));
echo "<br>";
print_r(var_dump($ondertekening));
