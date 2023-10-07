<?php
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $array = str_split($s);
        for ($i=0; $i<count($array); $i++){
            if($i == 0 || $i % 2 == 0) {
                $firstone = $array[$i];
                $secondone = $array[$i+1];
                $lastone = $array[count($array)-1];
                if($firstone == "(" && $secondone == ")" || $firstone == "(" && $lastone == ")") {
                    return true;
                } else if($firstone == "[" && $secondone == "]" || $firstone == "[" && $lastone == "]") {
                    return true;
                } else if($firstone == "{" && $secondone == "}" || $firstone == "{" && $lastone == "}") {
                    return true;
                } else {
                    return false;
                }
            }
        }
    }
}

$sdata = "(]";
$Solution = new Solution();
echo $Solution->isValid($sdata);
?>