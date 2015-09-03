<?php
    class TitleCaseGenerator
    {
        function makeTitleCase($input_title)
        {
            $functionalwords = array('a', 'an', 'and', 'but', 'by', 'else', 'for', 'from', 'if', 'in', 'into', 'nor', 'of', 'off', 'on', 'or', 'out', 'over', 'the', 'then', 'to', 'when', 'with');

            $input_array_of_words = explode(' ', strtolower($input_title));

            foreach ($input_array_of_words as $word => $indi)
            {
                if ($word == 0 or !in_array($indi, $functionalwords))

                $input_array_of_words[$word] = ucwords($indi);
            }

            $output_array_of_words = implode(' ', $input_array_of_words);

            return $output_array_of_words;
        }
    }
 ?>
