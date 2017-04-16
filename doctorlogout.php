<html>
<head>
</head>
<body>
	<?php
		session_start();//session is a way to store information (in variables) to be used across multiple pages.  
		session_destroy();  
		header("localhost/site/index.php");//use for the redirection to some page  
	?>
</body>
</html>
