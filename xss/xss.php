<!DOCTYPE html>
<head>
<!-- XSS in 11 URL parameters (a, b1, b2, b3, b4, c1, c2, c3, c4, c5 and c6) + URL itself -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>XSS Test Page by Unsecury</title>
<link rel="stylesheet" href="css/s">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> 
</head>
<body>
<h1>XSS Test</h1>
by <a href="https://instagram.com/adilson_bm">@adilson_bm</a>
<br><br>
<!-- Simple HTMLi -->
Hello, guest!
<br>
<br>
<br>
Find user profile providing one or more below: 
<!-- URL Reflection -->
<form action="/xss.php" method="POST">
<br>
User
<br>
<!-- Inline HTMLi (Double Quotes) -->
<input type="text" name="b1" value="">
<br>
<br>
Email
<br>
<!-- Inline HTMLi (Single Quotes) -->
<input type="text" name="b2" value=''>
<br>
<br>
Name
<br>
<!-- Inline HTMLi - No Tag Breaking (Double Quotes) -->
<input type="text" name="b3" value="">
<br>
<br>
Group
<br>
<!-- Inline HTMLi - No Tag Breaking (Single Quotes) -->
<input type="text" name="b4" value=''>
<br>
<br>
<input type="submit" id="i" value="Find">
</form>
<script>
	// HTMLi in Js Block (Single Quotes)
	var c1 = 'value1';

	// HTMLi in Js Block (Double Quotes)
	var c2 = "value2";

	// Simple Js Injection (Single Quotes)
	var c3 = 'value3';

	// Simple Js Injection (Double Quotes)
	var c4 = "value4";

	// Escaped Js Injection (Single Quotes)
	var c5 = 'value5';

	// Escaped Js Injection (Double Quotes)
	var c6 = "value6";

</script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.5/angular.min.js"></script>
<script src=/x.js></script>
</body>
<footer>
<br>
<br>
<p style="font-size:11px">© 2020 Unsecury - All rights reserved.</p>
</footer>
</html>
