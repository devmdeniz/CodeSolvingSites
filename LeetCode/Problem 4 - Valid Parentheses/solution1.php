<?php
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $array = str_split($s);
        $truefalse = array();
        for ($i=0;$i<count($array); $i++){
            if($i == 0){
                $firstone = $array[$i];
                $lastone = $array[intval(count($array)-1)];
            } else if ($i != 0 && $i != intval(count($array)-1)){
                $middleone = $array[$i];
                if(($i+1) != count($array)){
                    $laterone = $array[$i+1];
                } else {
                    $laterone = $middleone;
                }
            }
            if(isset($firstone)){
            if($firstone == "(" && $lastone == ")" || $firstone == "[" && $lastone == "]" || $firstone == "{" && $lastone == "}"){
                array_push($truefalse,"True");
            }}
            if($i % 2 == 0 && $i !=0) {
                if($middleone == "[" && $laterone == "]" || $middleone == "{" && $laterone == "}" || $middleone == "(" && $middleone == ")"){
                    array_push($truefalse,"True");
                }
            } else {
                array_push($truefalse,"False");
            }
        }
        if(!in_array("False",$truefalse)) {
            return true;
        } else {
            return false;
        }
    }
}

$sdata = "{[]}";
$Solution = new Solution();
echo $Solution->isValid($sdata);
?>