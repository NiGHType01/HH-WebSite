<?php			 
$menubarPages = array( array("Home"),
					   array("Qualifications",
							 "BSc (Hons) Computer F&S",
							 "HE Cert. ITC"),
					   array("Employment",
							"Pearson Bros. (Engravers) Ltd",
							"Self-Employment",
							"HBos Plc",
							"O.C.W. Advertising & Marketing"),
					   array("Software Knowledge",
							"Freehand",
							"QuarkExpress",
							"InDesign",
							"Illustrator"),
					   array("Contact")
					  );
?>
<div id='cssmenu'>
<ul>
<?php 
	for ($m = 0; $m < 5; $m++) {
		echo "<li class='active'><a href='index.html'><span>".$menubarPages[$m][0]."</span></a></li>";
		if ( ! $menubarPages[$m][1] == "" ){
			echo "<ul id='menu".$m."'>";
			for ($mm = 1; $mm < 8; $mm++) {
				if ( ! $menubarPages[$m][$mm] == ""){
					echo "<li><a href='bsc.html'><span>".$menubarPages[$m][$mm]."</span></a></li>";
				}
			}
			echo "</ul>";
		}
	}
?>
</ul>

</div>