<?php	
	function loadContinents() {
		$GLOBALS['listOfCountries'] = array();
		
		$api_url = 'https://corona.lmao.ninja/v2/continents?yesterday=false&sort=cases';

		$continents_json_data = file_get_contents($api_url);
		$continents_data = json_decode($continents_json_data);

		$cnt = 1;
		
		foreach ($continents_data as $data) {
			if($cnt == 1) $GLOBALS['currentContinents'] = $data->continent;
			echo "<div class='card'>";
			echo "<div class='card-body' style='margin-left:10px; margin-right:10px;'>";
			echo "<h4 class='card-title'>" . $data->continent . "</h4>";
			echo "<div style='margin-left:10px;margin-right:10px;'>";
			echo "<div class='row'>";
			echo "<div class='col-sm-6'>Total Cases:</div>";
			echo "<div class='col-sm-6 text-md-right'>" . number_format($data->cases) . "</div>";
			echo "</div>";
			echo "<div class='row'>";
			echo "<div class='col-sm-6'>Total Deaths:</div>";
			echo "<div class='col-sm-6 text-md-right'>" . number_format($data->deaths) . "</div>";
			echo "</div>";
			echo "<div class='row'>";
			echo "<div class='col-sm-6'>Total Recovered:</div>";
			echo "<div class='col-sm-6 text-md-right'>" . number_format($data->recovered) . "</div>";
			echo "</div>";
			echo "<div class='row'>";
			echo "<div class='col-sm-6'>Total Active:</div>";
			echo "<div class='col-sm-6 text-md-right'>" . number_format($data->active) . "</div>";
			echo "</div>";
			echo "</div>";
			echo "</div>";
			echo "</div>";
			echo "<br>";
		
			$cnt++;
			$GLOBALS['listOfCountries'][$data->continent] = $data->countries;
			
			//array_push($GLOBALS['listOfCountries'], array($data->continent => $data->countries));
		}
	}	
	
	

?>