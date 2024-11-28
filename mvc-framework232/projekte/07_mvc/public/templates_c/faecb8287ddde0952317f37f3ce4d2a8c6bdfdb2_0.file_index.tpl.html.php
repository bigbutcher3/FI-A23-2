<?php
/* Smarty version 5.4.1, created on 2024-09-23 15:51:20
  from 'file:/vagrant/projekte/07_mvc/src/Views/Object/index.tpl.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_66f172585f5db5_96934998',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'faecb8287ddde0952317f37f3ce4d2a8c6bdfdb2' => 
    array (
      0 => '/vagrant/projekte/07_mvc/src/Views/Object/index.tpl.html',
      1 => 1724756233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66f172585f5db5_96934998 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/vagrant/projekte/07_mvc/src/Views/Object';
?><div class="card  mt-3">
    <div class="card-body ">
        <div class="row">
            <div class="col-6">
                <ul>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('personen')->getNameArray(), 'name');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('name')->value) {
$foreach0DoElse = false;
?>
                    <li><?php echo $_smarty_tpl->getValue('name');?>
</li>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </ul>
                <ul>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('personen')->getNameArray(), 'item');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach1DoElse = false;
?>
                    <li><?php echo $_smarty_tpl->getValue('item');?>
</li>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
            <div class="col-6">

                <h6>Name: <?php echo $_smarty_tpl->getValue('personen')->name;?>
</h6>
                <h6>Name: <?php echo $_smarty_tpl->getValue('personen')->vorname;?>
</h6>
                <h6>Name: <?php echo $_smarty_tpl->getValue('personen')->getGeburtsdatum();?>
</h6>
            </div>
        </div>
    </div>
</div><?php }
}
