<?php
$data = json_decode(file_get_contents("db.json"), true);
$data["status"] = "overloaded";

file_put_contents("db.json", json_encode($data));
?>