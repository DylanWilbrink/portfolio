<html>
<head>
<?php
include('../php/userinfo.php');
?>
</head>
<body>
<?php
foreach($results as $result) {
    echo 'E-mail: ' . $result['email'] . '<br>';

    echo 'Wachtwoord: ********** <br>';

    echo 'Voornaam: ' . $result['first_name'] . '<br>';

    echo 'Achternaam: ' . $result['surname'] . '<br>';

    echo 'Telefoonnummer: ' . $result['phone_number'] . '<br>';

    echo 'Adres: ' . $result['street_name'] . ' ' . $result['house_number'];
}
?>
</body>
</html>