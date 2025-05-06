<?php
require_once("partials/general.php");

session_destroy();
 
header("Location: index.php");  