<html>
<head>
<style type="text/css">
	body {
	font-family: Arial;
	font-size: 14px;
}

.container {
	width: 500px;
	height:150px;
	margin: 50px auto;
	background: #ddd;
}

#targetPhoto{
	float:left;
	width:150px;
	height:150px;
	text-align:center;
	line-height:150px;
	font-weight: bold;
	color: #C0C0C0;
	background-color: #333;
	overflow:auto;
}

#uploadFormContent{
	padding-top: 38px;
}
#uploadFormContent label{
	font-weight: bold;
	color: #333;
	font-size: 18px;
}
.btnSubmit {
	background-color: green;
	padding:10px;
	border: #3FA849 1px solid;
	color: #FFFFFF;
}
.inputFile {
	padding: 8px;
	background-color: #FFFFFF;
}

header{
	text-align: center;
}
</style>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function (e) {
	$("#uploadForm").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "upload.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(data)
		    {
			$("#targetPhoto").html(data);
		    },
		  	error: function() 
	    	{
	    	} 	        
	   });
	}));
});
</script>
</head>
<body>

<div class="container">
	<form id="uploadForm" action="upload.php" method="post">
		<div id="targetPhoto">No Image</div>
		<div id="uploadFormContent">
			<label>Upload Foto Anda:</label><br/>
			<input name="userImage" type="file" class="inputFile" />
			<input type="submit" value="Submit" class="btnSubmit" />
		</div>
	</form>
</div>
</body>
</html>