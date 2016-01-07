<?php
$connect = FALSE;

if (isset($_COOKIE['sid'])) { 
    $sid = $_COOKIE['sid'];
    $verif_sid = "SELECT sid FROM utilisateurs WHERE sid='$sid'";
    $request = mysql_query($verif_sid);
    $result_verif_sid = mysql_fetch_array($request);
    
    if ($result_verif_sid) { //verif si donner dans le tableau (si resultat ok)
        $connect = TRUE;
        //echo $connect;
    } else {
        echo "NOK";
    }
}
        

  // Creer une variable initialisee à FALSE
//$_COOKIE['sid'];  // tester la présence de $_COOKIE SID avec isset  
// si existe alors attribuer la valeur de sid à une variable
// vérification en bdd de la presence de la valeur requete sql, exectuer, tableau
// si  on a un résultat, on modifie la valeur de la variable de connexion pour lui donner la valeur TRUE
// *---- sur toutes les pages protégées --*/
// tester la valeur de la variable $connect grace une condition
// redirige l'utilisateur vers la page de connexion si FALSE
// On affiche la page grace IF doit apparaitre  en dessous de require_once  si false redirige accueil sinon affiche tout

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
