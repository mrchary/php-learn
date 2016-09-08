<?php 
	require 'connect.inc.php';
?>
<h1>Select your food preference</h1>
<form action="index.php" method="get">
	<label for="uh"> Select healthy or unhealthy food: </label>
	<select name="uh">
		<option value="h">healthy food</option>
		<option value="u">unhealthy food</option>
	</select>
	<br><br>
	<label for="calories">Specify calorie limit</label>
	<input type="text" name="calories">
	<br><br>
	<input type="submit" value="submit">
</form>
<?php 
	if(isset($_GET['uh']) && !empty($_GET['uh']) && isset($_GET['calories']) && !empty($_GET['calories'])){
		$uh = $_GET['uh'];
		$cal = $_GET['calories'];
		$query = "Select `food`, `calories` from `food` where `healthy_unhealthy`='$uh' and `calories`<'$cal' order by `id` desc";
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
	}
?>