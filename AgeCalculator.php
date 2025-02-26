<?php

require 'vendor/autoload.php';

use Andegna\DateTimeFactory;

$ethiopianYear = 1996;
$ethiopianMonth = 1;
$ethiopianDay = 21;

// Create Ethiopian date and convert to Gregorian
$ethiopianDateTime = DateTimeFactory::of($ethiopianYear, $ethiopianMonth, $ethiopianDay);
$gregorianDate = $ethiopianDateTime->toGregorian();

// Get the current date
$currentDate = new DateTime();

// Calculate the difference between the current date and the Gregorian date
$age = $currentDate->diff($gregorianDate);

// Extract years, months, and days from the difference
$years = $age->y;
$months = $age->m;
$days = $age->d;

// Calculate total months, weeks, days, hours, minutes, and seconds
$totalMonths = ($years * 12) + $months;
$totalDays = $age->days; // Total days difference
$totalWeeks = intval($totalDays / 7);
$remainingDays = $totalDays % 7;
$totalHours = $totalDays * 24;
$totalMinutes = $totalHours * 60;
$totalSeconds = $totalMinutes * 60;

// Output the age in various formats
echo "Age:\n";
echo "$years years $months months $days days\n"; // Years, months, days
echo "or $totalMonths months $days days\n"; // Total months and days
echo "or $totalWeeks weeks $remainingDays days\n"; // Total weeks and days
echo "or $totalDays days\n"; // Total days
echo "or $totalHours hours\n"; // Total hours
echo "or $totalMinutes minutes\n"; // Total minutes
echo "or $totalSeconds seconds\n"; // Total seconds
