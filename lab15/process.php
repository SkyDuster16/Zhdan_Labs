<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = "";
    foreach ($_POST as $key => $value) {
        $data .= "$key: $value\n";
    }
    file_put_contents("text.txt", $data, FILE_APPEND);
    echo "Дані успішно додані до text.txt!";
}
?>