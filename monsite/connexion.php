<?php
session_start(); //creer une session pour faire transiter des infos

require_once 'config/bdd.inc.php'; // on appele la base de données
require_once 'config/connexion.inc.php'; // on appele la base de données
/***** SMARTY *****/
require_once ('libs/Smarty.class.php'); // appel a smarty

$smarty = new Smarty(); // creation de l'objet smarty
$smarty->setTemplateDir('template/'); // emplacement du fichier tpl associé

include_once 'include/header.inc.php'; //appeler le header HTML
if ($connect){
    header("location: index.php");
}
else{
    
if (isset($_POST['connect'])) {//verifie si le bouton connectez-vous est posté je traite les données
    $email = addcslashes($_POST['email'], "'%_"); //sécurisation des variables rajoute slash avant '%_
    $mdp = addcslashes($_POST['mdp'], "'%_"); //créer la zone de texte dévolue au texte (corps de l'article)
//print_r($_POST);
    $verif = "SELECT * FROM utilisateurs WHERE email='$email' AND mdp='$mdp'";
    $request = mysql_query($verif);
    $result_verif = mysql_fetch_array($request);
    //echo $verif;

    if ($result_verif) { //verif si donner dans le tableau (si resultat ok)
        $sid = md5($email . time());
        $id = $result_verif['id'];
        $update_sid = "UPDATE utilisateurs SET sid='$sid' WHERE id='$id'";
        $request = mysql_query($update_sid);

        setcookie('sid', "$sid", time() + (30 * 60)); // en seconde
        $_SESSION ['MAIL_OK'] = "La Connexion est reussi";
        //echo $_SESSION['MAIL_OK'];
        header("location: index.php"); //redirection vers la page d'accueil
    }
 else {
    $_SESSION ['CONNECT_ECHEC'] = "La Connexion n'est pas valide";
      header("location: connexion.php"); //redirection vers la page d'accueil
}
} else{

if (isset($_SESSION['CONNECT_ECHEC'])){
$smarty->assign('connect_echec',$_SESSION['CONNECT_ECHEC']);
}
//** un-comment the following line to show the debug console
$smarty->debugging = true;


$smarty->display('connexion.tpl');

unset($_SESSION['CONNECT_ECHEC']); //termine le script



include_once 'include/menu.inc.php';
include_once 'include/footer.inc.php';
}
}
?>