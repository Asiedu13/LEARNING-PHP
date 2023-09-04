<?php
echo time();
$currentTime = time();
echo '<br />';
// Adding to time
echo time() + 5 * 24 * 60 * 60;
echo '<br />';
// Sutracting time
echo time() - 7 * 24 * 60 * 60;
echo '<br />';

echo date('m/d/Y g:ia');
echo '<br />';
echo date('F j');
echo '<br />';
echo date('F j g:ia');
echo '<br />';
echo date_default_timezone_get();
echo '<br />';
echo date('m d Y', $currentTime -  5 * 24 * 60 * 60);

echo '<br />';

echo date('d/M/Y', mktime(0, 0, 0, 3, 23, null));

echo date('d, F, Y', strtotime('tomorrow'));

$date = date('m F Y', strtotime('yesterday'));
echo '<br />';

echo print_r(date_parse($date));
