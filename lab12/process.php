<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fullname = htmlspecialchars($_POST["fullname"]);
    $address = htmlspecialchars($_POST["address"]);
    $city = htmlspecialchars($_POST["city"]);
    $zipcode = htmlspecialchars($_POST["zipcode"]);
    $country = htmlspecialchars($_POST["country"]);
    $cardholder = htmlspecialchars($_POST["cardholder"]);
    $cardnumber = htmlspecialchars($_POST["cardnumber"]);
    $expmonth = htmlspecialchars($_POST["expmonth"]);
    $expyear = htmlspecialchars($_POST["expyear"]);
    $cvc = htmlspecialchars($_POST["cvc"]);

    
    
    echo "<h2>Дані форми:</h2>";
    echo "<p>Ім'я: $fullname</p>";
    echo "<p>Адреса: $address</p>";
    echo "<p>Місто: $city</p>";
    echo "<p>Індекс: $zipcode</p>";
    echo "<p>Країна: $country</p>";
    echo "<p>Ім'я на картці: $cardholder</p>";
    echo "<p>Номер картки: $cardnumber</p>";
    echo "<p>Місяць: $expmonth</p>";
    echo "<p>Рік: $expyear</p>";
    echo "<p>CVC: $cvc</p>";
} else {
    echo "Дані не були передані коректно.";
}
?>
