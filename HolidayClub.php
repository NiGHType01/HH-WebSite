<?php
$today = getdate();
$holidayTitle = "Holiday Club " . $today['year'];

//////////////////////// Just testing this out ////////////////

// Easter Holiday
if ($today['mday'] <= "21" && $today['mon'] == "4") {$holidayTitle = "Easter Holiday Club " . $today['year'];}
// May Holiday
if (($today['mday'] <= "31" && $today['mon'] == "5") || ($today['mday'] 
<= "4" && $today['mon'] == "6")) {$holidayTitle = 
"Summer</br>Half-Term</br><i>" . $today['year'] . "</i>";}
// Summer Holiday
if (($today['mday'] <= "26" && $today['mon'] == "6") || ($today['mday'] <= "1" && $today['mon'] == "9")) {$holidayTitle = "Summer " . $today['year'];}

///////////////////////////////////////////////////////////////
function holidayClubButton( $holidayTitle ) {
	echo "\t\t\t\t\t\t<!-- Button to trigger modal -->\n";
	echo "\t\t\t\t\t\t<li><a style='color: #142459;' href='#cbTimes3' role='button' class='btn' data-toggle='modal' >" . $holidayTitle . "</a></li>\n";
}

function holidayClubTabel( $holidayTitle ) {
$today = getdate(); // TODO: Need to make the global, or not. Just thinking
	/// Must be here
	echo "\t\t\t\t\t<div>";
	echo "<h2>".$holidayTitle."</h2>";
	// date need looking at, regarding month
	if ($today['mday'] <= "21" && $today['mon'] == "4") {
		echo "<p>Please eMail <a href='mailto:info@hebbleharlequins.co.uk'><i>info&#64;hebbleharlequins.co.uk</i></a> for details.</p>";
		echo "<span>Holiday booking forms can be found <a style='color: #142459;' href='HarlequinsForms_PDFs.html' ><b>Here</b></a>.</br><i>(please return by 3rd April)</i><br>";
	} else {
		echo "<h3><i>Future holiday club activities,<br/>are yet to be confirmed.</i></h3>
			<p>Please eMail <a href='mailto:info@hebbleharlequins.co.uk'><i>info&#64;hebbleharlequins.co.uk</i></a> for details.</p>";
	}
/* Reminder as to how the table looks 
+---------+---------+---------+
|         |     full day      |
+   Pic   +---------+---------+
|         |     1/2 day       |
+         +---------+---------+
|         |   am    |   pm    +
+---------+---------+---------+
|#############################|
+---------+---------+---------+
|#########|###################|
+---------+---------+---------+
*/
	// Easter
	if ($today['mday'] <= "21" && $today['mon'] == "4" )
	{
		printf("\t\t\t\t\t<table class='hhTable' >
									<thead>
										<tr>
											<th rowspan='3'><img src='images/club/1152.jpg' width='100px' alt=''></th>
											<th colspan='2'><b>Full Day &#64; &#163;28</b><span> &#126; 7:00am &#45; 6:00pm</span></th>
										</tr>
										<tr>
											<th colspan='2'><b>Half Day &#64; &#163;20</b><span> &#126; 8:30am &#45; 3:30pm</span></th>
										</tr>
										<tr>	
											<th><b>Morning &#64; &#163;18</b><span><br>7:00am &#45; 1:00pm</span></th>
											<th><b>Afternoon &#64; &#163;18</b><span><br>12:00pm &#45; 6:00pm</span></th>
										</tr>
									</thead>");
		if ($today['mday'] <= "10")
		{
			printf("										<tbody>
											<tr>
												<td >Monday 10th April</td>
												<td colspan='2'>
													<b>Jumping Clay</b></br>
													<i>£3.50 extra per child.</i>
												</td>
											</tr>");							
		}
		if ($today['mday'] <= "11")
		{
			printf("											<tr>
												<td>Tuesday 11th  April</td>
												<td colspan='2'>
												<b>VUE</b></br>
												<i>£3.50 extra per child.</i>
												</td>
											</tr>");							
		}

		if ($today['mday'] <= "12")
		{ 
			printf("											<tr>
												<td>Wednesday 12th April</td>
												<td colspan='2'>
												<b>Shibden Park</b></br>
												<i>£3 extra per child.</i>
											</tr>");
		}
		if ($today['mday'] <= "13")
		{ 
			printf("											<tr>
												<td>Thursday 13th  April</td>
												<td colspan='2'>
													<b>YMCA</b></br>
													<i>£3 extra per child</i></br>
												</td>
											</tr>");
		}
		if ($today['mday'] <= "14")
		{ 
			printf("											<tr class='lg'>
												<td>Friday 14th April</td>
												<td colspan='2'>
													<b>Closed</b></br>
												</td>
											</tr>");
		}
		if ($today['mday'] <= "17")
		{ 
			printf("											<tr class='lg'>
												<td >Monday 17th April</td>
												<td colspan='2'>
													<b>Closed</b></br>
												</td>
											</tr>");
		}
		if ($today['mday'] <= "18")
		{ 
			printf("											<tr background>
												<td>Tuesday 18th  April</td>
												<td colspan='2'>
												<b>Manor Heath</b></br>
												<i>£1 extra per child.</i>
												</td>
											</tr>");
		}
		if ($today['mday'] <= "19")
		{ 
			printf("											<tr>
												<td>Wednesday 19th April</td>
												<td colspan='2'>
												<b>VUE</b></br>
												<i>£3.50 extra per child.</i>
											</tr>");
		}
		if ($today['mday'] <= "20")
		{ 
			printf("											<tr>
												<td>Thursday 20th  April</td>
												<td colspan='2'>
									
												</td>
											</tr>");
		}
		if ($today['mday'] <= "21")
		{ 
			printf("											<tr>
												<td>Friday 21st April</td>
												<td colspan='2'>
												</td>
											</tr>
			");
		}
		
		printf("									</tbody>
								</table>");			

		printf("<br>Booking forms can be found on our forms page <a href='HarlequinsForms_PDFs.html'>Here</a>, or by contacting the club.<br>
		<h3><i></i></h3>
		Extra trip money, must be paid along with session fees in advance. ");
	}	
	printf("						<h4><i><br/><small></small></i></h4>
						</div> <!-- Club Table closed -->");
}

/*
function holidayClubFormTabel() {
printf("					<div>
						<table class='hhTable' >
							<thead>
								<tr>
									<th>Date</th>
									<th>Full Day<br/><em>7am - 6pm</em></th>
									<th>Half Day<br/><em>9am - 3:30pm</em></th>
									<th>E.T.A.</th>
									<th>To be Paid</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Monday  23rd Dec</td>
									<td>
										<input id='mon23_fd' name='mon23ch' class='radio' type='radio' value='25' />
										<label class='choice' for='mon23_fd'>&pound25</label>
									</td>
									<td>
										<input id='mon23_hd' name='mon23ch' class='radio' type='radio' value='15' />
										<label class='choice' for='mon23_hd'>&pound15</label>
									</td>
									<td><input id='mon23_eta' name='mon23_eta' class='text' maxlength='8' value='' type='text' /></td>
									<td><input id='mon23_pd' name='mon23_pd' class='checkbox' type='checkbox' value='1' /></td>
								</tr>
								<tr>
									<td>Tuesday 24th Dec</td>
									<td style='background-color: gray;'>Closed</td>
									<td>
										<input id='tue24_hd' name='tue24ch' class='radio' type='radio' value='15' />
										<label class='choice' for='tue24_hd'>&pound15</label>
									</td>
									<td><input id='tue24_eta' name='tue24_eta' class='text' maxlength='8' value='' type='text' /></td>
									<td><input id='tue24_pd' name='tue24_pd' class='checkbox' type='checkbox' value='1' /></td>
								</tr>
								<tr>
									<td>Thursday 2nd Jan</td>
									<td>
										<input id='thu2_fd' name='thu2ch' class='radio' type='radio' value='25' />
										<label class='choice' for='thu2_fd'>&pound25</label>
									</td>
									<td>
										<input id='thu2_hd' name='thu2ch' class='radio' type='radio' value='15' />
										<label class='choice' for='thu2_hd'>&pound15</label>
									</td>
									<td><input id='thu2_eta' name='thu2_eta' class='text' maxlength='8' value='' type='text' /></td>
									<td><input id='thu2_pd' name='thu2_pd' class='checkbox' type='checkbox' value='1' /></td>
								</tr>
								<tr>
									<td>Friday 3rd Jan</td>
									<td>
										<input id='fri3_fd' name='fri3ch' class='radio' type='radio' value='25' />
										<label class='choice' for='fri3_fd'>&pound25</label>
									</td>
									<td>
										<input id='fri3_hd' name='fri3ch' class='radio' type='radio' value='15' />
										<label class='choice' for='fri3_hd'>&pound15</label>
									</td>
									<td><input id='fri3_eta' name='fri3_eta' class='text' maxlength='8' value='' type='text' /></td>
									<td><input id='fri3_pd' name='fri3_pd' class='checkbox' type='checkbox' value='1' /></td>
								</tr>
							</tbody>
						</table>
					</div> <!-- Club Table closed -->
");
} */

function holidayClubFormTabel() {

}
?>
