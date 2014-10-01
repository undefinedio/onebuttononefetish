<?php
die();
$newJsonString = json_encode($data);
file_put_contents('jsonFile.json', $newJsonString);

?>
