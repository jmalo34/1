<?php
    class TitleCaserGenerator
    {
        function makeTitleCaser($input_title)
        {
            $input_array_of_words = explode(" ", strtolower($input_title));

            $output_titlecased = array();

            $excluded = array('and', 'as', 'at', 'but', 'for', 'from', 'if', 'in', 'into', 'like', 'near', 'nor', 'of', 'off', 'on', 'once', 'onto', 'or', 'out', 'over', 'past', 'so', 'than', 'that', 'the', 'til', 'to', 'up', 'upon', 'with', 'when', 'yet');

            foreach ($input_array_of_words as $word)
                if (in_array($word, $excluded))
                {
                    array_push($output_titlecased, $word);
                }
                else
                {
                    array_push($output_titlecased, ucfirst($word));
                }
            return ucfirst(implode(" ", $output_titlecased));
        }
    }
 ?>
