<?php session_start( );

$pageName = "Summer Holiday Booking From";
include('totalPages.php');
include('imageCarousel.php');
include('HolidayClub.php');
include('head.php');
include('header.php');
include('nav.php');
include('modalpanel.php');
include('scrollBarContainer.php');
?>
<div >
<?php //session_start( );

$_SESSION[ 'thisurl' ] = "holiday_club.php" ;
//require( 'php/login.php' );

//if ( ! isset( $_SESSION[ 'loggedin' ] ) ){
//	$_SESSION[ 'loggedin' ] = false; 
//	$_SESSION[ 'inorout' ] = "Login";
//	$_SESSION[ 'discount' ][ 0 ] = 0;
//	$_SESSION[ 'discount' ][ 1 ] = 0;
//	$_SESSION[ 'discount' ][ 2 ] = 0;
//	$_SESSION[ 'discount' ][ 3 ] = 0;
//	$_SESSION[ 'discount' ][ 4 ] = 0;
//}
//if ( isset( $_POST[ 'login' ] ) ) {
//	if ( $_SESSION[ 'loggedin' ] == true ) {
//		logout( );
//	} else {
//		login( );
//	}
//}
$count = 0;
if ( ! file_exists( "holidaylist.txt" ) ){
	exit( "<h2>Sorry there has been an error opaning the products file</h2>" ) ;
} else { $product = file( 'holidaylist.txt' ) ; }
foreach ( $product as $product_num => $product_data ){
	$count++;
	$product_info[ $product_num ] = explode( ",", htmlspecialchars( $product_data ) );
	@$product_info[ $product_num ][ 5 ] = ( $product_info[ $product_num ][ 5 ] - $_SESSION[ 'discount' ][ 0 ] );
	@$product_info[ $product_num ][ 6 ] = ( $product_info[ $product_num ][ 6 ] - $_SESSION[ 'discount' ][ 1 ] );
	@$product_info[ $product_num ][ 7 ] = ( $product_info[ $product_num ][ 7 ] - $_SESSION[ 'discount' ][ 2 ] );
	@$product_info[ $product_num ][ 8 ] = ( $product_info[ $product_num ][ 8 ] - $_SESSION[ 'discount' ][ 3 ] );
	@$product_info[ $product_num ][ 9 ] = ( $product_info[ $product_num ][ 9 ] - $_SESSION[ 'discount' ][ 4 ] );
}

?>
<?php include('holiday_table.php'); ?>
</div>
<?php include('bottomPage.php'); ?>