		<div id="row4" class="keepLeft windowWidth"><div id="cols41" class="row1346Height strip"></div><div id="cols42" class="row1346Height strip"></div><div id="cols43" class="row1346Height strip"></div><div id="cols44" class="row1346Height strip"></div><div id="cols45" class="row1346Height strip"></div></div>
		<div id="row5" class="row5Height keepLeft heightResizer windowWidth" >
			<div id="cols51" class="keepLeft heightResizer" >
				<nav class="mainMenu">
					<ul class="nav nav-pills nav-stacked">
<?php 
						for ( $i = 0; $i < count($totalPages); $i++ ) {
							if ( $totalPages[$i] == "Welcome Page" ) {
								$fileName = "index";
							} else {
								$fileName = "Harlequins".str_replace(' ', '', str_replace(' &amp; ', '_',$totalPages[$i]));
							}					
							if ( $totalPages[ $i ] == "Forms &amp; PDFs" ) {
								echo "\t\t\t\t\t\t<li><a href='http://www.ofsted.gov.uk/inspection-reports/find-inspection-report/provider/CARE/EY431332' target='_blank'> <img id='ofs' src='images/oflogomenu.gif' alt=''></a></li>";
							}
							echo "\t\t\t\t\t\t<li ".navActive($totalPages[$i],$pageName)."><a href='".$fileName.".html'>".$totalPages[$i]."</a></li>\n";
						}
holidayClubButton( $holidayTitle );
?>
					<a style="border: 0;" href="http://www.bigbluefrog.co.uk/" target="_blank"><img id="BigBlueFrog" src="http://bigbluefrog.co.uk/wp-content/uploads/2015/02/3.png" /></a>
					<a style="border: 0;" href='http://www.jumpingclay.co.uk' target="_blank"> <img id="jumpingclay" src="/images/jumpingclay.png" alt="jumpingclay.co.uk" /></a>
					<a style="border: 0;" href="http://halifaxymca.org.uk" target="_blank"><img id="ymca" src="http://halifaxymca.org.uk/images/logo.png" /></a>
					<br><br>
					<a style="border: 0;" href="http://electricbowl.net/" target="_blank">  <img id="eb"   src="http://electricbowl.net/electricbowl-content/themes/electric-bowl-v1.0/svg/electric_bowl-logo.svg" /></a>
					<a style="border: 0;" href="http://www.goodcareguide.co.uk/childcare/nurseries/west-yorkshire/hebble-harlequins--gail-and-jasons-hx30aq/" target="_blank"><img id="goodcareguide" src="http://www.goodcareguide.co.uk/images/goodCareGuideLogo.png" alt="www.goodcareguide.co.uk"></a>		
					<br><br>
					<p class="copyMe">&copy; Copyright 2016<br/><a style="border: 0;" href="http://www.secure-its.co.uk" target="_blank">SITS - Mr N. Spencer</a></p>
				</ul>
			</nav>
			</div>
