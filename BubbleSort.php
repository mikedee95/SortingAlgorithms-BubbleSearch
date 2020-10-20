<?php
function bubbleSort($list){
    for($i = 0; $i < count($list); $i++){
        for($j = 0;$j < count($list) - $i - 1; $j++){
            if ($list[$j] > $list[$j +1]){
                $temp = $list[$j + 1];
                $list[$j + 1] = $list[$j];
                $list[$j] = $temp;
            }
        }
    } return $list;
}
$list = [4,3,5,2,5,3,4,2,6,4,6,8,4,7,3,7,3,7,6];
echo "<pre>";
var_dump(bubbleSort($list));
