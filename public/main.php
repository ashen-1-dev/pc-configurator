<?php
include('IComponentFactory.php');
include('AMDFactory.php');
include('IntelFactory.php');
include('CPU.php');
include('IntelCPU.php');
include('AMDCPU.php');
include('GPU.php');
include('IntelGPU.php');
include('AMDGPU.php');



$amd_factory = new AMDFactory();
$intel_factory = new IntelFactory();

$amd_cpu = $amd_factory->createCPU();
$intel_cpu = $intel_factory->createCPU();

$amd_cpu->setName('Ryzen 3700x');
$amd_cpu->setCores('8');
$amd_cpu->setThreads('16');

$amd_gpu = $amd_factory->createGPU();
$amd_gpu->setName('amd gpu');
$amd_gpu->setPrice(4500);

$intel_cpu->setName('i5 9800K');
$intel_cpu->setCores('8');
$intel_cpu->setThreads('16');

$intel_gpu = $intel_factory->createGPU();
$intel_gpu->setName('intel gpu');
$intel_gpu->setPrice(4500);



echo '<pre>' . print_r($amd_cpu, true) . '</pre>';
echo '<pre>' . print_r($amd_gpu, true) . '</pre>';
echo '<pre>' . print_r($intel_cpu, true) . '</pre>';
echo '<pre>' . print_r($intel_gpu, true) . '</pre>';