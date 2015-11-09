<?php

// Returns nicely formatted date and time.
function formattedTime() {
	return "\t<div>" . date("H:i") . "</div>\n";
}

// Returns a table row showing timezone information.
function timezone($place, $tz, $x, $y) {
	$html .= '<div style="position: absolute; top: ' . $y . 'px; left: ' . $x . 'px;">' . "\n";
	$html .= "\t<div>" . $place . "</div>\n";
	date_default_timezone_set($tz);
	$html .= formattedTime();
	$html .= "</div>\n";
	return $html;
}

header("Content-Type: text/html");
header("Expires: Tue, 01 Jan 1990 00:00:00 GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

echo "<!DOCTYPE html>\n";
echo "<html>\n";
echo "<head>\n";
echo "<title>World Times</title>\n";
echo "</head>\n";
echo '<body style="text-align: center;">' . "\n";
echo "<h1>World Times</h1>\n";

echo '<div style="margin-left: auto; margin-right: auto; position: relative; background: url(\'world.svg\'); width: 1000px; height: 511px;">' . "\n";

echo timezone("Seattle", "America/Los_Angeles", 30, 120);
echo timezone("Los Alamos", "America/Denver", 55, 170);
echo timezone("Grand Forks", "America/Chicago", 100, 115);
echo timezone("Pittsburgh", "America/New_York", 175, 150);
echo timezone("Norway", "Europe/Oslo", 470, 50);
echo timezone("Tokyo", "Asia/Tokyo", 900, 170);

echo "</div>\n";
echo "</body>\n";
echo "</html>\n";
?>
