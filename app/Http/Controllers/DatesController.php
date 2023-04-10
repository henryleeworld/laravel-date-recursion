<?php

namespace App\Http\Controllers;

use DateTime;
use When\When;

class DatesController extends Controller 
{
    public function index(string $minifiedDayName) 
    {
        $recursion = new When();
        $recursion->RFC5545_COMPLIANT = When::IGNORE;
        // get the last Friday of the month for the next 5 occurrences
        $recursion->startDate(new DateTime())
        ->rrule("FREQ=DAILY;BYDAY={$minifiedDayName};COUNT=5;WKST=MO")
        ->generateOccurrences();

        foreach ($recursion->occurrences as $date) {
            echo $date->format('Y-m-d') . ' | ';
        }
    }
}