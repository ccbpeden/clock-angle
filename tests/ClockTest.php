<?php
    require_once "src/Clock.php";

    class ClockTest extends PHPUnit_Framework_TestCase
    {
        function test_convertHours()
        {
            $test_Clock = new Clock;
            $input = [1,00];

            $result = $test_Clock->findHourAngle($input);
            $this->assertEquals(30, $result);
        }

        function test_convertMinutes()
        {
            $test_Clock = new Clock;
            $input = [1,25];

            $result = $test_Clock->findMinuteAngle($input);
            $this->assertEquals(150, $result);
        }

        function test_compareAngle()
        {
            $test_Clock = new Clock;
            $input = [1,25];

            $result = $test_Clock->compareAngle($input);
            $this->assertEquals(120, $result);
        }

    }
?>
