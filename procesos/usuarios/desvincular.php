<?php
namespace ContactsEss18;

session_start();
session_destroy();

$url='../../index.php';

header("location: $url");

die(); 