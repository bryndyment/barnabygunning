<?php
    header("Content-type: text/css; charset: UTF-8");
	$a = array("170_0013","200_0016","202_0073","211_6514");
	$b = rand(0,count($a)-1);
	$c = $a[$b];
	$d = "_bkg/" . $c . ".jpg";
?>

#bkg {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	z-index: -999;
	background-color: #000;
	background-image: url("<?php echo $d; ?>");
	background-size: cover;
	background-position: center center;
	
}


#logo {
	position: absolute;
	width:108px;
	height:144px;
	left:8px;
	top:-8px;
	background-image: url(_a.png);
	background-size: 100%;
}

#hero {
	position: absolute;
	width: 100%;
	height: 100%;
	background-color: #000;
	opacity: 0.15;
	z-index: -998;
}

body {
	font-family:-apple-system, BlinkMacSystemFont, 
    "Segoe UI", "Roboto", "Oxygen", 
    "Ubuntu", "Cantarell", "Fira Sans", 
    "Droid Sans", "Helvetica Neue", sans-serif;
}

#title {
	position: absolute;
	left: 132px;
	top:44px;
	width:auto;
	height:66px;
    font-size: 64px;
    font-weight: 100;
    color: #FFF;
	text-align: left;
 }
 
 #contact {
	position: absolute;
	left: 132px;
	bottom:64px;
	width:auto;
	height:auto;
    font-size: 32px;
    font-weight: 300;
    color: #FFF;
	text-align: left;
	vertical-align: middle;
 }