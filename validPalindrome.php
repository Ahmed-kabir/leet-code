class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s) {
        $cleanedString = preg_replace("/[^a-zA-Z0-9]/", "", strtolower($s));
        if (empty($cleanedString)) {
            return true;
        }
        $reversString = strrev($cleanedString);

        return $cleanedString === $reversString ? true : false;
        
    }
}