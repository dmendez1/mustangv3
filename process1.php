<?php
session_start();

if (isset($_POST['phpArray'])) {
    $_SESSION['contacts'] = $_POST['phpArray'];
    echo json_encode($_SESSION['contacts']);
}

if (isset($_POST['closeSession'])) {
    ;session_destroy();
}

?>