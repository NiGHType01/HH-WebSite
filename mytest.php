<?php
$file = fopen ("http://www.hebbleharlequins.co.uk/index.html");
if (!$file) {
    echo "<p>Unable to open remote file.\n";
    exit;
}
while (!feof ($file)) {
    $line = fgets ($file, 1024);
    /* This only works if the title and its tags are on one line */
    if (preg_match ("@\<title\>(.*)\</title\>@i", $line, $out)) {
        $title = $out[1];
        break;
    }
}
fclose($file);
?>
<!-- 	@$product_info[ $product_num ] = explode( ",", htmlentities( $product_data ) );
	@$product_info[ $product_num ][ 5 ] = ( $product_info[ $product_num ][ 5 ] - $_SESSION[ 'discount' ][ 0 ] );
	@$product_info[ $product_num ][ 6 ] = ( $product_info[ $product_num ][ 6 ] - $_SESSION[ 'discount' ][ 1 ] );
	@$product_info[ $product_num ][ 7 ] = ( $product_info[ $product_num ][ 7 ] - $_SESSION[ 'discount' ][ 2 ] );
	@$product_info[ $product_num ][ 8 ] = ( $product_info[ $product_num ][ 8 ] - $_SESSION[ 'discount' ][ 3 ] );
	@$product_info[ $product_num ][ 9 ] = ( $product_info[ $product_num ][ 9 ] - $_SESSION[ 'discount' ][ 4 ] ); -->