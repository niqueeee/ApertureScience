<!DOCTYPE html>
<html>
<head>
	<title>asdasd</title>
</head>
<body>
	<div id="getdata">
	</div>

	<script type="text/javascript">
		dis();

		function dis(){
			xmlhttp= new XMLHttpRequest();
			xmlhttp.open("GET", "select.php", false);
			xmlhttp.send(null);
			document.getElementById("getdata").innerHTML=xmlhttp.responseText;
		}
	</script>
</body>
</html>
