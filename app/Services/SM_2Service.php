<?php

namespace App\Services;


class SM_2Service
{


    public function learningStage($evaluation, $previousRepetitions) {
        if ($evaluation < 3) {
            return 0;
        } else {
            return $previousRepetitions + 1;
        }
    }


    public function spacedRepetitionScheduler($previousEaseFactor, $previousInterval, $previousRepetitions, $evaluation)
    {
        $result = [
            "newEaseFactor" => 0.0,
            "newInterval" => 0,
            "newRepetitions" => 0
        ];
        if ($previousEaseFactor == null) {
            $result = [
                "newEaseFactor" => 2.5,
                "newInterval" => 0,
                "newRepetitions" => 0
            ];
        }
         
        $result["newEaseFactor"] = $this->validateEaseFactor($previousEaseFactor + (0.1 - (5 - $evaluation) * (0.08 + (5 - $evaluation) * 0.02)));

        if ($evaluation < 3) {
            $result["newRepetitions"] = 0;
            $result["newInterval"] = 1;
        } else {
            $result["newRepetitions"] = $previousRepetitions + 1;
        }

        $result["newInterval"] = $this->calculateNewInterval($previousInterval, $previousRepetitions, $result["newEaseFactor"]);
        
        return $result;
    }

    private function validateEaseFactor($newEaseFactor)
    {
        if ($newEaseFactor < 1.3) {
            return 1.3;
        } else if ($newEaseFactor > 2.5) {
            return 2.5;
        }
    }

    private function calculateNewInterval($previousInterval, $previousRepetitions, $newEaseFactor) {
        if ($previousRepetitions == 0) {
            return 1;
        } else if ($previousRepetitions == 1) {
            return 6;
        } else {
            return ceil($previousInterval * $newEaseFactor);
        }
    }
}
