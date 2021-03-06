<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>2 Column Layout — Right Menu with Header &amp; Footer</title>
		<style type="text/css">

			body {
				margin:0;
				padding:0;
				font-family: Sans-Serif;
				line-height: 1.5em;
			}

			header {
				background: #ccc;
				height: 100px;
			}

			header h1 {
				margin: 0;
				padding-top: 15px;
			}

			main {
				padding-bottom: 10010px;
				margin-bottom: -10000px;
				float: left;
				width: 100%;
			}

			nav {
				padding-bottom: 10010px;
				margin-bottom: -10000px;
				float: left;
				width: 230px;
				margin-left: -230px;
				background: #eee;
			}

			footer {
				clear: left;
				width: 100%;
				background: #ccc;
				text-align: center;
				padding: 4px 0;
			}

			#wrapper {
				overflow: hidden;
			}

			#content {
				margin-right: 230px; /* Same as 'nav' width */
			}

			.innertube {
				margin: 15px; /* Padding for content */
				margin-top: 0;
			}

			p {
				color: #555;
			}

			nav ul {
				list-style-type: none;
				margin: 0;
				padding: 0;
			}

			nav ul a {
				color: darkgreen;
				text-decoration: none;
			}

		</style>

</head>

<body>

	<header>
		<div class="innertube">
			<h1>Header...</h1>
		</div>
	</header>

	<div id="wrapper">

		<main>
			<div id="content">
