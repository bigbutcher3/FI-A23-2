<?php
/* Smarty version 5.4.1, created on 2024-11-08 11:00:19
  from 'file:/vagrant/projekte/08_mvc/src/Views/Verzeichniserstellung/VerzAuswahlFormular/index.tpl.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_672de1333f6f32_87666205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '508d1d7c0525eb9c4c224bff99ee5cf96cdfb4f1' => 
    array (
      0 => '/vagrant/projekte/08_mvc/src/Views/Verzeichniserstellung/VerzAuswahlFormular/index.tpl.html',
      1 => 1729578158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_672de1333f6f32_87666205 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/vagrant/projekte/08_mvc/src/Views/Verzeichniserstellung/VerzAuswahlFormular';
?><div class="container">
    <div class="card mt-3">
        <div class="card-body">
            <form>
                <div class="row mt-3">
                    <div class="col-4">
                        <label for="neuesVerzeichnis" class="form-label">Zum Anlegen eines Verzeichnisses</label>
                        <input type="text" class="form-control" id="neuesVerzeichnis" name="neuesVerzeichnis"
                               placeholder="Ein neues Verzeichnis anlegen!">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <button type="submit" class="btn btn-custom" formmethod="post"
                                formaction="/verzeichniserstellung/mkdir" value="Anlegen">Anlegen
                        </button>
                    </div>
                </div>
            </form>
            <div class="row mt-1">
                <div class="col-12">
                    <h5 style="color: #ff0000"><?php if ((null !== ($_SESSION['meldung'] ?? null))) {
echo $_SESSION['meldung'];
}?></h5>
                </div>
            </div>
            <form>
                <div class="row mt-2">
                    <div class="col-4">
                        <label for="auswahlVerzeichnis" class="form-label">Bitte Verzeichnis auswählen</label>
                        <select class="form-control" name="verzeichnis" id="auswahlVerzeichnis">
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_SESSION['verzeichnisse'], 'value');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('value')->value) {
$foreach0DoElse = false;
?>
                            <option value="<?php echo $_smarty_tpl->getValue('value');?>
" <?php echo $_smarty_tpl->getValue('AuswahlSession')->checkedselectedFeld('verzeichnis',$_smarty_tpl->getValue('value'),'selected');?>
 >
                                <?php echo $_smarty_tpl->getValue('value');?>

                            </option>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <button type="submit" class="btn btn-custom" formmethod="post"
                                formaction="/verzeichniserstellung/uploadView" value="Anlegen">Zum Upload
                        </button>
                        <button type="submit" class="btn btn-custom" formmethod="post"
                                formaction="/verzeichniserstellung/download">Zum Download
                        </button>
                        <button type="submit" class="btn btn-custom" formmethod="post"
                                formaction="/verzeichniserstellung/verzeichnisDel">Verzeichnis del
                        </button>
                        <button type="submit" class="btn btn-custom" formmethod="post"
                                formaction="/verzeichniserstellung/verzeichnisInhaltDel">Alle File del
                        </button>
                        <button type="submit" class="btn btn-custom" formmethod="post"
                                formaction="/verzeichniserstellung/galerie">zur Bildergalerie
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div><?php }
}
