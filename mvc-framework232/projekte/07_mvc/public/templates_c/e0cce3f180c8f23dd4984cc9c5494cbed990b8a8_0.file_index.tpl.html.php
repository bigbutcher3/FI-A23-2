<?php
/* Smarty version 5.4.1, created on 2024-09-23 15:51:57
  from 'file:/vagrant/projekte/07_mvc/src/Views/ifelse/index.tpl.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_66f1727d007ae4_63672831',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0cce3f180c8f23dd4984cc9c5494cbed990b8a8' => 
    array (
      0 => '/vagrant/projekte/07_mvc/src/Views/ifelse/index.tpl.html',
      1 => 1724758517,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66f1727d007ae4_63672831 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/vagrant/projekte/07_mvc/src/Views/ifelse';
?><div class="card  mt-3">
    <div class="card-body ">
        <div class="row">
            <div class="col-12">
                <h1>{if},{elseif},{else}</h1>
                <table class="table" id="datensaetze">
                    <thead>
                    <tr>
                        <th>Operator</th>
                        <th>Alternativen</th>
                        <th>Syntax Beispiel</th>
                        <th>Bedeutung</th>
                        <th>PHP Äquivalent</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td> ==</td>
                        <td>eq</td>
                        <td>$a eq $b</td>
                        <td>ist gleich</td>
                        <td> ==</td>
                    </tr>
                    <tr>
                        <td>!=</td>
                        <td>ne, neq</td>
                        <td>$a neq $b</td>
                        <td>ist ungleich</td>
                        <td>!=</td>
                    </tr>
                    <tr>
                        <td>></td>
                        <td>gt</td>
                        <td>$a gt $b</td>
                        <td>größer als</td>
                        <td>></td>
                    </tr>
                    <tr>
                        <td><</td>
                        <td>lt</td>
                        <td>$a lt $b</td>
                        <td>kleiner als</td>
                        <td><</td>
                    </tr>
                    <tr>
                        <td>>=</td>
                        <td>gte, ge</td>
                        <td>$a ge $b</td>
                        <td>größer oder gleich</td>
                        <td> >=</td>
                    </tr>
                    <tr>
                        <td><=</td>
                        <td>lte, le</td>
                        <td>$a le $b</td>
                        <td>kleiner oder gleich</td>
                        <td><=</td>
                    </tr>
                    <tr>
                        <td>===</td>
                        <td></td>
                        <td>$a === 0</td>
                        <td>identisch</td>
                        <td>===</td>
                    </tr>
                    <tr>
                        <td>!</td>
                        <td>not</td>
                        <td>not $a</td>
                        <td>Negation</td>
                        <td>!</td>
                    </tr>
                    <tr>
                        <td>%</td>
                        <td>mod</td>
                        <td>$a mod $b</td>
                        <td>Modulo</td>
                        <td> %</td>
                    </tr>
                    <tr>
                        <td>is [not] div by</td>
                        <td></td>
                        <td>$a is not div by 4</td>
                        <td> Ist [nicht] teilbar durch</td>
                        <td>$a % $b == 0</td>
                    </tr>
                    <tr>
                        <td>is [not] even</td>
                        <td></td>
                        <td>$a is not even</td>
                        <td> ist [k]eine gerade Zahl</td>
                        <td>$a % 2 == 0</td>
                    </tr>
                    <tr>
                        <td>is [not] even by</td>
                        <td></td>
                        <td>$a is [not] even by $b
                        <td>[k]eine gerade Gruppierung</td>
                        <td>($a / $b) % 2 == 0</td>
                    </tr>
                    <tr>
                        <td>is [not] odd</td>
                        <td></td>
                        <td> $a is not odd</td>
                        <td>ist [k]eine ungerade Zahl</td>
                        <td>$a % 2 != 0</td>
                    </tr>
                    <tr>
                        <td>is [not] odd by</td>
                        <td></td>
                        <td>$a is not odd by $b
                        <td>[k]eine ungerade Gruppierung</td>
                        <td>($a / $b) % 2 != 0</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-12">
                
                <p>{if Vergleichsoperatoren} true {/if} </p>
                <p>{elseif Vergleichsoperatoren}true{/elseif} </p>
                <p>{else}false{/else} </p>
                
            </div>
        </div>
    </div>
</div><?php }
}
