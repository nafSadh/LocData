<?php
include_once 'dataScrap.php';
header('Content-type: text/html; charset=utf-8');
set_time_limit(900);
//genPlacesLocDataFromCSV("World_Cities_Location_table.csv");
//genMajorCitiesFromCSV("majorcities.txt");

//genMajorPlacesFromFile("major_places.txt");
genPlacesLocDataFromCSV("World_Cities_Location_table_sorted.csv");
genArrayFromXML("");
//genWorldTimeZoneArrayFromFile("worldTimeZone.csv");
 echo "?";
?>
