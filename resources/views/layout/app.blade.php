<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>BasicWebsite</title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
@include('inc/navbar')
	<div class="row">
		<div class="col-md-8">
			@yield('content')
		</div>
	</div>
    	
</body>
</html>