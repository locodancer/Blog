<?php /* Smarty version Smarty-3.1.15, created on 2015-11-10 13:59:51
         compiled from "template\connexion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:177525641f39ac56a96-40242058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8347313a0ac81bc86e30ccdf9d60f6e2871abcc5' => 
    array (
      0 => 'template\\connexion.tpl',
      1 => 1447163341,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177525641f39ac56a96-40242058',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5641f39ad68208_00792420',
  'variables' => 
  array (
    'connect_echec' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5641f39ad68208_00792420')) {function content_5641f39ad68208_00792420($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['connect_echec']->value)) {?>
    <div class="alert alert-success" id="notif">
        <?php echo $_smarty_tpl->tpl_vars['connect_echec']->value;?>

        </div>
    <?php }?>    

<h1> Connexion Utilisateur </h1>
<p> Saissiez votre E-mail et mot de passe<p>
<form action="connexion.php" method="post" enctype="multipart/form-data" id="form_connexion" name="form_connexion">

    <div class="clearfix">
        <label for="email">Email: </label>
        <div class="input">
            <input type="text" name="email" id="email" value=""/>
        </div>
    </div>
    <div class="clearfix">
        <label for="mdp">Mot de Passe: </label>
        <div class="input">
            <input type="password" name="mdp" id="mdp"/>
        </div>
    </div>        
    <div class="form-actions">
        <input type="submit" name="connect" value="connectez-vous" class="btn btn-large btn-primary"/>
    </div>
</form>    <?php }} ?>
