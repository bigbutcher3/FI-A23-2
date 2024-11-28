<?php
$titel = "Marathon";
require_once "../template/headDataTables.tpl.php";
$strecken = array(42.195, 30, 25, 21.075, 15, 10, 5);
$tempi = range(6.0, 14.9, 0.1);
?>
    <div id="container">
        <table id="zeit" class="display" style="width: 100%">
            <thead>
                <th><b>km/h</b></th>
                <?php
                foreach ($strecken as $value) {
                    echo "<th>$value</th>";
                }
                ?>
            </thead>
            <tbody>
                <?php
                foreach ($tempi as $tempo) {
                    echo "<tr><td>$tempo</td>";
                    echo "<td>".gmdate("H:i:s",$strecken[0] / $tempo * 3600)."</td>";
                    echo "<td>".gmdate("H:i:s",$strecken[1] / $tempo * 3600)."</td>";
                    echo "<td>".gmdate("H:i:s",$strecken[2] / $tempo * 3600)."</td>";
                    echo "<td>".gmdate("H:i:s",$strecken[3] / $tempo * 3600)."</td>";
                    echo "<td>".gmdate("H:i:s",$strecken[4] / $tempo * 3600)."</td>";
                    echo "<td>".gmdate("H:i:s",$strecken[5] / $tempo * 3600)."</td>";
                    echo "<td>".gmdate("H:i:s",$strecken[6] / $tempo * 3600)."</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
<script src="../js/jquery-3.7.1.js"></script>
<script src="../js/dataTables.js"></script>
<script>new DataTable('#zeit')</script>
<?php
require_once "../template/footer.tpl.html";
?>