<!DOCTYPE html>
<html>
<head>
	<title>Player Bot Roster Generator</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="col-md-12 text-center">
	<img src="logo.png" class="text-center img-responsive">
	<div id="loading" style="display: none"><img src="loading.gif"></div>
	<div class="col-md-12" id="rostertable"></div>
	<button class="btn btn-success btn-lg">Click to Generate Roster</button>
</div>
<script
			  src="https://code.jquery.com/jquery-3.2.1.min.js"
			  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
			  crossorigin="anonymous"></script>
			  <script type="text/javascript">
			  $(document).ready(function(){
			  	$('button').click(function(){
			  		$('#loading').show();
			  		 $.get("rosterGenerator.php", function(data){
            		$("#rostertable").html(data);
            		$('#loading').hide();
			  		
        });
			  	});
			  });
			  </script>
</body>

</html>