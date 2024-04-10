<?php
echo'---Les String-------------------------------------------------------------------------------------<br>';
$manipString= 'Bonjour toto07 comment allez vous?';
echo '1)- Manipulation du string: ' .$manipString.'<br>';

echo '1.1)- Compter et afficher le nombre de caractères du string: <br>';
//reponse
echo strlen($manipString).'<br>';
///////////////////////////////
echo '1.2)- Compter et afficher le nombre de a du string: <br>';
//reponse
$nbsA=0;
for ($i = 0; $i <strlen($manipString); $i++) {
    if($manipString[$i]=='a'){
        $nbsA++;
    }
}
echo 'Il y a '.$nbsA.' \'a\' dans la chaine '. $manipString. '<br>';

///////////////////////////////



echo '1.3)- Compter et afficher le nombre de voyelles du string: <br>';
//reponse
$tab_Voyelle=array('a','e','i','o','u','y');
$tab_NbsVoyelle=array(0,0,0,0,0,0);
for ($i = 0; $i <strlen($manipString); $i++) {
    switch(strtolower($manipString[$i])){
        case $tab_Voyelle[0]:
            $tab_NbsVoyelle[0]++;
            break;
        case $tab_Voyelle[1]:
            $tab_NbsVoyelle[1]++;
            break;
        case $tab_Voyelle[2]:
            $tab_NbsVoyelle[2]++;
            break;
        case $tab_Voyelle[3]:
            $tab_NbsVoyelle[3]++;
            break;
        case $tab_Voyelle[4]:
            $tab_NbsVoyelle[4]++;
            break;
        case $tab_Voyelle[5]:
            $tab_NbsVoyelle[5]++;
            break;
    }
}
foreach ($tab_Voyelle as $index=>$voyelle) {
    echo ('il y a '.$tab_NbsVoyelle[$index]. ' \''. $tab_Voyelle[$index]. '\'<br>');
}
//ou
echo 'Compter et afficher le nombre de voyelles du string: '. preg_match_all('/[aeiouy]/i', $manipString, $matches). '<br>';
echo preg_match_all('/[aeiouy]/i', $manipString, $matches). '<br>';
//    /([aeiouy])/i': C'est le motif de recherche, défini comme une expression régulière entre les délimiteurs /. Dans ce motif :
//    [aeiouy] définit un ensemble de caractères correspondant à toutes les voyelles en minuscules.
//    i à la fin du motif indique une correspondance insensible à la casse, ce qui signifie que la recherche ne différencie pas entre majuscules et minuscules.
///////////////////////////////

echo '1.4)- Remplacer le pseudo toto07 par lolo12 du string et afficher le string: <br>';
//reponse
$search  ='toto07';
$replace ='lolo12';
echo str_replace($search, $replace, $manipString).'<br>';
//////////////////////

echo "1.5)- Mettre les mots d'un string dans un tableau et afficher le 2ème élément:<br>";
//reponse
$tab_ManipString=str_split($manipString);
echo $tab_ManipString[1].'<br>';
//////////////////////

echo '<br><br>';
echo'---Les tableaux --------------------------------------------------------------------------------------------<br>';
echo'---Les tableaux indexés-------------------------------------------------------------------------------------<br>';
$tab_temp =[10.2,15.3,8.6,20,17,14.2];
echo '2)- Manipulation de tableau de température: <br>';

echo '2.1)- Compter et afficher le nombre de température du tableau:<br>';
//reponse
echo 'il y a '.sizeof($tab_temp).' températures enregistrées<br>';
foreach ($tab_temp as $index=>$temp) {
    echo ('index \''. $index.'\' -> valeur: '.$temp.'°c<br>');
}
//ou
print_r($tab_temp);
///////////////////////////////


echo '2.2)- Afficher les valeurs de température max, min et moy:<br>';
//reponse
echo 'Température mini: ' .min($tab_temp).'°c<br>';
//array_filter($a) supprime les index null
echo 'Température moyenne: ' .round(array_sum(array_filter($tab_temp))/count(array_filter($tab_temp)),2,PHP_ROUND_HALF_UP).'°c<br>';
echo 'Température Maxi: ' .max($tab_temp).'°c<br>';
///////////////////////////////


echo '2.3)- Supprimer la 2ème temp et la remplacer par 100°C et insérer en fin de tableau la temp 12°C<br>';
//reponse
$tab_temp[1]=100;
array_push($tab_temp,12);
afficheTab($tab_temp,'°c');
///////////////////////////////

