<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $timestamp = date("Y-m-d H:i:s");
    $data = "Запит був відправлений: $timestamp\n";
    foreach ($_POST as $key => $value) {
        $data .= "$key: $value\n";
    }
    file_put_contents("text.txt", $data, FILE_APPEND);
    echo "Дані успішно додані до text.txt!";
}
?>