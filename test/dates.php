<?php

use Datefy\Datefy;

$dates = [
  "2000-05-05 11:09:06",
  "2022-05-05 11:09:06",
  "2044-05-05 11:09:06",
  date("Y-m-d H:i:s")
];

foreach($dates as $date){
  echo "<strong>" . $date . "</strong> becomes <strong>" . Datefy::ago($date) . " </strong><br>";
}
