<?php

include 'Krepsys.php';
include 'Grybas.php';

$krepsys = new Krepsys;

while($krepsys->deti(new Grybas)){}

_dc($krepsys);