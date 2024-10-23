<?php

/*----------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 * Licensed under the MIT License. See LICENSE in the project root for license information.
 *---------------------------------------------------------------------------------------*/

function sayHello($name) {
	echo "Hello $name!";
}

?>

<html>
	<head>
		<title>Visual Studio Code Remote :: PHP</title>
	</head>
	<body>
		<?php 
		
		sayHello('remote world');
			
		// phpinfo(); 

		$conn = mysqli_connect("127.0.0.1", "mariadb", "mariadb", "mariadb");

		$sql = "select * from test";

		$result = mysqli_query($conn, $sql);

		while($row = mysqli_fetch_assoc($result)) {
			echo "<pre>";
			var_dump($row);
			echo "</pre>";
		}
		
		?>
	</body>
</html>