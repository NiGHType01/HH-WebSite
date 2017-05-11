				<h2><?php echo $pageName ?></h2>
				<form method="post" action="cart.php">  <!--order_form.php" >	-->				
					<table class="hhTable" >
						<thead>
							<tr>
								<th>Date</th>
								<th>Full Day<br>7am - 6pm</th>
								<th>Half Day<br>9am - 3:30pm</th>
								<th>Morning<br>7am - 1pm</th>
								<th>Afternoon<br>12pm - 6pm</th>
								<th>Price</th>
							</tr>	
						</thead>
						<tbody>
<?php 
$i = 0;
echo "<tr bgcolor='black' color='white' >
		<td></td>
		<td><input id='all_fd' name='fds' class='element radio' type='radio' onclick='' /></td>
		<td><input id='all_hd' name='fds' class='element radio' type='radio' onclick='' /></td>
		<td><input id='all_am' name='fds' class='element radio' type='radio' onclick='' /></td>
		<td><input id='all_pm' name='fds' class='element radio' type='radio' onclick='' /></td>
		<td></td>
	</tr>";
do {
	if ( strpos($product_info[ $i ][ 0 ], "Week") !== false ) {
		echo "\t\t\t\t\t\t\t<tr bgcolor='lightgray' >
			<td colspan='6'>". $product_info[ $i ][ 0 ] ."</td>
			</tr>\n";
	} else {
		printf('			<tr>
								<td >' . $product_info[ $i ][ 3 ] . '</td>
								<td><input id="' . $product_info[ $i ][ 0 ] . '_fd"  name="' . $product_info[ $i ][ 0 ] . '" class="element radio" type="radio" onclick="liveRadio( \'' . $product_info[ $i ][ 0 ] . '_fd\' );" value="&#163;%1.2f" /><label class="choice" for="' . $product_info[ $i ][ 0 ] . 'fd">&#163;' . $product_info[ $i ][ 5 ] . '</label></td>
								<td><input id="' . $product_info[ $i ][ 0 ] . '_hd"  name="' . $product_info[ $i ][ 0 ] . '" class="element radio" type="radio" onclick="liveRadio( \'' . $product_info[ $i ][ 0 ] . '_hd\' );" value="&#163;%1.2f" /><label class="choice" for="' . $product_info[ $i ][ 0 ] . 'hd">&#163;' . $product_info[ $i ][ 6 ] . '</label></td>
								<td><input id="' . $product_info[ $i ][ 0 ] . '_am"  name="' . $product_info[ $i ][ 0 ] . '" class="element radio" type="radio" onclick="liveRadio( \'' . $product_info[ $i ][ 0 ] . '_am\' );" value="&#163;%1.2f" /><label class="choice" for="' . $product_info[ $i ][ 0 ] . 'am">&#163;' . $product_info[ $i ][ 7 ] . '</label></td>
								<td><input id="' . $product_info[ $i ][ 0 ] . '_pm"  name="' . $product_info[ $i ][ 0 ] . '" class="element radio" type="radio" onclick="liveRadio( \'' . $product_info[ $i ][ 0 ] . '_pm\' );" value="&#163;%1.2f" /><label class="choice" for="' . $product_info[ $i ][ 0 ] . 'am">&#163;' . $product_info[ $i ][ 8 ] . '</label></td>
								', $product_info[ $i ][ 5 ], $product_info[ $i ][ 6 ], $product_info[ $i ][ 7 ], $product_info[ $i ][ 8 ], $product_info[ $i ][ 9 ] );
		printf('							
								<td><b><i><p id="' . $product_info[ $i ][ 0 ] . 'pr"></p></i></b></td>
							</tr>
							<input type="hidden" name="booking_code' . $i . '" value="' . $product_info[ $i ][ 0 ] . '" />
							<input type="hidden" name="' . $product_info[ $i ][ 0 ] . '_t"   value="' . $product_info[ $i ][ 3 ] . '" />
							<input type="hidden" name="' . $product_info[ $i ][ 0 ] . '_img" value="' . $product_info[ $i ][ 1 ] . '" />
				');
	}
	$i++;
} while ( $i < $count );
?>
						</tbody>
					</table>
					</br>
					<input id='saveForm' type='submit' value='Confirm Booking' />
				</form>