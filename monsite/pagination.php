<?php
require_once 'config/bdd.inc.php'; // on appele la base de données
$select_all_post = "SELECT COUNT(*) as nbarticle FROM articles WHERE publie = 1";
$request=  mysql_query($select_all_post);

$total_articles=mysql_fetch_array($request);
//echo '<h2>' . $result_request['nbarticle'] . '</h2>';
$total_articles=$total_articles['nbarticle'];
$artpage = 2;//nombre d'article par page
$nbpage = ceil($total_articles/$artpage);//ceil arrondis
//echo $nbpage;       
  
$get_Page = (isset($_GET['Page']) ? $_GET['Page'] : 1); // definition de la valeur " "page"
$start = (($get_Page-1)*$total_articles);
$select_all_post = "SELECT id, titre, texte, DATE_FORMAT(date, '%d/%m/%Y') as date_fr FROM articles WHERE publie = 1 LIMIT $start,$artpage";    
echo $select_all_post;
?>
