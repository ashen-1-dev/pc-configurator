<?php
include 'Motherboard.php';
include 'MotherboardFactory.php';
include 'MotherboardFlyweight.php';

$motherboard_factory = new MotherboardFactory();

$motherboard_flyweight = $motherboard_factory::getMotherboardFlyweights('ATX');
$motherboard1 = new Motherboard('motherboard 1', 4500, $motherboard_flyweight);
echo '<br>';
print_r($motherboard1->show());

echo '<br>';
echo '<br>';

$motherboard_flyweight = $motherboard_factory::getMotherboardFlyweights('ATX');
$motherboard2 = new Motherboard('motherboard 2', 6500, $motherboard_flyweight);
echo '<br>';
print_r($motherboard2->show());

echo '<br>';
echo '<br>';

$motherboard_flyweight = $motherboard_factory::getMotherboardFlyweights('MiniATX');
$motherboard3 = new Motherboard('motherboard 3', 5500, $motherboard_flyweight);
echo '<br>';
print_r($motherboard3->show());

echo '<br>';
echo '<br>';

$motherboard_flyweight = $motherboard_factory::getMotherboardFlyweights('MiniATX');
$motherboard4 = new Motherboard('motherboard 4', 6500, $motherboard_flyweight);
echo '<br>';
print_r($motherboard4->show());