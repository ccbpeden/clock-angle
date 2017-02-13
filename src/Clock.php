<?php
    class Clock {
        function findHourAngle($input)
        {
            $hour = $input[0];

            $hourOutput = $hour * 30;

            return $hourOutput;
        }

        function findMinuteAngle($input)
        {
            $minute = $input[1];
            $minuteOutput = $minute * 6;

            return $minuteOutput;
        }

        function compareAngle($input)
        {
            $hourAngle = Clock::findHourAngle($input);
            $minuteAngle = Clock::findMinuteAngle($input);

            if($hourAngle > $minuteAngle)
            {
                $resultAngle = $hourAngle - $minuteAngle;
            } else {
                $resultAngle = $minuteAngle - $hourAngle;
            }
            return $resultAngle;
        }
    }
?>
