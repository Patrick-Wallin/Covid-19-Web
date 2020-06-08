<?php
	
	function loadTotal() {
		$api_url = 'https://corona.lmao.ninja/v2/all?yesterday=false';

		$all_json_data = file_get_contents($api_url);
		$all_data = json_decode($all_json_data,true);

		echo "<div class='row'>";
		echo "<div class='col-sm-3'>";
		echo "<div class='card'>";
		echo "<div class='card-body' style='margin-left:10px; margin-right:10px;'>";
		echo "<h4 class='card-title text-center'>Total Cases</h4>";
		echo "<div class='text-center'>" . number_format($all_data['cases']) . "</div>";
		echo "</div>";
		echo "</div>";
		echo "</div>";
		echo "<div class='col-sm-3'>";
		echo "<div class='card'>";
		echo "<div class='card-body' style='margin-left:10px; margin-right:10px;'>";
		echo "<h4 class='card-title text-center'>Total Deaths</h4>";
		echo "<div class='text-center'>" . number_format($all_data['deaths']) . "</div>";
		echo "</div>";
		echo "</div>";
		echo "</div>";
		echo "<div class='col-sm-3'>";
		echo "<div class='card'>";
		echo "<div class='card-body' style='margin-left:10px; margin-right:10px;'>";
		echo "<h4 class='card-title text-center'>Total Recovered</h4>";
		echo "<div class='text-center'>" . number_format($all_data['recovered']) . "</div>";
		echo "</div>";
		echo "</div>";
		echo "</div>";
		echo "<div class='col-sm-3'>";
		echo "<div class='card'>";
		echo "<div class='card-body' style='margin-left:10px; margin-right:10px;'>";
		echo "<h4 class='card-title text-center'>Total Active</h4>";
		echo "<div class='text-center'>" . number_format($all_data['active']) . "</div>";
		echo "</div>";
		echo "</div>";
		echo "</div>";
		echo "</div>";
	}

	
	

?>