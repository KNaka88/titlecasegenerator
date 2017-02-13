<?php

    require_once "src/TitleCaseGenerator.php";

    class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
    {

        //test1 :
        // one word capitalized first letter
        // hello -> Hello
        function test_makeTitleCase_oneWord()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "hello";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Hello", $result);
        }
        //test2 :
        // two word, each first letter capitalized
        // hello world -> Hello World
        function test_makeTitleCase_twoWord()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "hello world";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Hello World", $result);
        }
        //test3 :
        //given any sentence, output each first character with capitalized
        // today is monday -> Today Is Monday
        function test_makeTitleCase_sentence()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "today is monday";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Today Is Monday", $result);
        }
    }
