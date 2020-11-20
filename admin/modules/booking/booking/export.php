<?php
header("Content-type: application/csv");
header("Content-Disposition: attachment; filename=Booking.csv");
header("Pragma: no-cache");
header("Expires: 0");

ini_set('display_errors',1);
$private=1;
error_reporting(E_ALL ^ E_NOTICE);

define('ADMIN', true);
define("SYSBASE", str_replace("\\", "/", realpath(dirname(__FILE__)."/../../../../")."/"));

require_once(SYSBASE."common/lib.php");
require_once(SYSBASE."common/define.php");

$result_booking = $db->query('SELECT * FROM pm_booking');
if($result_booking !== false && $db->last_row_count() > 0){
    
    $data = $result_booking->fetch();

foreach($data as $row)
{
    $result.="{$row},";
    $result.="\n";
    echo $result;
}
}

?>