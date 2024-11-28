<?php
/* Smarty version 5.4.1, created on 2024-10-24 14:55:58
  from 'file:/vagrant/projekte/08_mvc/template/Navi/index.tpl.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_671a43de5685b6_58093226',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8d97bc3c25210111079b7ee3461dd905323c955' => 
    array (
      0 => '/vagrant/projekte/08_mvc/template/Navi/index.tpl.html',
      1 => 1729580154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_671a43de5685b6_58093226 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/vagrant/projekte/08_mvc/template/Navi';
?><div class="container">
    <nav class="navbar navbar-expand-lg navbar-light justify-content-lg-center mt-3">
        <a class="navbar-brand nav-link <?php if ($_smarty_tpl->getValue('ActivItem') == 'home') {?> active <?php }?>" href="/">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTop" aria-controls="navbarTop"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTop">
            <ul class="nav-pills navbar-nav">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, (defined('TEMPLATEINFOJSON') ? constant('TEMPLATEINFOJSON') : null), 'item');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach0DoElse = false;
?>
                <?php if ($_smarty_tpl->getValue('item')['controllerName'] != 'home') {?>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->getValue('ActivItem') === $_smarty_tpl->getValue('item')['controllerName']) {?> active <?php }?>" href="<?php echo $_smarty_tpl->getValue('item')['href'];?>
"><?php echo $_smarty_tpl->getValue('item')['button'];?>
</a>
                </li>
                <?php }?>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    </nav>
</div>
<div class="container"><?php }
}
