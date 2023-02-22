<?php
function difference($date1, $date2)
{
    $time1 = strtotime($date1);
    $time2 = strtotime($date2);
    $diff = abs($time2 - $time1); //diff between two date

    $years = floor($diff / (365*60*60*24)); //365-days,60-min,60-sec,24-hour
    $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
    $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24) / (60*60*24));

    $month1 = date('F', $time1); //f-month full name
    $month2 = date('F', $time2);
    $day1 = date('l', $time1); // l-day name
    $day2 = date('l', $time2);

    $result = array(
        'years' => $years,
        'months' => $months,
        'days' => $days,
        'month1' => $month1,
        'month2' => $month2,
        'day1' => $day1,
        'day2' => $day2
    );
    return $result;
}

$date1 = '2022-01-01';
$date2 = '2028-09-20';
$result = difference($date1, $date2);

printf("%d years, %d months, and %d days between %s and %s. </br>", $result['years'], $result['months'], $result['days'], $date1, $date2);
printf("Month 1: %s </br> Month 2: %s </br> Day 1: %s </br> Day 2: %s </br>", $result['month1'], $result['month2'], $result['day1'], $result['day2']);

?>
