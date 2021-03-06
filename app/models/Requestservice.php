<?php


class Requestservice extends Eloquent {
	


	protected $guarded = array();

	public static $rules = array(
		'fullname' => 'required',
		'company' => 'required',
		'email' => 'required',
		//'phone' => 'required',
		'location' => 'required',
		'dateandtime' => 'required',
		//'request_message' => 'required'
	);


	//taken from 
	//http://zaemis.blogspot.com/2011/01/geolocation-search.html
	function distance($latA,$lonA, $latB,$lonB, $units="mi") {
	    $radius = strcasecmp($units, "km") ? 3963.19 : 6378.137;
	    $rLatA = deg2rad($latA);
	    $rLatB = deg2rad($latB);
	    $rHalfDeltaLat = deg2rad(($latB - $latA) / 2);
	    $rHalfDeltaLon = deg2rad(($lonB - $lonA) / 2);

	    return 2 * $radius * asin(sqrt(pow(sin($rHalfDeltaLat), 2) +
	        cos($rLatA) * cos($rLatB) * pow(sin($rHalfDeltaLon), 2)));
	}

	// calculate destination lat/lon given a starting point, bearing, and distance
	function destination($lat,$lon, $bearing, $distance,$units="mi") {
	    $radius = strcasecmp($units, "km") ? 3963.19 : 6378.137;
	    $rLat = deg2rad($lat);
	    $rLon = deg2rad($lon);
	    $rBearing = deg2rad($bearing);
	    $rAngDist = $distance / $radius;

	    $rLatB = asin(sin($rLat) * cos($rAngDist) + 
	        cos($rLat) * sin($rAngDist) * cos($rBearing));

	    $rLonB = $rLon + atan2(sin($rBearing) * sin($rAngDist) * cos($rLat), 
	                           cos($rAngDist) - sin($rLat) * sin($rLatB));

	    return array("lat" => rad2deg($rLatB), "lon" => rad2deg($rLonB));
	}


	// calculate bounding box
	function bound($lat,$lon, $distance,$units="mi") {
		return array("N" => destination($lat,$lon,   0, $distance,$units),
	             "E" => destination($lat,$lon,  90, $distance,$units),
	             "S" => destination($lat,$lon, 180, $distance,$units),
	             "W" => destination($lat,$lon, 270, $distance,$units));
	}

	function getNearByPoliceOfficers($id){
		$officers = Policesignup::all();
		$officersNearBy = array();
		
		$request = $this->findOrFail($id);
		//dd($request->id);
		foreach ($officers as $officer) {
			$latitude1 = $officer->latitude;
			$longitude1 = $officer->longitude;
			$distance = $officer->distance;
			
			$latitude2 = $request->latitude;
			$longitude2 = $request->longitude;

			$distancecal = $this->distance($latitude1,$longitude1,$latitude2,$longitude2);
			//array_push($officersNearBy,$latitude1,$longitude1,$latitude2,$longitude2, $distancecal);
			$distance = floatval($distance);
			if($distancecal<=$distance){
				//Log::info($distancecal);
				$officer["distancetojob"] = $distancecal;
				array_push($officersNearBy, $officer);
			}
		}
		//dd($officers);
		return $officersNearBy;
	}
}
