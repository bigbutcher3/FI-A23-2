<?php
/* Smarty version 5.4.1, created on 2024-09-23 15:51:28
  from 'file:/vagrant/projekte/07_mvc/src/Views/Constsession/index.tpl.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_66f17260637520_36888189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81d37cfe9ae0fb0ac69c1f3e51b03bea14f2db27' => 
    array (
      0 => '/vagrant/projekte/07_mvc/src/Views/Constsession/index.tpl.html',
      1 => 1724756080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66f17260637520_36888189 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/vagrant/projekte/07_mvc/src/Views/Constsession';
?><div class="card  mt-3">
    <div class="card-body ">
        <div class="row">
            <div class="col-6">
                <h1><?php echo (defined('TEXTCONST') ? constant('TEXTCONST') : null);?>
</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <ul>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, (defined('TEMPLATEINFOJSON') ? constant('TEMPLATEINFOJSON') : null), 'item');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach0DoElse = false;
?>
                    <li><?php echo $_smarty_tpl->getValue('item')['controllerName'];?>
</li>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
            <div class="col-6">
                <ul>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, (defined('TEMPLATEINFOJSON') ? constant('TEMPLATEINFOJSON') : null), 'item');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach1DoElse = false;
?>
                    <li><?php echo $_smarty_tpl->getValue('item')['title'];?>
</li>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <ul>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, (defined('TESTARRAY') ? constant('TESTARRAY') : null), 'value');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('value')->value) {
$foreach2DoElse = false;
?>
                    <li><?php echo $_smarty_tpl->getValue('value');?>
</li>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
            <div class="col-6">
                <ul>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, (defined('TESTARRAYASSO') ? constant('TESTARRAYASSO') : null), 'value', false, 'item');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach3DoElse = false;
?>
                    <li><?php echo $_smarty_tpl->getValue('item');?>
</li>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <h1><?php echo $_SESSION['text'];?>
</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <ul>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_SESSION['json'], 'item');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach4DoElse = false;
?>
                    <li><?php echo $_smarty_tpl->getValue('item')['controllerName'];?>
</li>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
            <div class="col-6">
                <ul>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_SESSION['json'], 'item');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach5DoElse = false;
?>
                    <li><?php echo $_smarty_tpl->getValue('item')['title'];?>
</li>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <ul>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_SESSION['array'], 'value');
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('value')->value) {
$foreach6DoElse = false;
?>
                    <li><?php echo $_smarty_tpl->getValue('value');?>
</li>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
            <div class="col-6">
                <ul>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_SESSION['arrayasso'], 'value', false, 'item');
$foreach7DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach7DoElse = false;
?>
                    <li><?php echo $_smarty_tpl->getValue('item');?>
</li>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
        </div>
    </div>
</div><?php }
}
