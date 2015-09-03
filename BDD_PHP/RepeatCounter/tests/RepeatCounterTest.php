<?php
    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_countRepeats_find()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input = "Seven batches of cookies were baked"; $for = "cookie";

            //Act
            $result = $test_RepeatCounter->countRepeats($input, $for);

            //Assert
            $this->assertEquals(1, $result);
        }

        function test_countRepeats_twins()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input = "There were seven types of cookies on the cookie platter."; $for = "cookie";

            //Act
            $result = $test_RepeatCounter->countRepeats($input, $for);

            //Assert
            $this->assertEquals(1, $result);
        }

    }
 ?>
