<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $wichonevalue = 0;
        foreach ($nums as $value) {
            for ($i=0; $i<=count($nums); $i++) {
                if($i == $wichonevalue) {
                    continue;
                }
                $thenumber = $nums[$i];
                $sum = $thenumber + $value;
                if($sum == $target) {
                    $returnoutput = array();
                    array_push($returnoutput,$wichonevalue,$i);
                    return $returnoutput;
                }
            }
            $wichonevalue++;
        }
    }
}


//Accepted
//Runtime: 14 ms
?>