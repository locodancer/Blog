<?php /* Smarty version Smarty-3.1.15, created on 2015-11-10 17:45:22
         compiled from "template\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:81856421f44a76773-79629738%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1330b55f35665f430ce9b8167feebce9b68bc0a' => 
    array (
      0 => 'template\\index.tpl',
      1 => 1447176843,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81856421f44a76773-79629738',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56421f44bfd2b8_85035010',
  'variables' => 
  array (
    'mail_ok' => 0,
    'tableauArticleSmarty' => 0,
    'tableau' => 0,
    'nbpage' => 0,
    'i' => 0,
    'get_page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56421f44bfd2b8_85035010')) {function content_56421f44bfd2b8_85035010($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['mail_ok']->value)) {?>
    <div class="alert alert-success" id="notif">
        <?php echo $_smarty_tpl->tpl_vars['mail_ok']->value;?>

        </div>
    <?php }?>   

<?php  $_smarty_tpl->tpl_vars['tableau'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tableau']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tableauArticleSmarty']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tableau']->key => $_smarty_tpl->tpl_vars['tableau']->value) {
$_smarty_tpl->tpl_vars['tableau']->_loop = true;
?>

<img src="img/<?php echo $_smarty_tpl->tpl_vars['tableau']->value['id'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['tableau']->value['titre'];?>
" width="200px"/>'; 
    <h2><?php echo $_smarty_tpl->tpl_vars['tableau']->value['titre'];?>
</h2>
    <p><?php echo $_smarty_tpl->tpl_vars['tableau']->value['texte'];?>
</p> 
    <p><?php echo $_smarty_tpl->tpl_vars['tableau']->value['date_fr'];?>
</p> 
    
<?php } ?>    

<div class="pagination">
    <ul>
        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['nbpage']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['nbpage']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
            <li <?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['get_page']->value) {?>class="active"<?php }?>><a href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
        <?php }} ?>
    </ul>
</div>    
    

<?php }} ?>
