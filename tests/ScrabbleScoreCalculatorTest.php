<?php
require_once 'src/ScrabbleScoreCalculator.php';

class ScrabbleScoreCalulatorTest extends PHPUnit_Framework_TestCase
{
    function test_calculateWordScore_emptyWord()
    {
        //Arrange
        $test_ScrabbleScoreCalulator = new ScrabbleScoreCalulator;
        $word = '';

        //Act
        $result = $test_ScrabbleScoreCalulator->calculateWordScore($word);

        //Assert
        $this->assertSame(0, $result);
    }

    function test_calculateWordScore_commonLetters()
    {
        //Arrange
        $test_ScrabbleScoreCalulator = new ScrabbleScoreCalulator;
        $word = 'letters';

        //Act
        $result = $test_ScrabbleScoreCalulator->calculateWordScore($word);

        //Assert
        $this->assertSame(7, $result);
    }

    function test_calculateWordScore_complexWord()
    {
        //Arrange
        $test_ScrabbleScoreCalulator = new ScrabbleScoreCalulator;
        $word = 'quickly';

        //Act
        $result = $test_ScrabbleScoreCalulator->calculateWordScore($word);

        //Assert
        $this->assertSame(25, $result);
    }

    function test_calculateWordScore_caseInsensitive()
    {
        //Arrange
        $test_ScrabbleScoreCalulator = new ScrabbleScoreCalulator;
        $word = 'Quickly';

        //Act
        $result = $test_ScrabbleScoreCalulator->calculateWordScore($word);

        //Assert
        $this->assertSame(25, $result);
    }
}
?>
