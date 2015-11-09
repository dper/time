time
====
PHP scripts for showing world time


Use
===
Place either of the `php` files in a place on your webserver where they'll be properly run.  If you haven't yet configured PHP for use, do that first and then come back. The file `globe.php` shows a map with the current time for several places on it. The file `time.php` shows a table with place names and the current time for them.

Both of these files are configurable. The code is very easy to read and modify. If you want to add a new timezone, see [this list](https://secure.php.net/manual/en/timezones.php) for the strings used by PHP. You'll have to fiddle around with `globe.php` to put the timezones where you want them on the map.

Times themselves are calculated using the server's time, plus PHP's internal code to calculate differences between timezones.  If your server's time is incorrect, all of the others will be wrong, too.  Because of this, I recommend showing your local time.  Compare that with the clock on the wall or your cell phone and you can be sure the server is right.


Motivation
==========
World clocks are good, but customizable ones are great.  We usually only care about a few different timezones in a few different cities, and extra text makes things cluttered and hard to read.  In my case, I want to know the time where my relatives live.  So, we want to see only those timezones, and we want the geographical names to be those cities.  For example, my grandmother lives in Tennessee, which is in the same timezone as New York.  On some world clocks, "New York" would be displayed, but all I want to know is the time in Oak Ridge.  These scripts lets you decide what the place name should be.


Contact
=======

* [dper@microca.st](https://microca.st/dper)
* [dpp0@twitter.com](https://twitter.com/dpp0)
* [dperkins.org](https://dperkins.org)


License
=======

Copyright 2008, 2015 Douglas Perkins

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this program.  If not, see <http://www.gnu.org/licenses/>.
