<?php
    require_once "src/LeetSpeakTranslator.php";

    class LeetSpeakTranslatorTest extends PHPUnit_Framework_TestCase
    {
        function test_translate_e()
        {
            //Arrange
            $test_LeetSpeakTranslator = new LeetSpeakTranslator;
            $input = "frisbee";

            //Act
            $result = $test_LeetSpeakTranslator->translate($input);

            //Assert
            $this->assertEquals("frisb33", $result);
        }

        function test_translate_o()
        {
            //Arrange
            $test_LeetSpeakTranslator = new LeetSpeakTranslator;
            $input = "soccer";

            //Act
            $result = $test_LeetSpeakTranslator->translate($input);

            //Assert
            $this->assertEquals("s0cc3r", $result);
        }

        function test_translate_eye()
        {
            //Arrange
            $test_LeetSpeakTranslator = new LeetSpeakTranslator;
            $input = "The Incredible";

            //Act
            $result = $test_LeetSpeakTranslator->translate($input);

            //Assert
            $this->assertEquals("Th3 1ncr3dibl3", $result);
        }

        function test_translate_z()
        {
            //Arrange
            $test_LeetSpeakTranslator = new LeetSpeakTranslator;
            $input = "Incredible Okinawa Street Fighters";

            //Act
            $result = $test_LeetSpeakTranslator->translate($input);

            //Assert
            $this->assertEquals("1ncr3dibl3 0kinawa Str33t Fight3rz", $result);
        }

    }
 ?>
