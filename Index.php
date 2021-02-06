<?php
require $_SERVER["DOCUMENT_ROOT"]."/Controller/Home.php";

$controler = new Home();

$controler->index();