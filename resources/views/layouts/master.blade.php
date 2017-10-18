<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="/css/master.css">
</head>
<body>
<header id="header" class="">
	<nav>
		<a href="/" title="">Home</a>
		<a href="/blog" title="">Blog</a>
	</nav>
</header><!-- /header -->
<br>

	@yield('content')

<br>
<footer>
	<p>
		&copy; Irvan Ariyanto
	</p>
</footer>
</body>
</html>
