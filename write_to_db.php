<?php
	$db = new SQLite3("accidents.db");
	
	function addToTable($id, $lat, $long, $severity, $speed_limit, $light, $weather, $read_surface, $special_conditions, $hazards, $area_type, $postcode) {
		$query = $db->exec("insert into accidents (id, lat, long, severity, speed_limit, light, weather, road_surface, special_conditions, hazards, area_type, postcode) values ('$id', $lat, $long, '$severity', $speed_limit, '$light', '$weather', '$road_surface', '$special_conditions', '$hazards', '$area_type', '$postcode')");
		
		if (!$query) {
			die("Insert failed on id='$id'.");
		}

		return $query;
	}
?>
