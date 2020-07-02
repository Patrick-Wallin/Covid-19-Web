<?php
    require_once 'countries.php';

    if (isset($_GET['currentContinents'])) {
        $_SESSION['currentContinents'] = $_GET['currentContinents'];
        return loadCountries();
    }
?>

