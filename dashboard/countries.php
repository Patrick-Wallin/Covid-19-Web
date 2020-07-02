<?php
	if(!isset($_SESSION)) {
		session_start();
	}

	function loadCountries() {
		$localListOfCountries = $_SESSION['listOfCountries'];
		$localCurrentContinents = $_SESSION['currentContinents'];
		$continentCountries = $localListOfCountries[$localCurrentContinents];		
		
		$api_url = "https://corona.lmao.ninja/v2/countries/";
		
		// Anguilla,USA?yesterday=false
		
		$cnt = 1;		
		foreach ($continentCountries as $data) {
			if($cnt > 1) $api_url .= ",";
			$api_url .= $data;
			$cnt++;
			
			//print_r($data);
			/*
			echo "<div class='card'>";
			echo "<div class='card-body' style='margin-left:10px; margin-right:10px;'>";
			echo "<h4 class='card-title'>" . $data . "</h4>";
			echo "</div>";
			echo "</div>";
			*/
			/*
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
			*/
		}
		$api_url .= "?yesterday=false";
		
		$countries_json_data = file_get_contents($api_url);
		$countries_data = json_decode($countries_json_data);

		$allCountries = array();
		
		foreach ($countries_data as $data) {
			$country = array("country" => $data->country, "countryinfo" => $data->countryInfo, 
				"cases" => $data->cases, "deaths" => $data->deaths, 
				"recovered" => $data->recovered, "active" => $data->active,
				"population" => $data->population);
			$allCountries[$data->country] =$country;
		}
		
		$keys = array_column($allCountries, 'cases');
		array_multisort($keys, SORT_DESC, $allCountries);
		 
		//print_r($allCountries);
		
		foreach ($allCountries as $data) {
			echo "<div class='card'>";
			echo "<div class='card-body' style='margin-left:10px; margin-right:10px;clearfix'>";
			echo "<img src='" . $data['countryinfo']->flag ."' class='pull-left mr-2' style='width: 5vh;height: 100%;object-fit: cover;'>";
			
			echo "<div style='margin-left:10px;margin-right:10px;'>";
			echo "<div class='row'>";
			echo "<div class='col-sm-6'><h4 class='card-title'>" . $data['country'] . "</h4></div>";
			echo "<div class='col-sm-6 text-md-right'><h4 class='card-title'>" . number_format($data['population']) . "</h4></div>";
			echo "</div>";
			echo "<div class='row'>";
			echo "<div class='col-sm-6'>Total Cases:</div>";
			echo "<div class='col-sm-6 text-md-right'>" . number_format($data['cases']) . "</div>";
			echo "</div>";
			echo "<div class='row'>";
			echo "<div class='col-sm-6'>Total Deaths:</div>";
			echo "<div class='col-sm-6 text-md-right'>" . number_format($data['deaths']) . "</div>";
			echo "</div>";
			echo "<div class='row'>";
			echo "<div class='col-sm-6'>Total Recovered:</div>";
			echo "<div class='col-sm-6 text-md-right'>" . number_format($data['recovered']) . "</div>";
			echo "</div>";
			echo "<div class='row'>";
			echo "<div class='col-sm-6'>Total Active:</div>";
			echo "<div class='col-sm-6 text-md-right'>" . number_format($data['active']) . "</div>";
			echo "</div>";
			
			echo "</div>";			
			echo "</div>";			
			echo "</div>";
			echo "<br>";
			
			/*
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
			*/
			
		}

		
		//$country[] = array("cases" => 

	}
?>