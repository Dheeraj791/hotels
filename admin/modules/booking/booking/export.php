<?php
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="booking.csv"');

$user_CSV[0] = array('ID', 'Hotel', 'Customer','Checkin','Checkout','Nights','Adults','Children','Total','Status');

// very simple to increment with i++ if looping through a database result 
$user_CSV[1] = array('4','Royal Hotel','Pandey Dheeraj','25-11-20','26-11-2020','6','0','0','1900','Pending');
$user_CSV[2] = array('5','Hotel Krishna Regency','Pandey Dheeraj','23-11-20','25-11-2020','6','0','0','2468','Pending');
$user_CSV[3] = array('3','-','Pandey Dheeraj','17-11-20','19-11-2020','6','0','0','2468','Pending');
$user_CSV[4] = array('2','-','Pandey Dheeraj','17-11-20','19-11-2020','6','0','0','2468','Pending');
$user_CSV[5] = array('1','-','Pandey Dheeraj','17-11-20','19-11-2020','6','0','0','2468','Pending');
$user_CSV[6] = array('6','Pine View Resort','chouhsan sandy','20-11-20','21-11-2020','1','1','0','2700','Pending');


$fp = fopen('php://output', 'wb');
foreach ($user_CSV as $line) {
    // though CSV stands for "comma separated value"
    // in many countries (including France) separator is ";"
    fputcsv($fp, $line, ',');
}
fclose($fp);

?>