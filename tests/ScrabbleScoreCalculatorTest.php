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
}
?>
