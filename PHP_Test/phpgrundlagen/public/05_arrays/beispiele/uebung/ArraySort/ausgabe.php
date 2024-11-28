<?php
/*
 *  @author Frank-Michael Heldt <info@webdesign-heldt.de>
 *  @date 18.06.2017 10:11:15
 * 
 *  @project Grundlagen
 */

$filterField = isset($_SESSION['sortField']) ? strtolower($_SESSION['sortField']) : null;
$sortMethod = isset($_SESSION['sortMethod']) ? $_SESSION['sortMethod'] : null;

$contacts = ReadContacts(DATA_FILE);        

switch ($sortMethod)
{
    case 'bubble':

        $contacts = BubbleSort($contacts, $filterField);
        break;
    
    case 'quick':
        $contacts = QuickSort($contacts, $filterField, 0, count($contacts)-1);
        break;

    default:
        break;
}

$keys = array_keys($contacts[0]);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <div class="container">
            <div class="center">
                <?php if (count($contacts) > 0) : ?>
                    <table class="table-list">
                        <thead>
                            <tr class="header">
                                <?php foreach ($keys as $key):?>
                                    <th><?php echo ucfirst($key); ?></th>
                                <?php endforeach;?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($contacts as $contact) : ?>
                                <tr class="value">
                                    <?php foreach ($contact as $key => $value) : ?>
                                    <?php if($formFields[$key]['type'] === 'date' )
                                        $value = strftime('%d.%m.%Y', $value);
                                        ?>
                                    <td><?php echo $value; ?></td>
                                    <?php endforeach; ?>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <div class="center">
                <form
                    method="post"
                    action="<?php echo $_SERVER['PHP_SELF']; ?>"
                    >
                    <select name="field" id="field">
                        <?php foreach ($keys as $key):?>
                        <?php if($key === $filterField) :?>
                        <option selected="selected"><?php echo ucfirst($key); ?></option>
                        <?php else:?>
                        <option><?php echo ucfirst($key); ?></option>
                        <?php endif;?>
                        <?php endforeach;?>
                    </select>
                    <select name="method" id="method">
                        <option value="">unsortiert</option>
                        <?php foreach ($sortMethods as $method => $name):?>
                        <?php if($method === $sortMethod) :?>
                        <option selected="selected" value="<?php echo $method;?>"><?php echo ucfirst($name); ?></option>
                        <?php else:?>
                        <option value="<?php echo $method;?>"><?php echo ucfirst($name); ?></option>
                        <?php endif;?>
                        <?php endforeach;?>
                    </select>
                    <input type="hidden" name="action" value="sort" />
                    <input type="submit" value="sortieren" />
                </form>
                </div>
                <?php else : ?>
                    <div class="center">Keine Daten vorhanden</div>
                <?php endif; ?>
                <a href="<?php echo $_SERVER['PHP_SELF']; ?>" class="btn">zurück</a>
            </div>
        </div>
    </body>
</html>