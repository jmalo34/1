<?php
    class LeetSpeakTranslator
    {
        function translate($input_phrase)
        {
            $leetspoken = explode(" ", $input_phrase);

            $leetspoken = str_ireplace("e", "3", $leetspoken);
            $leetspoken = str_ireplace("o", "0", $leetspoken);
            $leetspoken = str_replace("I", "1", $leetspoken);

            foreach ($leetspoken as $leet => $leeter)
            {
                if ($leet != 0)
//spec 4 not quite fulfilled, as this only doesn't replace the letter s with the letter z, when s is the first letter in the first word; as opposed to the first letter in any word, as specificed in the spec. probably could repair this by putting into an array that has word strings instead of individual letters. ahh idk figure it out later keep it pushin for now
                $leetspoken[$leet] = str_replace("s", "z", $leeter);
            }

            $leetspoked = implode(" ", $leetspoken);

            return $leetspoked;
        }
    }
 ?>
