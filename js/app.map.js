// initialise map on element with ID mapdiv
let options = {
  controls: [
    new OpenLayers.Control.Navigation(),
    new OpenLayers.Control.PanZoomBar(),
    new OpenLayers.Control.Attribution()
  ]
}

let lat            = 14.73430;
let lon            = -17.45867;
let zoom           = 25;

const map = new OpenLayers.Map('mapdiv')
map.addLayer(new OpenLayers.Layer.OSM())


// initialize markers
let markers = new OpenLayers.Layer.Markers('Markers')
map.addLayer(markers)


// add marker
let lonLat = new OpenLayers.LonLat(lat, lon)
  // .transform(
  //   new OpenLayers.Projection('EPSG:4326'), // transform from WGS 1984
  //   map.getProjectionObject() // to Spherical Mercator Projection
  // )
markers.addMarker(new OpenLayers.Marker(lonLat))

map.setCenter(lonLat, zoom)
/*
var fromProjection = new OpenLayers.Projection("EPSG:4326");   // Transform from WGS 1984
var toProjection   = new OpenLayers.Projection("EPSG:900913"); // to Spherical Mercator Projection
var position       = new OpenLayers.LonLat(lon, lat).transform( fromProjection, toProjection);

*/
