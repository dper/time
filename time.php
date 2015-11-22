<?php

// Returns nicely formatted date and time.
function formattedTime() {
	return "<td>" . date("H:i") . "</td>";
}

// Returns nicely formatted date and time.
function formattedDate() {
	return "<td>" . date("D, d M Y") . "</td>";
}

// Returns a table row showing timezone information.
function timezoneRow($place, $tz) {
	$html = "<tr>\n";
	$html .= "<th>" . $place . "</th>\n";
	date_default_timezone_set($tz);
	$html .= formattedTime();
	$html .= formattedDate();
	$html .= "</tr>\n";
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

echo '<table cellpadding="8" border="1" style="border-collapse: collapse; margin-left: auto; margin-right: auto; text-align: center;">' . "\n";

echo "<tr>\n";
echo "<th>Place</th>\n";
echo "<th>Time</th>\n";
echo "<th>Date</th>\n";
echo "</tr>\n";

echo timezoneRow("Seattle", "America/Los_Angeles");
echo timezoneRow("Los Alamos", "America/Denver");
echo timezoneRow("Grand Forks", "America/Chicago");
echo timezoneRow("Oxford", "Europe/London");
echo timezoneRow("Pittsburgh", "America/New_York");
echo timezoneRow("Norway", "Europe/Oslo");
echo timezoneRow("Tokyo", "Asia/Tokyo");

echo "</table>\n";

echo "</html>\n";
echo "</body>\n";
?>
