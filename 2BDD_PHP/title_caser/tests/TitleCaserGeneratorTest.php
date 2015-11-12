<?php
    require_once "src/TitleCaserGenerator.php";

    class TitleCaserGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_makeTitleCaser_oneWord()
        {
            //Arrange
            $test_TitleCaserGenerator = new TitleCaserGenerator;
            $input = "beowulf";

            //Act
            $result = $test_TitleCaserGenerator->makeTitleCaser($input);

            //Assert
            $this->assertEquals("Beowulf", $result);
        }

        function test_makeTitleCaser_multipleWords()
        {
            //Arrange
            $test_TitleCaserGenerator = new TitleCaserGenerator;
            $input = "the little mermaid";

            //Act
            $result = $test_TitleCaserGenerator->makeTitleCaser($input);

            //Assert
            $this->assertEquals("The Little Mermaid", $result);
        }

        function test_makeTitleCaser_numeric()
        {
            //Arrange
            $test_TitleCaserGenerator = new TitleCaserGenerator;
            $input = "101 dalmatians & friends";

            //Act
            $result = $test_TitleCaserGenerator->makeTitleCaser($input);

            //Assert
            $this->assertEquals("101 Dalmatians & Friends", $result);
        }
    }
 ?>
