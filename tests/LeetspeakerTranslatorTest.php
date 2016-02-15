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
            $this->assertEquals("cat", $result);
        }

        function test_checkForE()
        {
            // Arrange
            $new_LeetspeakTranslator = new LeetspeakTranslator;
            $input = "hey";

            // Act
            $result = $new_LeetspeakTranslator->translate($input);

            // Assert
            $this->assertEquals("h3y", $result);
        }

        function test_checkForO()
        {
            // Arrange
            $new_LeetspeakTranslator = new LeetspeakTranslator;
            $input = "dog";

            // Act
            $result = $new_LeetspeakTranslator->translate($input);

            // Assert
            $this->assertEquals("d0g", $result);
        }

        function test_checkForUpperI()
        {
            // Arrange
            $new_LeetspeakTranslator = new LeetspeakTranslator;
            $input = "It";

            // Act
            $result = $new_LeetspeakTranslator->translate($input);

            // Assert
            $this->assertEquals("1t", $result);
        }

        function test_checkForS()
        {
            // Arrange
            $new_LeetspeakTranslator = new LeetspeakTranslator;
            $input = "tas sat";

            // Act
            $result = $new_LeetspeakTranslator->translate($input);

            // Assert
            $this->assertEquals("taz sat", $result);
        }

        function test_multiWordPhrase()
        {
            // Arrange
            $new_LeetspeakTranslator = new LeetspeakTranslator;
            $input = "test something";

            // Act
            $result = $new_LeetspeakTranslator->translate($input);

            // Assert
            $this->assertEquals("t3zt s0m3thing", $result);
        }
    }

?>
