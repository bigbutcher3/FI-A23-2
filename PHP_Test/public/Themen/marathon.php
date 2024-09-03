<?php
$strecken = array(42.195, 30, 25, 21.075, 15, 10, 5);
?>

    <div id="container">
        <table id="zeit" class="display">
            <thead>
            <tr>
                <th><b>km/h</b></th>
                <?php
                foreach ($strecken as $value) {
                    echo "<th><b>$value</b></th>";
                }
                ?>
            </tr>
            <tr>
                <td>6.0</td>
                <?php
                echo "<td>";
                echo strtotime($strecken[0] / 6);
                ?>
            </tr>
            </thead>
        </table>
    </div>

<?php
