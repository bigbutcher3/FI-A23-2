<?php
/* Smarty version 5.4.1, created on 2024-11-08 11:02:33
  from 'file:/vagrant/projekte/08_mvc/src/Views/Verzeichniserstellung/DownloadFormular/index.tpl.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_672de1b9303841_41465006',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4b9ca7d1158582dfe30d463b91f0b328c5bb8cb' => 
    array (
      0 => '/vagrant/projekte/08_mvc/src/Views/Verzeichniserstellung/DownloadFormular/index.tpl.html',
      1 => 1729578158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_672de1b9303841_41465006 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/vagrant/projekte/08_mvc/src/Views/Verzeichniserstellung/DownloadFormular';
?><div class="container">
    <div class="card btn-group-lg mt-3">
        <div class="card-body ">
            <table id="imgDownload" class="table table-striped" style="width:100%">
                <thead>
                <tr>
                    <th>Anzahl</th>
                    <th>ImgName</th>
                    <th>ImgPath</th>
                    <th>ImgTyp</th>
                </tr>
                </thead>
                <tbody>
                <?php
$_smarty_tpl->assign('i', null);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('result')['imgName'])-1+1 - (0) : 0-($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('result')['imgName'])-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                <tr>
                    <td><?php echo $_smarty_tpl->getValue('i')+1;?>
</td>
                    <td><?php echo $_smarty_tpl->getValue('result')['imgName'][$_smarty_tpl->getValue('i')];?>
</td>
                    <td><a href="<?php echo $_smarty_tpl->getValue('result')['ImgPath'][$_smarty_tpl->getValue('i')];?>
" download> <img class="downloadTable"
                                                                          src="<?php echo $_smarty_tpl->getValue('result')['ImgPath'][$_smarty_tpl->getValue('i')];?>
"
                                                                          alt="<?php echo $_smarty_tpl->getValue('result')['imgName'][$_smarty_tpl->getValue('i')];?>
"></a></td>
                    <td><?php echo $_smarty_tpl->getValue('result')['ImgTyp'][$_smarty_tpl->getValue('i')];?>
</td>
                </tr>
                <?php }
}
?>
                </tbody>
            </table>
            <div class="row mt-2">
                <div class="col-2">
                    <a href="/verzeichniserstellung" role="button" class="btn btn-custom btn-large">Zurück</a>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
