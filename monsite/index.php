<?php
session_start(); //creer une session pour faire transiter des infos
require_once 'config/bdd.inc.php'; //appele la basse de donnée (fichier de connection)
include_once 'include/header.inc.php'; //appele le header dans le fichier HTML
require_once 'config/bdd.inc.php'; // on appele la base de données
require_once 'config/connexion.inc.php'; // on appele la base de données
/***** SMARTY *****/
require_once ('libs/Smarty.class.php'); // appel a smarty

$smarty = new Smarty(); // creation de l'objet smarty
$smarty->setTemplateDir('template/'); // emplacement du fichier tpl associé


$select_all_post = "SELECT COUNT(*) as nbarticle FROM articles WHERE publie = 1";
$request = mysql_query($select_all_post);

$total_articles = mysql_fetch_array($request);
//echo '<h2>' . $result_request['nbarticle'] . '</h2>';
$total_articles = $total_articles['nbarticle'];
$artpage = 2; //nombre d'article par page
$nbpage = ceil($total_articles / $artpage); //ceil arrondis
//echo $nbpage;       

$get_Page = (isset($_GET['page']) ? $_GET['page'] : 1); // definition de la valeur " "page"
$start = (($get_Page - 1) * $artpage);

if (isset($_SESSION['MAIL_OK'])){
$smarty->assign('mail_ok',$_SESSION['MAIL_OK']);
}

unset($_SESSION['MAIL_OK']); //termine le script


$select_all_post = "SELECT id, titre, texte, DATE_FORMAT(date, '%d/%m/%Y') as date_fr FROM articles WHERE publie = 1 LIMIT $start,$artpage";
//$select_all_post = "SELECT id, titre, texte, DATE_FORMAT(date, '%d/%m/%Y') as date_fr FROM articles WHERE publie = 1;"; //requette sql dans la table article avec une condition sur le champ publie ( le format de date est choisi par nos soin(%d/%m/%Y)aller voir la doc sur date format)
$request = mysql_query($select_all_post); //on place dans une variable l'execution de la requet SQL
// Affichage de notre requete sans concaténation
/*
  while ($result_request = mysql_fetch_array($request)){

  ?>
  <img src="img/<?php echo $result_request['id']; ?>.jpg" alt="mon image"/>
  <?php


  echo '<h2>' . $result_request['titre'] . '</h2>';
  echo '<p>' . $result_request['texte'] . '</p>';
  echo '<p>' . $result_request['date'] . '</p>'  ;
  // echo '<img src="img/' . $result_request['id'] . '.jpg" alt="Phot N°' . $result_request['id'] . '">';
  }
 */

//avec concaténation
while ($result_request = mysql_fetch_array($request)) {//on crée une requête (result_request) qui devient un tableau (my_sql_fetch_array)et on y met les données de $request
    $tableauArticleSmarty[] = $result_request;
}

$smarty->assign('tableauArticleSmarty',$tableauArticleSmarty);
$smarty->assign('get_page',$get_Page);
$smarty->assign('nbpage',$nbpage);
//** un-comment the following line to show the debug console
$smarty->debugging = true;


$smarty->display('index.tpl');



include_once 'include/menu.inc.php'; //on insert le menu HTML
include_once 'include/footer.inc.php'; //on insert le footer HTML

?>   