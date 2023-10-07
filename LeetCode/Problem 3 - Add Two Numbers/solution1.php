<?php
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        function reverseandtranslate($lone) {
        $mainnumber = 0;
        for ($i=0; $i<count($lone); $i++){
            $lonenumber = intval($lone[$i]*intval(pow(10,$i)));
            $mainnumber += $lonenumber;
        }
        return $mainnumber;
        }
        $l1number = reverseandtranslate($l1);
        $l2number = reverseandtranslate($l2);
        $l3number = array_map('intval', str_split($l1number+$l2number));
        $returnarray = array();
        for ($i=0; $i<count($l3number); $i++){
            array_push($returnarray,$l3number[(count($l3number)-($i+1))]);
        }
        return $returnarray;
    }
}

//$array1 = array(2,4,3);
$array1 = array(0);
//$array1 = array(9,9,9,9,9,9,9);
//$array2 = array(5,6,4);
$array2 = array(0);
//$array2 = array(9,9,9,9);
$function = new Solution();
print_r($function->addTwoNumbers($array1,$array2));
?>