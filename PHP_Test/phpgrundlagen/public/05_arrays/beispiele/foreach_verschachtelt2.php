<?php
    $staedte = array(
        array(
            'name'           => 'München',
            'land'           => 'Deutschland',
            'einwohner'      => 1300000,
            'partnerstaedte' => array(
                'Bordeaux',
                'Cincinnati',
                'Edinburgh',
                'Harare',
                'Kiew'
            )
        ),
        array(
            'name'           => 'Berlin',
            'land'           => 'Deutschland',
            'einwohner'      => 3400000,
            'partnerstaedte' => array(
                'Paris',
                'Budapest',
                'Mexiko City',
                'Tokio',
                'Istanbul',
                'Moskau'
            )
        ),
        array(
            'name'      => 'Paris',
            'land'      => 'Frankreich',
            'einwohner' => 2200000,
            'partnerstaedte' => array(
                'Rom',
                'Berlin',
                'Kyoto',
                'Mexiko City',
                'Seoul',
                'Washington'
            )
        )
    );
?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Städte</title>
</head>

<body>
    <h1>Städte</h1> 
    
    <table>
        <tr>
            <th>Name</th>
            <th>Land</th>
            <th>Einwohner</th>
            <th>Partnerstädte</th>
        </tr>
        <?php foreach ($staedte as $stadt) { ?>
            <tr>
                <td><?php echo $stadt['name'] ?></td>
                <td><?php echo $stadt['land'] ?></td>
                <td><?php echo $stadt['einwohner'] ?></td>
                <td>
                    <ul>
                        <?php foreach ($stadt['partnerstaedte'] as $partner) { ?>
                            <li><?php echo $partner; ?></li>
                        <?php } ?>
                    </ul>
                </td>
            </tr>  
        <?php } ?>
    </table>
    
</body>

</html>