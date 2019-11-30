<?php
include_once '../../includes/session.php';
$userSession = new UserSession();
$userSession->closeSession();
header("location: ../../index.php");
?>