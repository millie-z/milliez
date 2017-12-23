<!DOCTYPE html>
<html>
<head>
	<title>
        @yield('title', 'Modern Millie')
    </title>

    <meta charset="utf-8">
	<meta name="author" content="Millie Zhou">
    <meta name="description" content="Personal site of Millie Zhou">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
	<link href="css/temp.css" rel="stylesheet">
    @stack('head')

</head>
<body>

	<header>
	</header>

	<section id='main'>
		@yield('content')
	</section>


    <footer class="text-center py-5">
      <div class="container">
        <p class="m-0">&copy;&nbsp;{{ date('Y') }}</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    @stack('body')

</body>
</html>
