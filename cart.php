<?php
$pageName = "Confirm Booking";
include('totalPages.php');
include('imageCarousel.php');
include('HolidayClub.php');
include('head.php');
include('header.php');
include('nav.php');
include('modalpanel.php');
include('scrollBarContainer.php');
?>
<div>
<?php 
//if ( isset( $_SESSION[ 'name' ] ) ){
//		echo '<h2> ' . $_SESSION[ 'name' ] . ' please confirm your booking</h2>';
//		} else {
//		echo '<h2> You must register before confirming your booking</h2>';
//		}
echo '<p><b>Please check and confirm the booking you are making for, '. $_SESSION['name'] .'!</b></p>'
?>
			<table class="hhTable" >
			<thead>
				<tr>
					<th></th>
					<th>Booking details</th>
					<th>Price</th><th></th>
				</tr>
			</thead>
			<tbody>
<?php
$sum = 0;
for ( $i = 0; $i < ( count( $_POST ) - 15 ); $i++ ) {
		if ( isset( $_POST[ $_POST[ "booking_code" . $i ] ] ) ) {
			$_SESSION[ 'booking' ][ $_POST[ 'booking_code' . $i ] ] = Array (
			'price' => trim( $_POST[ $_POST[ 'booking_code' . $i ] ], "$" ),
			'title' => $_POST[ $_POST[ 'booking_code' . $i ] . "_t" ],
			'image' => $_POST[ $_POST[ 'booking_code' . $i ] . "_img" ] );
			printf('	<tr>
							<td>' . $_SESSION[ "booking" ][ $_POST[ "booking_code" . $i ] ][ "title" ] . '</td>
							<td style="background-color: LightGray;" > </td>
							<td> &#163;%1.2f </td>
							<td><input id="removeItem" name="removeItem" type="button" value="Remove" /> </td>
						</tr>', $_SESSION[ "booking" ][ $_POST[ "booking_code" . $i ] ][ "price" ] );
		}
		$sum = ( $sum + trim( $_POST[ $_POST[ 'booking_code' . $i ] ], "$" ) );
}
printf( '	<tr>
				<td colspan="2" style="background-color: LightGray;" ></td>
				<td> $%1.2f </td>
				<td style="background-color: LightGray;" ></td>
			</tr>
		</table>', $sum );
?>
</br>
<p>Please note! Bookings are note guaranteed until payment has been made.</p> 
</div>
<?php include('bottomPage.php'); ?>