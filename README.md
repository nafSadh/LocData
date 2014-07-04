LocData
=======

Location Data (longitude and latitude) of ten thousand cities of 160 countries.

About some Files
----------------
* [places.csv](https://github.com/nafSadh/places.coord/blob/master/places.csv) 
- a csv file with country and city names along with longitude, latitude and 
altitude of that city 
* [places.xml](https://github.com/nafSadh/places.coord/blob/master/places.xml) 
- an XML document with places data

places.data.js
----------
[places.data.js](https://github.com/nafSadh/places.coord/blob/master/places.data.js) 
- I use this file populated from this project for some of my apps. 
Here, an object LocData has three members:
* ContryList - list of country names, followed by a pair of indices indicating 
first and last city of that country in City
* City - list of cities, along with long, lat, alt
* TZone - time zones
