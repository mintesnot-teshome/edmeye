<?php

require 'vendor/autoload.php'; // Or however you include the Andegna library

use Andegna\DateTimeFactory;

$ethiopianYear = 1996;
$ethiopianMonth = 1;
$ethiopianDay = 21;

$ethiopianDateTime = DateTimeFactory::of($ethiopianYear, $ethiopianMonth, $ethiopianDay);

// Get the Gregorian date as a DateTime object
$gregorianDate = $ethiopianDateTime->toGregorian();

// Format the Gregorian date as a string (optional, if you need it)
$gregorianDateString = $gregorianDate->format(DATE_COOKIE);

$gregorianMonth = $gregorianDate->format('m');
$gregorianDay = $gregorianDate->format('d');

$currentDate = new DateTime();

// Calculate the age difference
$age = $currentDate->diff($gregorianDate);

// Output the age difference
echo "Age: " . $age->y . " years, " . $age->m . " months, " . $age->d . " days\n";