<?php
$holidayTitle = "Summer Holidays 2015";

function holidayClubButton( $holidayTitle ) {
 echo "\t\t\t\t\t\t<!-- Button to trigger modal -->\n";
 echo "\t\t\t\t\t\t<li><a style='color: #142459;' href='#cbTimes3' role='button' class='btn' data-toggle='modal' >" . $holidayTitle . "</a></li>\n";
}

function holidayClubTabel( $holidayTitle ) {

/* Club details not given */

	echo "\t\t\t\t\t<div>";

	echo "<h3>2015 future holiday club activities,<br/>are yet to be confirmed.</h3>";
	echo "<p>Please eMail <a href='mailto:info@hebbleharlequins.co.uk'><i>info&#64;hebbleharlequins.co.uk</i></a> for details.</p>";
	echo "<p>".$OS_info."</p>";
	echo "<span>May and Summer Holiday, Booking forms can be found <a style='color: #142459;' href='HarlequinsForms_PDFs.html' ><b>Here</b></a>.";


/* Club Details:- 
echo "<h3>".$holidayTitle."</h3>";
printf("\t\t\t\t\t<table class='hhTable' >
							<thead>
							</thead>
							<tbody>
								<tr>
									<th rowspan='3'><img src='images/bigj.jpg' width='100px' alt=''></th>
									<th colspan='2'><b>Full Day &#64; &#163;27</b><span> &#126; 7:00am &#45; 6:00pm</span></th>
								</tr>
								<tr>
									<th colspan='2'><b>Half Day &#64; &#163;17</b><span> &#126; 9:00am &#45; 3:30pm</span></th>
								</tr>
								<tr>	
									<th><b>Morning &#64; &#163;16</b><span><br>7:00am &#45; 1:00pm</span></th>
									<th><b>Afternoon &#64; &#163;16</b><span><br>12:00pm &#45; 6:00pm</span></th>
								</tr>
								<tr>
									<td>Mon 30th March</td>
									<td colspan='2'>
										<b>Vue</b><br>
										10am-12:30pm &#124; &#163;3 Extra per child<br>
										<small>(Price includes a drink and sweets)</small>
									</td>
								</tr>
								<tr>
									<td>Tue 31st March</td>
									<td colspan='2'>
										Easter activities at the club
									</td>
								</tr>
								<tr>
									<td>Wed 1st April</td>
									<td colspan='2'>
										<b>The Zone &#45; Huddersfield</b><br>
										&#163;3 Extra per child<br>
										<small>(We leave the club at 9:30am and return for 1pm)</small>
									</td>
								</tr>
								<tr>
									<td>Thu 2nd April</td>
									<td colspan='2'>
										<b>Rollerblading @ YMCA</b><br>
										2-3pm &#124; &#163;3 Extra per child<br>
									</td>
								</tr>
								<tr>
									<td>Fri 3rd April</td>
									<td colspan='2' style='background-color: lightgray;' >
										Closed
									</td>
								</tr>
								
								<tr>
									<td>Mon 6th April</td>
									<td colspan='2' style='background-color: lightgray;' >
										Closed
									</td>
								</tr>
								<tr>
									<td>Tue 7th April</td>
									<td colspan='2'>
										Easter egg hunt and crafts at the club
									</td>
								</tr>
								<tr>
									<td>Wed 8th April</td>
									<td colspan='2'>
										<b>Picnic at Mannor Heath Park</b><br>
										10am-1pm &#124; &#163;1 Extra per child 
										<small>(For Ice cream)</small>
									</td>
								</tr>
								<tr>
									<td>Thu 9th April</td>
									<td colspan='2'>
										Easter activities at the club
									</td>
								</tr>
								<tr>
									<td>Fri 10th April</td>
									<td colspan='2'>
										<b>Vue</b><br>
										10am-12:30pm &#124; &#163;3 Extra per child<br>
										<small>(Price includes a drink and sweets)</small>
									</td>
								</tr>
							</tbody>
						</table> ");				
printf("<br>Booking forms can be found on our forms page <a href='HarlequinsForms_PDFs.html'>Here</a>, or by contacting the club.
<br>
<br><b>Please complete the Easter Holiday booking form and return it by:</b>
<h3><i>Monday 23rd March 2015</i></h3>
Extra trip money, must be paid along with session fees in advance. ");
*/
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
									<td>Monday 23rd Dec</td>
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
?>