<?php
$cars = [
    ['name' => 'Такси 1', 'position' => rand(0, 1000), 'isFree' => (bool) rand(0, 1)],
    ['name' => 'Такси 2', 'position' => rand(0, 1000), 'isFree' => (bool) rand(0, 1)],
    ['name' => 'Такси 3', 'position' => rand(0, 1000), 'isFree' => (bool) rand(0, 1)],
    ['name' => 'Такси 4', 'position' => rand(0, 1000), 'isFree' => (bool) rand(0, 1)],
    ['name' => 'Такси 5', 'position' => rand(0, 1000), 'isFree' => (bool) rand(0, 1)],
];

$passenger = rand(0, 1000);
//выводим где находится пассажир
echo 'Пассажир находтся на '.$passenger.'км'.'<br>';
//создаем массив arr. в него записываем все свободные такси с растоянием до пассажира  
$arr=[];
foreach($cars as $k1=>$v1){
    if ($v1['isFree']==1){
        $dev=abs($v1['position']-$passenger);
        $arr[]=$dev;
        unset($dev);
    }
}
//выводим где такси , сколько до пассажира , свободен или занят , если свободен и ближайший выводим что едет это такси 
foreach($cars as $k=>$v){
    $dev1=abs($v['position']-$passenger);
    echo $v['name'].' стоит на '.$v['position'].'км. До пассажира '.$dev1.' км ';
    if($v['isFree']==1){
        echo '(Свободен)';
        if($dev1==min($arr)){
            echo ' едет это такси.'.'<br>';
        } else {
            echo '<br>';
        }
    }else{
        echo '(Занят)'.'<br>';
    }
}