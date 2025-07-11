class Solution {

    /**
     * @param String $s
     * @param String $letter
     * @return Integer
     */
    function percentageLetter($s, $letter) {
         return floor(substr_count($s, $letter) / strlen($s) * 100);
    }
}