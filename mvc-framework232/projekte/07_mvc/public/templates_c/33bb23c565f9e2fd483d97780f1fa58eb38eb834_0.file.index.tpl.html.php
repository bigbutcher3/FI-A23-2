<?php
/* Smarty version 4.3.4, created on 2024-02-23 10:24:37
  from '/vagrant/projekte/07_smarty/template/Navi/index.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */

use use if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65d864552ffb33_66175057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33bb23c565f9e2fd483d97780f1fa58eb38eb834' => 
    array (
      0 => '/vagrant/projekte/07_smarty/template/Navi/index.tpl.html',
      1 => 1692101924,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65d864552ffb33_66175057 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="navbar navbar-expand-lg navbar-light justify-content-lg-center mt-3">
        <a class="navbar-brand nav-link <?php if ($_smarty_tpl->tpl_vars['ActivItem']->value == 'home') {?> active <?php }?>" href="/">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTop" aria-controls="navbarTop"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTop">
            <ul class="nav-pills navbar-nav">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['templateNaviTopJson']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['item']->value['controllerName'] != 'home') {?>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['ActivItem']->value === $_smarty_tpl->tpl_vars['item']->value['controllerName']) {?> active <?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['button'];?>
</a>
                </li>
                <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            </ul>
        </div>
    </nav>

<div class="container"><?php }
}
