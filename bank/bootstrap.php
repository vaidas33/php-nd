<?php
session_start();

define('URL', 'http://localhost/nd/bank/'); // konstanta string pavidalu
define('DIR', __DIR__.'/'); // savo parasyta konstanta, kuri visada rodys kur mums reikia
require DIR.'app/functions.php';

_d($_SESSION, 'SESIJA--->');
?>