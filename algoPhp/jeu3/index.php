<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">  <link rel="stylesheet" href="style.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE CINEMA</title>
</head>

<body>
<h1>MOT MYSTERE</h1>
Défi du jeu : trouver un mot mystère grâce à une série d'algorithmes personnalisés (et de fonctions natives à PHP)<br>
•Définir dans une variable un tableau qui contient toutes les lettres de l'alphabet<br>

<h3>Etape 1</h3><br>

•Définir les dates de naissance et de décès de Victor Hugo et déduire son âge de décès<br>
•Additionner les 2 chiffres de son âge de décès (exemple : 48 -> 4+8 = 12) grâce à un algorithme<br>
•Avec le nombre obtenu, trouver la lettre correspondante dans le tableau de l'alphabet (exemple : 2 -> "C"), reculez de 6 cases.<br>
La lettre obtenue constituera la lettre 1 et sera stockée dans un tableau "$mystere"<br>

<h3>Etape 2</h3><br>

•Le chanteur du groupe Phoenix est marié avec une célèbre actrice dont le papa a réalisé un film en 1979.<br>
Un des colonels a un nom de famille qui commence par la lettre trouvée avant de reculer de 6 cases dans l'étape précédente.<br>
Quelle est la 1ere lettre du prénom de l'acteur qui l'incarne ? (il a aussi incarné un célèbre mercenaire de l'espace dans une saga étoilée).<br>
Cette lettre constituera la lettre 2 à stocker dans "$mystere"<br>

<h3>Etape 3</h3><br>

•La coupe du monde de football au Qatar a eu lieu pendant l'année XXXX<br>
•Additionner tous les chiffres de cette année grâce à un algorithme (afin d'obtenir une variable N)<br>
•Récupérer la lettre correspondante à l'indice N dans le tableau de l'alphabet, lettre 3 à ajouter dans le tableau "$mystere"<br>

<h3>Etape 4</h3><br>

•Créer une variable qui contient le pseudo de Paul David Hewson (en Majuscules)<br>
•Ne retenir que la 1ere lettre du pseudo avec une fonction PHP. Lettre 4 à ajouter dans le tableau $mystere<br>

<h3>Etape 5</h3><br>

•La lettre 5 est la 1ère lettre du groupe emblématique du chanteur de l'étape 4 (à stocker dans $mystere)<br>

<h3>Etape 6</h3><br>

•Ayrton Senna a été sacré champion du monde de formule 1 à X reprises<br>
•Retirez 1 à cette valeur pour obtenir un indice N et récupérer la lettre du tableau de l'alphabet à cet emplacement.<br>
La lettre obtenue sera stockée dans $mystere<br>

<h3>Etape 7 + 8</h3><br>

•Dans un Monopoly classique Français, la rue la plus chère est la rue ...<br>
•Stocker dans une variable l'intégralité du nom de la rue en majuscules (RUE DE ...)<br>
•Supprimer les espaces, inverser la chaîne de caractères (grâce à des fonctions PHP)<br>
•Extraire la 2e et la 6e lettre de la chaîne de caractères obtenue (elles constitueront la lettre 7 et 8 à stocker dans $mystere)<br>

<h3>Etape 9</h3><br>

•La réplique "Je veux tes vêtements, tes bottes et ta moto..." est issue d'un film<br>
•Stocker ce film (titre anglais) dans une variable sans espaces et en majuscules en prenant soin de retirer la lettre "R"<br>
•Grâce à un algorithme, vérifier quelle est la lettre la plus présente dans la chaîne de caractères.<br>
Cette lettre constitue la 9e et dernière valeur à stocker dans $mystere.<br>

<h3>ULTIME ETAPE</h3><br>
•Créer le tableau suivant dans une variable $secretKey$secretKey = [0, 6, 2, 1, 8, 5, 7, 4, 3];<br>
•Afficher le contenu du tableau mystère dans l'ordre de ces indices<br>
•Si la lettre rencontrée est un "T", faites suivre cette lettre d'un espace Quel est le mot mystère ? <br>

Donnez le lien wikipedia(version anglais) de la page consacrée à ce mot mystère et <br>
donner le pseudo de la personne qui a modifié la page le 30 décembre 2022 à 22:50<br>
Il faudra fournir le script PHP vous ayant permis de résoudre cette énigme!

<h2>Présentation des étapes</h2>

<?php

//////////////////////////////////////////////////////TABLEAU ALPHABET////////////////////////////////////////////////////
$alphabet = ["A","B","C","D","E","F"
            ,"G","H","I","J","K"
            ,"L","M","N","O","P"
            ,"Q","R","S","T","U"
            ,"V","W","X","Y","Z"];

  echo "Le tableau contient " .count($alphabet). " lettres.";
  echo "<br>";
  echo var_dump($alphabet);
  echo "<br>";
  $lettre1 = $alphabet[11-6];
  echo"<br>";
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////  

//////////////////////////////////////////////////LIER LES PAGES/////////////////////////////////////////////////////////
spl_autoload_register(function ($class_name){
  require 'classes/'. $class_name .'.php';
  });
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////  
?>
<h3> ETAPE 1 </h3>
<?php
/////////////////////////////////////////////////////LETTRE 1////////////////////////////////////////////////////////////
$victorHugo = new Personne("HUGO","Victor","1802-02-12","1885-05-22");
echo $victorHugo->getInfos();
echo "(8+3) = " .$victorHugo->findNumber().
" ce chiffre correspond à la lettre L <br>
en reculant de 6 cases cela correspond à la lettre: ". $lettre1;
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
<h3> ETAPE 2 </h3>
<?php
/////////////////////////////////////////////////////LETTRE 2////////////////////////////////////////////////////////////
echo "Thomas Mars est marié à Sophia Coppola<br>
Sophia Coppola est la fille de Francis Ford Coppola<br>
Francis Ford Coppola à réalisé en 1979 le film : Appocalypse Now<br>
Harrison Ford à incarné le Colonel Lucas dans ce film<br>
La seconde lettre est donc H";

$lettre2 = $alphabet[7];
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
<h3> ETAPE 3 </h3>
<?php
/////////////////////////////////////////////////////LETTRE 3////////////////////////////////////////////////////////////
echo "La coupe du monde au Qatar a eu lieu pendant l'année 2022";
echo "<br>";
$chiffres = [2,0,2,2];
$total = array_sum($chiffres);

echo "La somme des chiffres est égale à ".$total;
echo "<br>";
echo "La troisième lettre est G";

$lettre3 = $alphabet[$total];
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
<h3> ETAPE 4 </h3>
<?php
/////////////////////////////////////////////////////LETTRE 4////////////////////////////////////////////////////////////
$pseudo = "bono";
$pseudoMaj = strtoupper($pseudo);
echo "le pseudo de Paul David Hewson est ".$pseudoMaj;
echo "<br>";
echo "La quatrième lettre est donc ". $pseudoMaj[0];

$lettre4 = $pseudoMaj[0];
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
<h3> ETAPE 5 </h3>
<?php
/////////////////////////////////////////////////////LETTRE 5////////////////////////////////////////////////////////////
$groupe = "u2";
$groupeMaj = strtoupper($groupe);
echo "Bono est le leader de U2 ";
echo "<br>";
echo "La quatrième lettre est donc ". $groupeMaj[0];

$lettre5 = $groupeMaj[0];
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
<h3> ETAPE 6 </h3>
<?php
/////////////////////////////////////////////////////LETTRE 6////////////////////////////////////////////////////////////
echo "Ayrton Senna a été sacré champion du monde de formule 1 à 3 reprises";
$indice = (3-1);

$lettre6 = $alphabet[$indice];
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
<h3> ETAPE 7 & 8 </h3>
<?php
/////////////////////////////////////////////////////LETTRE 7 & 8////////////////////////////////////////////////////////////
echo "Dans un Monopoly classique Français, la rue la plus chère est la rue de la Paix";

$phrase = "rue de la paix";

$phraseMaj = strtoupper($phrase);
$phraseSansEspaces = str_replace(" ", "", $phraseMaj);
$phraseReverse = strrev($phraseSansEspaces);
echo "<br>";
echo "La septième lettre est ".$phraseReverse[1];
echo "<br>";
echo "La huitième lettre est " .$phraseReverse[5];

$lettre7 = $phraseReverse[1];
$lettre8 = $phraseReverse[5];
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
<h3> ETAPE 9 </h3>
<?php
/////////////////////////////////////////////////////LETTRE 9////////////////////////////////////////////////////////////
echo "Il s'agit du film The Terminator";
echo "<br>";
$film = "the teminato";
$filmMaj = strtoupper($film);
$filmSansEspaces = str_replace(" ", "", $filmMaj);

var_dump ($filmSansEspaces);
echo"<br>";
echo "La dernière lettre est " .$filmSansEspaces[0];
$lettre9 = $filmSansEspaces[0];
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
<h3> ULTIME ETAPE </h3>
<?php
/////////////////////////////////////////////////////ULTIME ETAPE////////////////////////////////////////////////////////////
$secretKey = [0, 6, 2, 1, 8, 5, 7, 4, 3];
$mystereNum = [5, 7, 6, 2, 20, 7, 8, 11, 19];

echo "La clé secrète contient les indices suivant: [0, 6, 2, 1, 8, 5, 7, 4, 3]";
echo "<br>";
echo "Les lettres F-H-G-B-U-C-I-L-T sont positionnées dans l'alphabet de la façon suivante :<br>
[5, 7, 6, 2, 20, 7, 8, 11, 19]";
echo "<br>";
echo " Pour positionner les lettres du tableau mystère suivant les indices de la clé secrète <br>
il faut considérer celle ci comme un ordre d'affichage";
echo "<br>";
echo "Le tableau mystère donne l'ordre suivant: [5, 8, 6, 7, 19, 7, 11, 20, 2]";
echo "<br>";

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

?>
<h3>RESULTAT</h3>
<?php
      echo "Le tableau mystère contient les lettres suivantes:";

  $mystere = [$lettre1, $lettre2, $lettre3, $lettre4, $lettre5, $lettre6, $lettre7, $lettre8, $lettre9];

  function afficherMotMystere($mystere){
      echo "<form>";
        foreach ($mystere as $value){
         echo"<label>".$value."</label>";
        }
      echo "</form>";
      }
      
      echo afficherMotMystere($mystere);
      echo "<br>";
      echo "Le mot mystère est : FIGHT CLUB";
      echo "<br>";
      echo "Voici un lien vers la page Wikipédia: ";
      echo "<a href=https://en.wikipedia.org/wiki/Fight_Club 'target='_blank'>Accéder au Site Web</a><br>";
      echo "<br>";
      echo "Jean de Nivelle a modifié cette page le 30 décembre 2022 à 22:50";
      

    
?>
</body>
</html> 