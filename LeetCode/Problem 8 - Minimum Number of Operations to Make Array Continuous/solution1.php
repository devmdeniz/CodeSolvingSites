<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function minOperations($nums)
    {
        sort($nums);
        $nums = array_unique($nums);
        print_r($nums
        );
        $oldnumber = $nums[0];
        $truefalse = 0;
        for ($i = 1; $i < count($nums); $i++) {
            if (!empty($nums[$i]) || isset($nums[$i])) {
                $mustarraynum = $oldnumber + 1;
                if ($mustarraynum != $nums[$i]) {
                    $truefalse++;
                    echo $i;
                }
                $oldnumber = $nums[$i];
            }
        }
        return $truefalse;
    }
}

$arraynums = [1, 10, 100, 1000];
$Solution = new Solution();
echo $Solution->minOperations($arraynums);
?>