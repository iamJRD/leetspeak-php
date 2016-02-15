<?php

    require_once "src/LeetspeakTranslator.php";

    class LeetspeakTranslatorTest extends PHPUnit_Framework_TestCase
    {
        function test_stringToArray()
        {
            // Arrange
            $new_LeetspeakTranslator = new LeetspeakTranslator;
            $input = "hello";

            // Act
            $result = $new_LeetspeakTranslator->translate($input);

            // Assert
            $this->assertEquals(array("h","3","l","l","o"), $result);
        }

        function test_checkForE()
        {
            // Arrange
            $new_LeetspeakTranslator = new LeetspeakTranslator;
            $input = "hey";

            // Act
            $result = $new_LeetspeakTranslator->translate($input);

            // Assert
            $this->assertEquals(array("h", "3", "y"), $result);
        }
    }

?>
