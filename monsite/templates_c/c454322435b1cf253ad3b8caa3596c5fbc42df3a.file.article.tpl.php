<?php /* Smarty version Smarty-3.1.15, created on 2015-11-10 14:59:26
         compiled from "template\article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32522564204dc281aa0-29785229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c454322435b1cf253ad3b8caa3596c5fbc42df3a' => 
    array (
      0 => 'template\\article.tpl',
      1 => 1447166921,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32522564204dc281aa0-29785229',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_564204dc2aca39_21978311',
  'variables' => 
  array (
    'mail_echec' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564204dc2aca39_21978311')) {function content_564204dc2aca39_21978311($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['mail_echec']->value)) {?>
    <div class="alert alert-error" id="notif">
        <?php echo $_smarty_tpl->tpl_vars['mail_echec']->value;?>

        </div>
    <?php }?>        
    
    
    <form action="article.php" method="post" enctype="multipart/form-data" id="form_article" name="form_article">

        <div class="clearfix">
            <label for="titre">Titre: </label>
            <div class="input">
                <input type="text" name="titre" id="titre" value=""/>
            </div>
        </div>
        <div class="clearfix">
            <label for="texte">Texte: </label>
            <div class="textaea">
                <textarea name="texte" id="texte"></textarea>
            </div>
        </div>
        <div class="clearfix">
            <label for="image">Image: </label>
            <div class="input">
                <input type="file" name="image" id="image"/>
            </div>
        </div>
        <div class="clearfix">
            <label for="publie">Publié: </label>
            <div class="input">
                <input type="checkbox" name="publie" id="publie" value="1"/>
            </div>
        </div>
        <div class="form-actions">
            <input type="submit" name="envoyer" value="envoyer" class="btn btn-large btn-primary"/>
        </div>
    </form><?php }} ?>
