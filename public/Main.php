<?php
include('IBuild.php');
include('Component.php');
include('Build.php');
include('BuildProxy.php');

$videocard = new Component();
$videocard->name = 'RX 5700XT';
$videocard->price = 80000;
$videocard->type = 'videcard';

$cpu = new Component();
$cpu->name = 'i7 9800K';
$cpu->price = 65000;
$cpu->type = 'cpu';

$ram = new Component();
$ram->name = 'Ballistix';
$ram->price = 10000;
$ram->type = 'ram';

$build = new BuildProxy();
$build->add($ram);
$build->add($cpu);
$build->add($videocard);

echo '<pre>' . print_r($build->show(), true) . '</pre>';

$build->remove($videocard);

echo '<pre>' . print_r($build->show(), true) . '</pre>';







