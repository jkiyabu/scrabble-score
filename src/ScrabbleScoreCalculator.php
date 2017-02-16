<?php
class ScrabbleScoreCalulator
{
    const LETTER_SCORES = [
        1 => ['a', 'e', 'i', 'o', 'u', 'l', 'n', 'r', 's', 't'],
        2 => ['d', 'g'],
        3 => ['b', 'c', 'm', 'p'],
        4 => ['f', 'h', 'v', 'w', 'y'],
        5 => ['k'],
        8 => ['j', 'x'],
        10 => ['q', 'z']
    ];

    function calculateWordScore($word)
    {
        $score = 0;
        $letters = str_split(strtolower($word));
        foreach ($letters as $letter) {
            foreach (self::LETTER_SCORES as $points => $char_list) {
              if (in_array($letter, $char_list)) {
                $score += $points;
              }
            }
        }

        return $score;
    }
}
?>
