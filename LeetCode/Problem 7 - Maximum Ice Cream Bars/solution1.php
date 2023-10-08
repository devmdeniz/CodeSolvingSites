<?php

class Solution
{

    /**
     * @param Integer[] $costs
     * @param Integer $coins
     * @return Integer
     */
    function maxIceCream(array $costs, $coins)
    {
        $number = 0;
        $money = intval($coins);
        sort($costs);
        foreach ($costs as $value) {
            if ($money <= 0) {
                return $number;
            } else if ($money >= $value) {
                $money -= $value;
                $number++;
            }
        }
        return $number;
    }
}

$costs = [1, 3, 2, 4, 1];
$coins = 7;
$Solution = new Solution();
echo $Solution->maxIceCream($costs, $coins);

?>