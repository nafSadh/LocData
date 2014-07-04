<?php
include_once 'dataScrap.php';
header('Content-type: text/html; charset=utf-8');
set_time_limit(900);
//genPlacesLocDataFromCSV("World_Cities_Location_table.csv");
//genMajorCitiesFromCSV("majorcities.txt");
//genMajorPlacesFromFile("major_places.txt");

PlacesCoordCsv2Xml("places.csv", "places.xml");
$pgcData = PlacesCoordXml2Array("places.xml","");
$tzoneData = genWorldTimeZoneArrayFromFile("worldTimeZone.csv");

$jsFile = 
"/* 
 * data accumulated by:
 * Khan 'Sadh' Mostafa; khan@nafsadh.com; http://nafSadh.com/Khan
 * as a part of project: http://nafsadh.github.io/places.coord/
 * 
 * it is available online at: 
 * https://raw.githubusercontent.com/nafSadh/places.coord/master/places.coord.js
 * 
 * it is released in Public Domain, so you can use it in whichever way you want
 */
var LocData = new function PlacesCoord(){
    this.ContryList = [	
      $pgcData[ContryList]
    ];
    this.City = [
      $pgcData[City]
    ];
    this.TZone = [
      $tzoneData
    ];
  }  
";
file_put_contents("places.coord.js", $jsFile);
 echo "done";
?>
