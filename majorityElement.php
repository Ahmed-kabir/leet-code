class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        $newArray = array_count_values($nums);

        $max_key = max(array_values(array_count_values($nums)));

        $value = 0;
        foreach ($newArray as $key => $value) {
            if ($max_key == $value) {
                $value = $key;
                break;
            }
        }
        return $value;
    }
}