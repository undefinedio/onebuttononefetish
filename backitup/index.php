<?php require "./lib/JsonDB.class.php";
date_default_timezone_set('Europe/Brussels'); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>onebuttononefetish backend</title>
    <link rel="stylesheet" href="/backitup/css/style.css"/>

</head>
<body>
<?php
$db = new JsonDB("../json/");
$fetishes = $db->selectAll("db");

function displayforms($array)
{
    $form = '';
    foreach ($array as $index => $row) {

        $form = $form . '<tr><td colspan="5"><form action="" method="post"><table border="1" style="border-collapse:collapse;border-color: silver;"><tr>';
        $form = $form . '<td width="" align=left>' . $index . '. <input type="hidden" name="rowname"  value="' . $row['name'] . '"/ >' . $row['name'] . '</td>';
        $form = $form . '<td width="500" align=left><input type="url" name="rowurl"  value="' . $row['url'] . '" style="width:98.5%;"/></td>';
        $form = $form . '<td width="" align=left>delete: <input type="checkbox" name="delete" value="delete" class="delete"></td>';
        $form = $form . '<td width="" align=left><input type="submit" name="submit" value="save"></td>';
        $form = $form . '</tr></table></form></td></tr>';
    }
    return $form;
}

function downornot($down)
{
    if ($down) {
        return "<span class=\"down\">DOWN</span>";
    } else {
        return "<span class=\"up\">UP</span>";
    }
}

?>



<?php
if (isset($_POST['submit'])) {

    if ($_POST['submit'] == "save" && isset($_POST['delete'])) {
        $rowname = $_POST['rowname'];
        $rowurl = $_POST['rowurl'];
        $db->delete("db", "name", $rowname);
        $newdbname = "backup-delete" . date("Ymd");
        $newdb = fopen("../json/" . $newdbname . ".json", "w");
        $db->insert($newdbname, $db->selectAll("db"));
        echo '<script>window.location.reload()</script>'; //HACK TO PERFORM REFRESH
    } else {
        $rowname = $_POST['rowname'];
        $rowurl = $_POST['rowurl'];
        $db->update("db", "name", $rowname, array("name" => $rowname, "url" => $rowurl, "down" => false));
        $newdbname = "backup-update" . date("Ymd");
        $newdb = fopen("../json/" . $newdbname . ".json", "w");
        $db->insert($newdbname, $db->selectAll("db"));

        echo '<script>window.location.reload()</script>'; //HACK TO PERFORM REFRESH
    }

}
if (isset($_POST['ADD'])) {
    $newrow = $_POST['newrow'];
    $newurl = $_POST['newurl'];
    $db->insert("db", array("name" => $newrow, "url" => $newurl, "down" => false));
    $newdbname = "backup-add-" . date("Ymd");
    $newdb = fopen("../json/" . $newdbname . ".json", "w");
    $db->insert($newdbname, $db->selectAll("db"));
    echo '<script>window.location.reload()</script>'; //HACK TO PERFORM REFRESH
}
?>
<form action="" method="post">
    <div>New entry:</div>
    <input type="text" name="newrow" placeholder="name"/>
    <input type="url" name="newurl" placeholder="url"/>
    <input type="submit" name="ADD" value="ADD"/>
</form>

<?php
echo displayforms($fetishes);
?>
</body>
</html>