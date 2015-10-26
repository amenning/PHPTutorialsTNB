<html>
<head>
<script type="text/javascript">

function insert(){
	if(window.XMLHttpRequest){
		xmlhttp = new XMLHttpRequest();
	}else{
		xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
	}
	
	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState==4 && xmlhttp.status==200){
			document.getElementById('message').innerHTML = xmlhttp.responseText;
		}
	}
	
	xmlhttp.open('GET','update.inc.php?text=hello',true);
	xmlhttp.send();
}


</script>
</head>

<body>

Insert: <input type="text" id="text"> <input type="button" value="Submit" onclick="insert();">

<div id="message"></div>

</body>
</html>