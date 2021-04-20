<?php
require 'runtime.php';
$run = new RunTime();
sleep(3);
$time = $run->getTotalTime(); // 3 seconds
echo '3 seconds expected... ' . $time . PHP_EOL;
sleep(2);
$time = $run->getTotalTime(); // 5 seconds
echo '5 seconds expected... ' . $time . PHP_EOL;
$time = $run->getLapTime(); // 2 seconds
echo '2 seconds expected... ' . $time . PHP_EOL;
sleep(1);
$time = $run->getLapTime(); // 1 second
echo '1 second expected... ' . $time . PHP_EOL;
$time = $run->getTotalTime(); // 6 seconds
echo '6 seconds expected... ' . $time . PHP_EOL;
sleep(2);
$time = $run->getLapTime(); // 2 seconds
echo '2 seconds expected... ' . $time . PHP_EOL;
$time = $run->getTotalTime(); // 8 seconds
echo '8 seconds expected... ' . $time . PHP_EOL;
?>
