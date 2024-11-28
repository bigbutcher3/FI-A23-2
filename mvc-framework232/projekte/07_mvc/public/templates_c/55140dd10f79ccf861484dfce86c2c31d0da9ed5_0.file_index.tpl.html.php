<?php
/* Smarty version 5.4.1, created on 2024-10-21 09:29:44
  from 'file:/vagrant/projekte/07_mvc/src/Views/Schleifen/index.tpl.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_671602e8dc98a5_51332357',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55140dd10f79ccf861484dfce86c2c31d0da9ed5' => 
    array (
      0 => '/vagrant/projekte/07_mvc/src/Views/Schleifen/index.tpl.html',
      1 => 1729495778,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/vagrant/projekte/07_mvc/header.tpl' => 1,
  ),
))) {
function content_671602e8dc98a5_51332357 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/vagrant/projekte/07_mvc/src/Views/Schleifen';
$_smarty_tpl->configLoad('config/smarty.conf', "Kunden");
?>

<div class="card  mt-3">
    <div class="card-body ">
        <h3 class="card-title">Hallo Text <?php echo $_smarty_tpl->getConfigVariable('cardTitleConf');?>
</h3>
        <h3 class="card-title">Hallo Text <?php echo $_smarty_tpl->getValue('cardTitle');?>
</h3>
        <h3><?php echo $_smarty_tpl->getConfigVariable('seitenTitel');?>
</h3>
        <h3><?php echo $_smarty_tpl->getConfigVariable('nocheintitle');?>
</h3>
        <div class="row">
            <div class="col-6">
                                
                                <pre>

                    <?php echo json_encode($_smarty_tpl->getValue('array'));?>

                    <?php echo json_encode($_smarty_tpl->getValue('array'));?>

                </pre>
                Hallo <?php echo $_smarty_tpl->getValue('array')[0];?>
, herzlich Willkommen!
                <br>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('array'), 'item');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach0DoElse = false;
?>
                <?php echo $_smarty_tpl->getValue('item');?>
<br>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('arrayAsso'), 'value', false, 'item');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach1DoElse = false;
?>
                <?php echo $_smarty_tpl->getValue('item');?>
:<?php echo $_smarty_tpl->getValue('value');?>
<br>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

            </div>
        </div>
        <div class="row">
            <div class="col-6">
<pre>

   </pre>
                <ul>
                    <li><?php echo $_smarty_tpl->getValue('kontakteAssoziativen')['fax'];?>
</li>
                    <li><?php echo $_smarty_tpl->getValue('kontakteAssoziativen')['email'];?>
</li>
                    <li>
                        <ul>
                            <li><?php echo $_smarty_tpl->getValue('kontakteAssoziativen')['telefon']['privat'];?>
</li>
                            <li><?php echo $_smarty_tpl->getValue('kontakteAssoziativen')['telefon']['mobil'];?>
</li>
                        </ul>
                    </li>
                </ul>
                <ul>
                    <li><?php echo $_smarty_tpl->getValue('kontakte')[0];?>
</li>
                    <li><?php echo $_smarty_tpl->getValue('kontakte')[1];?>
</li>
                    <li>
                        <ul>
                            <li><?php echo $_smarty_tpl->getValue('kontakte')[2][0];?>
</li>
                            <li><?php echo $_smarty_tpl->getValue('kontakte')[2][1];?>
</li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <ul>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('kollegenMitVorname'), 'vorname', false, 'k');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('k')->value => $_smarty_tpl->getVariable('vorname')->value) {
$foreach2DoElse = false;
?>
                    <li><?php echo $_smarty_tpl->getValue('k');?>
: <?php echo $_smarty_tpl->getValue('vorname');?>
</li>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
        </div>
                <br>
        <?php $_smarty_tpl->renderSubTemplate("file:/vagrant/projekte/07_mvc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <br>
        <?php echo $_SERVER['REQUEST_URI'];?>

        <br>
        <?php echo $_SERVER['SERVER_NAME'];?>

        <br>
        <?php $_smarty_tpl->renderSubTemplate(((string)$_smarty_current_dir)."/foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <br>
    </div>
</div><?php }
}
