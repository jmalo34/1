<?php
    class RepeatCounter
    {
        function countRepeats($input_phrase, $term)
        {
            $input_phrase = explode(' ', (strtolower($input_phrase)));

            $total_words = count($input_phrase);
            $minus_terms = count(array_flip($input_phrase));

            $repeats_counted = (1 + ($total_words) - ($minus_terms));

            //push each matching word into array, remove any word from array that is incorrect length, then count number of items in array
            return $repeats_counted;
        }
    }
 ?>
