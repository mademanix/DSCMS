<!DOCTYPE html>
<html>
<head>
	<title>seirotSdaM</title>
	<style>

		html {

			margin: 0;
			padding: 0;
		}
		body {

			background-color: black; 
			min-height: 100vh;
			background-image: url('<?php echo base_url();?>/img/scary.png');
			background-repeat: no-repeat;
			background-position: center;
			overflow: hidden;
		}

		h1 {

			color: red;
			text-align: center;
			font-size: 60px;
			margin: 0;
			padding: 0;
		}
	</style>
</head>
<body>
<?php 
function utf8_strrev($str){
    preg_match_all('/./us', $str, $ar);
    return join('', array_reverse($ar[0]));
}

?>
<h1><?php echo "Nie powinieneś tu zaglądać..."; ?></h1>
<h1><?php echo "Nie powinno Cię tu być..."; ?></h1>

</body>
</html>