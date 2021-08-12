<?php
include_once("connection/db.php");
session_unset();
session_destroy();
header("Location: login.php");
