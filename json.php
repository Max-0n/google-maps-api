<?php

/*
//getJson RETURN:
return '{"features": [{"id": 94641962, "geometry": {"coordinates": [38.3377855, 57.5384813], "type": "Point"}, "properties": {"name": "\u0414\u0435\u0442\u0441\u043a\u0430\u044f \u043f\u043e\u043b\u0438\u043a\u043b\u0438\u043d\u0438\u043a\u0430", "amenity": "hospital"}, "type": "Feature"}, {"id": 255122359, "geometry": {"coordinates": [39.787952, 57.682083], "type": "Point"}, "properties": {"name": "\u0417\u0443\u0431\u043d\u043e\u0439 \u043a\u0430\u0431\u0438\u043d\u0435\u0442", "amenity": "hospital"}, "type": "Feature"}, {"id": 276092442, "geometry": {"coordinates": [40.0826269, 59.4753132], "type": "Point"}, "properties": {"amenity": "hospital"}, "type": "Feature"}, {"id": 280673149, "geometry": {"coordinates": [40.5205407, 64.5529125], "type": "Point"}, "properties": {"name": "\u0413\u043e\u0440\u043e\u0434\u0441\u043a\u0430\u044f \u043f\u043e\u043b\u0438\u043a\u043b\u0438\u043d\u0438\u043a\u0430 \u2116 1", "operator": "\u0413\u0411\u0423\u0417 \u0410\u041e \"\u0410\u0440\u0445\u0430\u043d\u0433\u0435\u043b\u044c\u0441\u043a\u0430\u044f \u0433\u043e\u0440\u043e\u0434\u0441\u043a\u0430\u044f \u043a\u043b\u0438\u043d\u0438\u0447\u0435\u0441\u043a\u0430\u044f \u043f\u043e\u043b\u0438\u043a\u043b\u0438\u043d\u0438\u043a\u0430 \u2116 1\"", "opening_hours": "Mo-Fr 07:30-19:00; Sa-Su 09:00-15:00", "amenity": "hospital", "wheelchair": "limited"}, "type": "Feature"}, {"id": 354969379, "geometry": {"coordinates": [37.8418857, 55.9341365], "type": "Point"}, "properties": {"name": "\u0413\u043e\u0440\u043e\u0434\u0441\u043a\u0430\u044f \u043f\u043e\u043b\u0438\u043a\u043b\u0438\u043d\u0438\u043a\u0430 \u0433. \u042e\u0431\u0438\u043b\u0435\u0439\u043d\u043e\u0433\u043e", "health_facility:type": "clinic", "healthcare": "clinic", "amenity": "clinic"}, "type": "Feature"}, {"id": 367932087, "geometry": {"coordinates": [38.8681043, 58.0409367], "type": "Point"}, "properties": {"name": "\u0413\u043e\u0440\u043e\u0434\u0441\u043a\u043e\u0439 \u0442\u0440\u0430\u0432\u043c\u0430\u0442\u043e\u043b\u043e\u0433\u0438\u0447\u0435\u0441\u043a\u0438\u0439 \u043f\u0443\u043d\u043a\u0442", "amenity": "hospital"}, "type": "Feature"}, {"id": 367932094, "geometry": {"coordinates": [38.7684285, 58.0577759], "type": "Point"}, "properties": {"name": "\u0421\u0442\u0430\u043d\u0446\u0438\u044f \u0441\u043a\u043e\u0440\u043e\u0439 \u043c\u0435\u0434\u0438\u0446\u0438\u043d\u0441\u043a\u043e\u0439 \u043f\u043e\u043c\u043e\u0449\u0438. \u041e\u0442\u0434\u0435\u043b\u0435\u043d\u0438\u0435 \u21163", "amenity": "hospital"}, "type": "Feature"}], "type": "FeatureCollection"}';
*/

function getJson($url)
{
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    //curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    curl_close($curl);
    //return $result;
}
getJson('https://dev.mons.site:8000/testing');
 ?>
