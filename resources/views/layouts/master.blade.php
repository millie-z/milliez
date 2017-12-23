<!DOCTYPE html>
<html>
<head>
	<title>
        @yield('title', 'Modern Millie')
    </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    @stack('head')

</head>
<body>

@if(session('alert'))
	<div class='alert'>{{ session('alert') }}</div>
@endif

	<header>
		@include('modules.nav')
	</header>

	<section id='main'>
		@yield('content')
	</section>


    <footer class="bg-faded text-center py-5">
      <div class="container">
        <p class="m-0">Copyright &copy; <a href='https://github.com/milliezhou'>{{ date('Y') }}</a></p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    @stack('body')

</body>
</html>
