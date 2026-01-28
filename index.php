<?php
$host = gethostname();
$time = date('Y-m-d H:i:s');

echo "<h1>UWB K8S App ✅</h1>";
echo "<p><b>Hostname:</b> {$host}</p>";
echo "<p><b>Time:</b> {$time}</p>";
echo "<p><b>Remote:</b> " . ($_SERVER['REMOTE_ADDR'] ?? '-') . "</p>";
