<?php
class StopWatch {
    private $startTime;
    private $endTime;

    function getStartTime() {
        return $this -> startTime;
    }

    function getEndTime() {
        return $this -> endTime;
    }

    function setStartTime() {
        $this -> startTime = date('H:i:s');
    }

    function setEndTime() {
        $this -> endTime = date('H:i:s');
    }

    function getElapsedTime() {
        return (strtotime($this -> endTime) - strtotime($this -> startTime) * 1000);
    }
}
function selection_sort($data)
{
    for($i=0; $i<count($data)-1; $i++) {
        $min = $i;
        for($j=$i+1; $j<count($data); $j++) {
            if ($data[$j]<$data[$min]) {
                $min = $j;
            }
        }
        $data = swap_positions($data, $i, $min);
    }
    return $data;
}
function swap_positions($data1, $left, $right) {
    $backup_old_data_right_value = $data1[$right];
    $data1[$right] = $data1[$left];
    $data1[$left] = $backup_old_data_right_value;
    return $data1;
}
$arr=[];
for ($i=0;$i<20000;$i++){
    $arr[]=$i*rand(1,100000);
}

$stopTime=new stopwatch();
$stopTime->setStartTime();
echo "start time is ".$stopTime->getStartTime();
selection_sort($arr);
$stopTime->setEndTime();
echo "end time is :".$stopTime->getEndTime();
echo 'elapse time is :'.$stopTime->getElapsedTime().'ms';

