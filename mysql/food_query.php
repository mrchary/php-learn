<?php 
	
	$query = "Select `food`, `calories` from `food` where `healthy_unhealthy`='h' order by `id` desc";
	if ($query_run = mysql_query($query)) {
		if (mysql_num_rows($query_run) == 0) {
			echo "0 rows returned from this query";
		} else {
			while ($query_row = mysql_fetch_assoc($query_run)) {
				$food = $query_row["food"];
				$cal = $query_row["calories"];

				echo "$food has $cal amount of calories <br>";
			}
		}
	} else {
		echo mysql_error();
	}

	if(isset($_GET['uh']) && !empty($_GET['uh']) & $_GET['calories']) && !empty($_GET['calories'])) {
		$u_h = $_GET['uh'];
		$cal = $_GET['calories'];
	}

?>