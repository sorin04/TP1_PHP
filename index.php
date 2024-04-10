<?php
echo '---Les String-------------------------------------------------------------------------------------<br>';
$manipString ='Bonjour toto07 comment allez vous?';
echo '1)-  Manipulation du string '.$manipString.'<br>';

echo '1.1)- Compter et afficher le nombre de caractères du string: <br>';
echo strlen($manipString).'<br>';

echo '1.3)- Compter et afficher le nombre de voyelles du string: <br>';
$voyelle=array('a','e','i','o','u','A','E','I','O','U',);
$voyelle_count=0;

for ($i = 0; $i < strlen($manipString); $i++) {

    if (in_array($manipString[$i], $voyelle)) {
        $voyelle_count++;
    }
}
echo $voyelle_count . '<br>';

echo '1.4)- Remplacer le pseudo toto07 par lolo12 du string et afficher le string: <br>';
echo $newString = str_replace('toto07','lolo12', $manipString),'<br>';

echo "1.5)- Mettre les mots d'un string dans un tableau et afficher le 2ème élément:<br>";
$mot=explode(' ',$manipString);
if (isset($mot[1])){
      echo $mot[1];

}else{
    echo "Il n'y en  pas de deuxieme element.";
}

echo '<br><br>';
echo'---Les tableaux --------------------------------------------------------------------------------------------<br>';
echo'---Les tableaux indexés-------------------------------------------------------------------------------------<br>';
$tab_temp =[10.2,15.3,8.6,20,17,14.2];
echo '2)- Manipulation de tableau de température: <br>';



echo '2.1)- Compter et afficher le nombre de température du tableau:<br>';
echo count($tab_temp),'<br>';









