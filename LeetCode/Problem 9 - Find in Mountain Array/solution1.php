<?php
/**
 * // This is MountainArray's API interface.
 * // You should not implement it, or speculate about its implementation
 * class MountainArray {
 *     function get($index) {}
 *     function length() {}
 * }
 */

class Solution
{
    /**
     * @param Integer $target
     * @param MountainArray $mountainArr
     * @return Integer
     */
    public function toArray(): array
    {
        return $this->array;
    }

    function findInMountainArray($target, $mountainArr)
    {
        $newarray = $mountainArr->toArray();
        $newarray = array_search($target, $newarray);
        print_r($newarray);
        if (!$newarray) {
            $newarray = -1;
        }
        return $newarray;
    }
}

$target = 3;
$mountainArr = [1, 2, 3, 2, 5, 0, 1];
$Solution = new Solution();
echo $Solution->findInMountainArray($target, $mountainArr);
?>