<?php
/* Smarty version 5.4.1, created on 2024-10-24 14:55:59
  from 'file:/vagrant/projekte/08_mvc/src/Views/Textspeichernjson/Kontaktformular/index.tpl.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_671a43df8860e5_05044882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd23e59f2f8a30c760329ef27070ada436a5a2e88' => 
    array (
      0 => '/vagrant/projekte/08_mvc/src/Views/Textspeichernjson/Kontaktformular/index.tpl.html',
      1 => 1729580154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_671a43df8860e5_05044882 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/vagrant/projekte/08_mvc/src/Views/Textspeichernjson/Kontaktformular';
?><div class="container">
    <div class="card mt-3">
        <div class="card-body">
            <div class="row">
                <div class="offset-1 col-10">
                    <form class="kontaktformular">
                        <fieldset>
                            <legend>Kontaktformular</legend>
                            <div class="form-check form-check-inline mt-3">
                                <input class="form-check-input" type="radio" name="anrede" id="Herr"
                                       value="Herr" checked>
                                <label class="form-check-label" for="Herr">Herr</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="anrede" id="Frau"
                                       value="Frau" <?php echo $_smarty_tpl->getValue('AuswahlSession')->checkedselectedFeld('anrede','Frau','checked');?>
>
                                <label class="form-check-label" for="Frau">Frau</label>
                            </div>
                            <div class="input-group mb-3 mt-3">
                                <label class="input-group-text" for="Name">Name</label>
                                <input type="text" class="form-control" id="Name" name="name" title="affe"
                                       placeholder="Bitte einen Namen eintragen!!"
                                       value="<?php echo $_smarty_tpl->getValue('AuswahlSession')->sessionInput('name');?>
">
<!--                                       value="<?php if ((null !== ($_SESSION['name'] ?? null))) {
echo $_SESSION['name'];
}?>">-->
                                <label class="input-group-text" for="VName">Vorname</label>
                                <input type="text" class="form-control" id="VName" name="vname"
                                       placeholder="Bitte einen Vornamen eintragen!!"
                                       value="<?php echo $_smarty_tpl->getValue('AuswahlSession')->sessionInput('vname');?>
">
<!--                                       value="<?php if ((null !== ($_SESSION['vname'] ?? null))) {
echo $_SESSION['vname'];
}?>">-->
                            </div>
                            <div class="input-group mb-3 mt-3">
                                <label class="input-group-text" for="strasse">Straße</label>
                                <input type="text" class="form-control" id="strasse" name="strasse"
                                       placeholder="Straßennamen"
                                       value="<?php echo $_smarty_tpl->getValue('AuswahlSession')->sessionInput('strasse');?>
">
                                <label class="input-group-text" for="hausnr">HausNr.</label>
                                <input type="text" class="form-control" id="hausnr" name="hausnr"
                                       placeholder="Hausnummer"
                                       value="<?php echo $_smarty_tpl->getValue('AuswahlSession')->sessionInput('hausnr');?>
">
                            </div>
                            <div class="input-group mb-3 mt-3">
                                <label class="input-group-text" for="plz">PLZ</label>
                                <input type="text" class="form-control" id="plz" name="plz"
                                       placeholder="PLZ" value="<?php echo $_smarty_tpl->getValue('AuswahlSession')->sessionInput('plz');?>
">
                                <label class="input-group-text" for="ort">Ort</label>
                                <input type="text" class="form-control" id="ort" name="ort"
                                       placeholder="Ort"
                                       value="<?php echo $_smarty_tpl->getValue('AuswahlSession')->sessionInput('ort');?>
">
                            </div>
                            <div class="input-group mb-3 mt-3">
                                <label class="input-group-text" for="email">E-Mail</label>
                                <input type="text" class="form-control" id="email" name="email"
                                       placeholder="E-Mail"
                                       value="<?php echo $_smarty_tpl->getValue('AuswahlSession')->sessionInput('email');?>
">
                                <label class="input-group-text" for="tel">Telefon</label>
                                <input type="text" class="form-control" id="tel" name="tel"
                                       placeholder="Telefonnummer"
                                       value="<?php echo $_smarty_tpl->getValue('AuswahlSession')->sessionInput('tel');?>
">
                            </div>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="Verein">Fußballverein</label>
                                <select class="form-select" name="verein" id="Verein">
                                    <option value=''>---Bitte auswählen---</option>
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, (defined('VEREIN') ? constant('VEREIN') : null), 'value', false, 'item');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach0DoElse = false;
?>
                                    <option value="<?php echo $_smarty_tpl->getValue('item');?>
" <?php ob_start();
echo $_smarty_tpl->getValue('item');
$_prefixVariable1 = ob_get_clean();
echo $_smarty_tpl->getValue('AuswahlSession')->checkedselectedFeld('verein',$_prefixVariable1,'selected');?>
 ><?php echo $_smarty_tpl->getValue('value');?>
</option>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="Laender">Länder</label>
                                <select class="form-select" name="laender" id="Laender">
                                    <option value=''>---Bitte auswählen---</option>
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, (defined('LAENDER') ? constant('LAENDER') : null), 'value', false, 'item');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach1DoElse = false;
?>
                                    <option value="<?php echo $_smarty_tpl->getValue('item');?>
" <?php ob_start();
echo $_smarty_tpl->getValue('item');
$_prefixVariable2 = ob_get_clean();
echo $_smarty_tpl->getValue('AuswahlSession')->checkedselectedFeld('laender',$_prefixVariable2,'selected');?>
><?php echo $_smarty_tpl->getValue('value');?>
</option>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, (defined('SPORTART') ? constant('SPORTART') : null), 'value', false, 'item');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach2DoElse = false;
?>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="sportart[]" id="<?php echo $_smarty_tpl->getValue('item');?>
"
                                       value="<?php echo $_smarty_tpl->getValue('value');?>
" <?php ob_start();
echo $_smarty_tpl->getValue('value');
$_prefixVariable3 = ob_get_clean();
echo $_smarty_tpl->getValue('AuswahlSession')->arrayFeld('sportart',$_prefixVariable3,'checked');?>
>
                                <label class="form-check-label" for="<?php echo $_smarty_tpl->getValue('item');?>
"><?php echo $_smarty_tpl->getValue('value');?>
</label>
                            </div>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            <div class="form-group mt-3">
                                <label for="Feedback">Feedback</label>
                                <textarea class="form-control" id="Feedback" name="feedback"
                                          rows="3"><?php echo $_smarty_tpl->getValue('AuswahlSession')->sessionInput('feedback');?>
</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3" formaction="/Textspeichernjson/senden"
                                    formmethod="post"
                                    name="senden">Submit
                            </button>
                            <button type="submit" class="btn btn-primary mt-3" formaction="/Textspeichernjson/ueberpruefungSession"
                                    name="auslesen"
                                    formmethod="post">Login
                            </button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
