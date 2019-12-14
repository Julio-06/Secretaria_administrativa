<?php
include_once '../../includes/session.php';
$userSession = new Session();
$userSession->closeSession();
header("location: ../../index.php");
?>