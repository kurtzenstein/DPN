<html>
		<h3>Hours</h3>
		<table class="table">
<?php
		date_default_timezone_set('America/New_York');
		$dw = date("w");
			if ($dw == '0') {echo '<tr> <td><b>Sunday</b></td><td><b>9:30 a.m. - 5:00 p.m.</b></td></tr>' ;} else {echo'<tr><td>Sunday</td><td>9:30 a.m. - 5:00 p.m.</td></tr>';}
			if ($dw == '1') {echo '<tr><td><b>Monday</b></td><td><b>9:30 a.m. - 6:00 p.m.</b></td></tr>';} else {echo'<tr><td>Monday</td><td>9:30 a.m. - 6:00 p.m.</td></tr>';}
			if ($dw == '2') {echo '<tr><td><b>Tuesday</b></td><td><b>9:30 a.m. - 6:00 p.m.</b></td></tr>';} else {echo'<tr><td>Tuesday</td><td>9:30 a.m. - 6:00 p.m.</td></tr>';}
			if ($dw == '3') {echo '<tr><td><b>Wednesday<b></td><td><b>9:30 a.m. - 6:00 p.m.</b></td></tr>';} else {echo'<tr><td>Wednesday</td><td>9:30 a.m. - 6:00 p.m. </td></tr>';}
			if ($dw == '4') {echo '<tr><td><b>Thursday</b></td><td><b>9:30 a.m. - 8:00 p.m.</b></td></tr>';} else{echo'<tr><td>Thursday</td><td>9:30 a.m. - 8:00 p.m.</td></tr>';}
			if ($dw == '5') {echo '<tr><td><b>Friday</b></td><td><b>9:30 a.m. - 8:00 p.m.</b></td></tr>';} else{echo'<tr><td>Friday</td><td>9:30 a.m. - 8:00 p.m. </td></tr>';}
			if ($dw == '6') {echo '<tr><td><b>Saturday</b></td><td><b>9:30 a.m. - 8:00 p.m.</b></td></tr>';} else {echo'<tr><td>Saturday</td><td>9:30 a.m. - 8:00 p.m.</td></tr>';}
?>
			</table>
</html>