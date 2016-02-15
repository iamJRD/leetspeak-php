<?php

    require_once "src/LeetspeakTranslator.php";

    class LeetspeakTranslatorTest extends PHPUnit_Framework_TestCase
    {
        function test_stringToArray()
        {
            // Arrange
            $new_LeetspeakTranslator = new LeetspeakTranslator;
            $input = "cat";

            // Act
            $result = $new_LeetspeakTranslator->translate($input);

            // Assert
            $this->assertEquals(array("c", "a", "t"), $result);
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

        function test_checkForO()
        {
            // Arrange
            $new_LeetspeakTranslator = new LeetspeakTranslator;
            $input = "dog";

            // Act
            $result = $new_LeetspeakTranslator->translate($input);

            // Assert
            $this->assertEquals(array("d","0","g"), $result);
        }

        function test_checkForUpperI()
        {
            // Arrange
            $new_LeetspeakTranslator = new LeetspeakTranslator;
            $input = "It";

            // Act
            $result = $new_LeetspeakTranslator->translate($input);

            // Assert
            $this->assertEquals(array("1", "t"), $result);
        }

        function test_checkForS()
        {
            // Arrange
            $new_LeetspeakTranslator = new LeetspeakTranslator;
            $input = "sat";

            // Act
            $result = $new_LeetspeakTranslator->translate($input);

            // Assert
            $this->assertEquals(array("s", "a", "t"), $result);
        }
    }

?>
