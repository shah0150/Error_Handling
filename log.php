<?
function logOutput($text)
{
$logFormatedText = "[" . date('Y-m-d') . " | " . date('H:i:s') . "] > " . $text . "\n";
//$logFile = fopen("serverLog.txt", "w") or die("Unable to open file!");
$logFile = fopen("serverLog.txt", "a") or die("Unable to open file!");
fwrite($logFile, $logFormatedText);
fclose($logFile);
}
?>