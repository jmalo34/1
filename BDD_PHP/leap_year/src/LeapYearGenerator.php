<?php

    class LeapYearGenerator
    {

        function checkLeapYear($input_year)
        {
            return (($input_year % 4) == 0);
        }
    }

 ?>