echo '2.4)- Trier et afficher le tableau par ordre croissant de température <br>';
//reponse
sort($tab_temp);
afficheTab($tab_temp,'°c');
///////////////////////////////

echo '2.5)- Trier et afficher le tableau par ordre décroissant de température <br>';
//reponse
rsort($tab_temp);
afficheTab($tab_temp,'°c');
///////////////////////////////


echo '<br><br>';
echo'---Les tableaux avec clées particulières associatifs------------------------------------------------<br>';
echo '2.6)- Afficher les clées et valeur du tableau associatif $client<br>';
$client = [
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille'];


echo '2.7)- Modifier le prénom de François par Marc<br>';
//reponse
$client['prenom']='Marc';
print_r($client);

echo "<pre>";
print_r($client);
echo "</pre>";
///////////////////////////////

echo '<br><br>';
echo'---Les fonctions------------------------------------------------------------------------------------<br>';
echo '3)-Catégories FFA : <br>';
echo "3.1)- Créer une fonction qui affiche l'année en cours :<br> ";
//reponse
function yearNow(){
    $dt = new DateTime();
    echo $dt->format('Y').'<br>';
}
yearNow();
///////////////////////////////

echo "3.2)- Créer une fonction qui renvoi votre categorieFFA à partir de votre année de naissance<br>";
$annee_naissance = 1971;
//reponse
//CATEGORIE 	CODE 	ANNEE DE NAISSANCE
//Masters 	MA 	1989 et avant
//Seniors 	SE 	1990 à 2001
//U23 / Espoirs 	ES 	2002 à 2004
//U20 / Juniors 	JU 	2005 et 2006
//U18 / Cadets 	CA 	2007 et 2008
//U16 / Minimes 	MI 	2009 et 2010
//U14 / Benjamins 	BE 	2011 et 2012
//U12 / Poussins 	PO 	2013 et 2014

//CATEGORIE 	CODE 	ANNEE DE NAISSANCE
//Masters H et F 	M0 	1989 - 1985
//  	M1 	1984 - 1980
//  	M2 	1979 - 1975
//  	M3 	1974 - 1970
//  	M4 	1969 - 1965
//  	M5 	1964 - 1960
//  	M6 	1959 - 1955
//  	M7 	1954 - 1950
//  	M8 	1949 - 1945
//  	M9 	1944 - 1940
//  	M10 	1939 et avant
function catFFA($annee_naissance){
    $cat='inconue';
    if($annee_naissance<2014){
        switch(true){
            case in_array($annee_naissance, range(0,1989)):
                $cat='M';
                switch (true){
                    case in_array($annee_naissance, range(0,1939)):
                        $cat=$cat.'10';
                        break;
                    case in_array($annee_naissance, range(1940,1944)):
                        $cat=$cat.'9';
                        break;
                    case in_array($annee_naissance, range(1945,1949)):
                        $cat=$cat.'8';
                        break;
                    case in_array($annee_naissance, range(1950,1954)):
                        $cat=$cat.'7';
                        break;
                    case in_array($annee_naissance, range(1955,1959)):
                        $cat=$cat.'6';
                        break;
                    case in_array($annee_naissance, range(1960,1964)):
                        $cat=$cat.'5';
                        break;
                    case in_array($annee_naissance, range(1965,1969)):
                        $cat=$cat.'4';
                        break;
                    case in_array($annee_naissance, range(1970,1974)):
                        $cat=$cat.'3';
                        break;
                    case in_array($annee_naissance, range(1975,1979)):
                        $cat=$cat.'2';
                        break;
                    case in_array($annee_naissance, range(1980,1984)):
                        $cat=$cat.'1';
                        break;
                }
                break;
            case in_array($annee_naissance, range(1990,2001)):
                $cat='SE';
                break;
            case in_array($annee_naissance, range(2002,2004)):
                $cat='ES';
                break;
            case in_array($annee_naissance, range(2005,2006)):
                $cat='JU';
                break;
            case in_array($annee_naissance, range(2007,2008)):
                $cat='CA';
                break;
            case in_array($annee_naissance, range(2009,2010)):
                $cat='MI';
                break;
            case in_array($annee_naissance, range(2011,2012)):
                $cat='BE';
                break;
            case in_array($annee_naissance, range(2013,2014)):
                $cat='PE';
                break;

        }
    }
    return $cat;
}
echo(catFFA($annee_naissance));
///////////////////////////////
echo '<br><br>';



function afficheTab($tableau,$unit){
    foreach ($tableau as $index=>$temp) {
        echo ('index \''. $index.'\' -> valeur: '.$temp.$unit.'<br>');
    }
}

