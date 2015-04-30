(function()
{ 'use strict';
  var d = new Date();
  var jan = new Date(d.getFullYear(), 0, 1).getTimezoneOffset();
  var jul = new Date(d.getFullYear(), 6, 1).getTimezoneOffset();

  window.pos = { latitude: jul < jan ? 45 : jan > jul ? -45 : 0,
                 longitude: -Math.max(jan, jul) / 4 };
  if(window.google && google.loader && google.loader.clientLocation)
    pos = google.loader.clientLocation;
  if(navigator.geolocation)
    navigator.geolocation.watchPosition(function(p) { pos = p.coords; }); })();
