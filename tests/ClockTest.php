<?php
    require_once "src/Clock.php";

    class ClockTest extends PHPUnit_Framework_TestCase
    {
        function test_convertHours()
        {
            $test_Clock = new Clock;
            $input = [1,00];

            $result = $test_Clock->findAngle($input);
            $this->assertEquals(30, $result);
        }
    }
?>
