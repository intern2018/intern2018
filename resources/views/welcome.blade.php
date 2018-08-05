<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<base href="{{ URL::asset('/') }}" target="_self">
	<title>Invetory Management System</title>
	<link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/inventory-style.css') }}">
	<script type="text/javascript" src="{{ url('js/jquery-3.3.1.min.js') }}"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="{{ url('/') }}">Inventory</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link pull-right" href="{{ url('/other-page') }}">Other Page</a>
	      </li>
	    </ul>
	  </div>
	</nav>
	<script type="text/javascript" src="{{ url('js/popper.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('js/bootstrap.min.js') }}"></script>
</body>
</html>
