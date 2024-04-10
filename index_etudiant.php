<?php
echo'---Les String-------------------------------------------------------------------------------------<br>';
$manipString= 'Bonjour toto07 comment allez vous?';
echo '1)- Manipulation du string: ' .$manipString.'<br>';

echo '1.1)- Compter et afficher le nombre de caractères du string: <br>';
//reponse

///////////////////////////////



echo '1.3)- Compter et afficher le nombre de voyelles du string: <br>';
//reponse

///////////////////////////////

echo '1.4)- Remplacer le pseudo toto07 par lolo12 du string et afficher le string: <br>';
//reponse

//////////////////////

echo "1.5)- Mettre les mots d'un string dans un tableau et afficher le 2ème élément:<br>";
//reponse

//////////////////////

echo '<br><br>';
echo'---Les tableaux --------------------------------------------------------------------------------------------<br>';
echo'---Les tableaux indexés-------------------------------------------------------------------------------------<br>';
$tab_temp =[10.2,15.3,8.6,20,17,14.2];
echo '2)- Manipulation de tableau de température: <br>';

echo '2.1)- Compter et afficher le nombre de température du tableau:<br>';
//reponse

///////////////////////////////


echo '2.2)- Afficher les valeurs de température max, min et moy:<br>';
//reponse

///////////////////////////////


echo '2.3)- Supprimer la 2ème temp et la remplacer par 100°C et insérer en fin de tableau la temp 12°C<br>';
//reponse

///////////////////////////////

echo '2.4)- Trier et afficher le tableau par ordre croissant de température <br>';
//reponse

///////////////////////////////

echo '2.5)- Trier et afficher le tableau par ordre décroissant de température <br>';
//reponse

///////////////////////////////


echo '<br><br>';
echo'---Les tableaux avec clées particulières associatifs------------------------------------------------<br>';
$client = [
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille'];
echo '2.6)- Afficher les clées et valeur du tableau associatif $client<br>';
//reponse

///////////////////////////////


echo '2.7)- Modifier le prénom de François par Marc<br>';
//reponse

///////////////////////////////

echo '<br><br>';
echo'---Les fonctions------------------------------------------------------------------------------------<br>';
echo '3)-Catégories FFA : <br>';
echo "3.1)- Créer une fonction qui affiche l'année en cours :<br> ";
//reponse

///////////////////////////////

echo "3.2)- Créer une fonction qui renvoi votre categorieFFA à partir de votre année de naissance<br>";
$annee_naissance = 1971;

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

//reponse

///////////////////////////////
echo '<br><br>';

