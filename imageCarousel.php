<?php 
function imageCarousel() {
	$carouselImages = scandir( 'images/club', 1 );
	printf('									<div id="myCarousel" class="carousel slide" >
										<!-- IMAGE CAROUSEL -->
										<div class="carousel-inner" > ');
	for ( $i = 0; $i < count( $carouselImages ) - 2; $i++ ) {
		if ( $i == 0 ) { echo "\n\t\t\t\t\t\t\t\t\t\t\t".'<div class="item active"><img src="images/club/' . $carouselImages[ $i ] . '" alt="" /></div>'."\n"; }
		else { echo "\t\t\t\t\t\t\t\t\t\t\t".'<div class="item"><img src="images/club/' . $carouselImages[ $i ] . '" alt="" /></div>'."\n"; }
	}
	printf("\t\t\t\t\t\t\t\t\t\t</div><!-- /.carousel-inner -->
										<!--  Next and Previous controls below href values must reference the id for this carousel -->
										<a class='carousel-control left' href='#myCarousel' data-slide='prev'>&lsaquo;</a>
										<a class='carousel-control right' href='#myCarousel' data-slide='next'>&rsaquo;</a>
									</div>\n");
}
 ?>