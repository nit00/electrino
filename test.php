<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<button id="btn" onclick="a(1)">Press me</button>
<script type="text/javascript">
	function a(l)
	{
		if(l==1)
		{
			<?php
			echo "I am due to 1";
			?>
		}
		else
			<?php
			echo "I am due to other";
			?>
	}
</script>
</body>
</html>