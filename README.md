LocData
=======

Location Data (loongitude and latitude) of ten thousand cities of 160 countries.

About some Files
----------------
* World_Cities_Location_table_sorted.csv - a csv file with country and city names
along with longitude, lattitude and altitude of that city 
* places-location-data.xml - an XML document with places data

LocData.js
----------
LocData.js - I use this file populated from this project for some of my apps. 
Here, an object LocData has three members:
* ContryList - list of contry names, followed by a pair of indices indicating 
first and last city of that country in City
* City - list of cities, along with long, lat, alt
* TZone - time zones
