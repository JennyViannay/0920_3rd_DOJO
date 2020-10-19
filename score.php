<?php 

// Write a function that takes such collection and counts the points of our team in the championship. 
// Rules for counting points for each match:

//     if x>y - 3 points
//     if x<y - 0 point
//     if x=y - 1 point


function totalScore(array $games)
{
    $count = 0;
    foreach($games as $game){
        $array = explode(':', $game);
        if($array[0] > $array[1]){
            $count += 3;
        }
        if($array[0] < $array[1]){
            $count += 0;
        }
        if($array[0] == $array[1]){
            $count += 1;
        }
    }
    return $count;
}

$games1 = ['1:0','2:0','3:0','4:0','2:1','3:1','4:1','3:2','4:2','4:3']; // 30
$games2 = ['1:1','2:2','3:3','4:4','2:2','3:3','4:4','3:3','4:4','4:4']; // 10
$games3 = ['0:1','0:2','0:3','0:4','1:2','1:3','1:4','2:3','2:4','3:4']; // 0
$games4 = ['1:0','2:0','3:0','4:0','2:1','1:3','1:4','2:3','2:4','3:4']; // 15
$games5 = ['1:0','2:0','3:0','4:4','2:2','3:3','1:4','2:3','2:4','3:4']; // 12

// test the method
// var_dump();