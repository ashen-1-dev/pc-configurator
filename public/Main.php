<?php
include 'Build.php';
include 'BuildState.php';
include 'Component.php';
include 'ReadyState.php';
include 'NotReadyState.php';


$cpu = new Component();

$cpu->type = 'cpu';
$cpu->name = 'i5 9400';
$cpu->price = '50000';

$videocard = new Component();

$videocard->type = 'videocard';
$videocard->name = 'GTX 760';
$videocard->price = '20000';

$motherboard = new Component();

$motherboard->type = 'motherboard';
$motherboard->name = 'Z390';
$motherboard->price = '10000';

$build = new Build();

$build->add($cpu);
$build->add($videocard);
print ($build->save());

$build->add($motherboard);
echo "\n" . $build->save();