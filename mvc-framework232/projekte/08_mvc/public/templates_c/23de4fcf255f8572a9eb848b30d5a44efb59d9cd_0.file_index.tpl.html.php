<?php
/* Smarty version 5.4.1, created on 2024-11-11 08:22:56
  from 'file:/vagrant/projekte/08_mvc/src/Views/Csv/index.tpl.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6731b0d02a9560_80248937',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23de4fcf255f8572a9eb848b30d5a44efb59d9cd' => 
    array (
      0 => '/vagrant/projekte/08_mvc/src/Views/Csv/index.tpl.html',
      1 => 1729578157,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6731b0d02a9560_80248937 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/vagrant/projekte/08_mvc/src/Views/Csv';
?><div class="container">
    <div class="card btn-group-lg mt-3">
        <div class="card-body ">
            <h3 class="card-title">Konvertierung</h3>
            <div class="form-group">
                <form enctype="multipart/form-data">
                    <div class="row mt-3">
                        <div class="col-4">
                            <label for="jsonfiles" class="mb-2">Upload File</label><br>
                            <input type="file" class="form-control" name="files" id="jsonfiles">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6">
                            <button type="submit" class="btn btn-custom" formmethod="post"
                                    formaction="/csv/upload" value="Anlegen">Upload beginnen
                            </button>
                            <button type="submit" class="btn btn-custom" formmethod="post"
                                    formaction="/csv/downloadIfFileExists">Download beginnen
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><?php }
}
