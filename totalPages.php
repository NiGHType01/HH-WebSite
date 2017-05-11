<?php
header("Cache-Control: no-cache, must-revalidate");
$totalPages = array(0 => "Welcome Page",
					1 => "Sessions &amp; Fees",
					2 => "Schools",
					3 => "Contact Us",
					4 => "Forms &amp; PDFs",
				//	5 => "Google Map",
				//	6 => "Our Friends",
				//	7 => "Reviews"
);
function navActive( $i, $pgn )
	{
	if ($pgn == $i) return "class='active'"; else return null;
	}
?>
