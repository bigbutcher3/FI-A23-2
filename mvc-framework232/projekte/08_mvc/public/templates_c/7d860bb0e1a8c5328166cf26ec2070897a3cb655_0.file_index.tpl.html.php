<?php
/* Smarty version 5.4.1, created on 2024-10-24 14:56:02
  from 'file:/vagrant/projekte/08_mvc/src/Views/Datatables/index.tpl.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_671a43e23d5418_76714124',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d860bb0e1a8c5328166cf26ec2070897a3cb655' => 
    array (
      0 => '/vagrant/projekte/08_mvc/src/Views/Datatables/index.tpl.html',
      1 => 1729580154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_671a43e23d5418_76714124 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/vagrant/projekte/08_mvc/src/Views/Datatables';
?><div class="container">
    <div class="card mt-3">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <table id="maurer" class="table table-striped wrap hover" style="width:100%">
                        <thead>
                        <tr>
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, (defined('NAMEARRAY') ? constant('NAMEARRAY') : null), 'value', false, 'item');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach0DoElse = false;
?>
                            <th><?php echo $_smarty_tpl->getValue('value');?>
</th>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_SESSION['datensatzjson'], 'datensatz');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('datensatz')->value) {
$foreach1DoElse = false;
?>
                        <tr>
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, (defined('NAMEARRAY') ? constant('NAMEARRAY') : null), 'value', false, 'item');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach2DoElse = false;
?>
                            <td><?php echo $_smarty_tpl->getValue('datensatz')[$_smarty_tpl->getValue('item')];?>
</td>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </tr>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, (defined('NAMEARRAY') ? constant('NAMEARRAY') : null), 'value', false, 'item');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach3DoElse = false;
?>
                            <th><?php echo $_smarty_tpl->getValue('value');?>
</th>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
