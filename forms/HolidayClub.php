<?php
$holidayTitle = "Holiday Club 2014 - More dates coming soon!";

function holidayClubButton( $holidayTitle ) {
// echo "\t\t\t\t\t\t<!-- Button to trigger modal -->\n";
// echo "\t\t\t\t\t\t<li><a style='color: #142459;' href='#cbTimes3' role='button' class='btn' data-toggle='modal' >" . $holidayTitle . "</a></li>\n";

}
function holidayClubTabel( $holidayTitle ) {

echo "\t\t\t\t\t<div>";


//echo "<h3>2014 Holiday dates and activities,<br/>are yet to be confirmed.</h3>";
//echo "<p>Please email <a href='mailto:info@hebbleharlequins.co.uk'><i>info&#64;hebbleharlequins.co.uk</i></a> for details.</p>";

echo "<h3>".$holidayTitle."</h3>";
/*printf("\t\t\t\t\t<table class='hhTable' >
							<thead>
								<tr>
									<th></th>
									<th><b>Full Day &#64; &#163;27</b><span><br>7am - 6pm</span></th>
									<th><b>Half Day &#64; &#163;17</b><span><br>9am - 3:30pm</span></th>
									<th><b>Morning &#64; &#163;16</b><span><br>7am - 12:30pm</span></th>
									<th><b>Afternoon &#64; &#163;16</b><span><br>12.30pm - 6pm</span></th>
								</tr>
							</thead>
							<tbody>
								<tr><td>Mon 14th</td><td colspan='4' ><b>VUE & Activities at club</b><br>10am-12:30pm - <small>&#163;3 extra per child, includes a drink and sweets</small></td></tr>
								<tr><td>Tue 15th</td><td colspan='4' ><b>Easter Bake Off</b><br>Children will take part in a Cake Baking competition, with Eggstravant prizes for the winners, Children are welcome to bring in their own </td></tr>
								<tr><td>Wed 16th</td><td colspan='4' ><b>Big Blue Frog</b><br>10am-12pm - <small>&#163;4.50 extra per child</small></td></tr>
								<tr><td>Thu 17th</td><td colspan='4' ><b>Jumping Clay will be visiting the club for a session of clay making</b><br>&#163;3 extra per child<br><small>Each child will make and take home an Easter Egg Magnet</small></td></tr>
								<tr style='background-color:LightGray' ><td>Fri 18th</td><td colspan='4' >Closed</td></tr>
								<tr>
								<th></th>
									<th><b>Full Day &#64; &#163;27</b><span><br>7am - 6pm</span></th>
									<th><b>Half Day &#64; &#163;17</b><span><br>9am - 3:30pm</span></th>
									<th><b>Morning &#64; &#163;16</b><span><br>7am - 12:30pm</span></th>
									<th><b>Afternoon &#64; &#163;16</b><span><br>12.30pm - 6pm</span></th>
								</tr>
								<tr style='background-color:LightGray' ><td>Mon 21st</td><td colspan='4' >Closed</td></tr>
								<tr><td>Tue 22nd</td><td colspan='4' ><b>Children will take part in an Egg Decorating Competition</b><br><small>There will be prizes for 1st, 2nd & 3rd place</small></td></tr>
								<tr><td>Wed 23rd</td><td colspan='4' ><b>Kidzville</b><br>10am - 12pm - &#163;3 Extra per child</td></tr>
								<tr><td>Thu 24th</td><td colspan='4' ><b>It's fun to stay at the YMCA</b><br>2pm - 3:00pm - &#163;3 Extra per child<br><small>The children will be going rollerblading at the YMCA</small></td></tr>
								<tr><td>Fri 25th</td><td colspan='4' ><b>Picnic in the Park</b><br>12pm - 2:00pm  - <small>&#163;1.50 Extra per child (includes ice cream)</small></td></tr>
							</tbody>
						</table>
						<h2><a href='forms/EasterHolidaysActivities2014.pdf' >Download Easter Activities sheet</a></h2>
"); */

printf("						<h4><i>Please note: We will be closed for May Holidays 2014<br/><small>( w/c 26th May 2014 )</small></i></h4>
					</div> <!-- Club Table closed -->
");
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