<!DOCTYPE html>
<html>
<head>
    <title>Page introuvable</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body>
    <div class="container text-center">
        <img src="{{ asset('images/404.png') }}" alt="visage triste" class="img-fluid">
        <h1 class="mt-2">Page introuvable</h1>
        <p class="lead">Désolé, la page que vous recherchez est introuvable.</p>
        <p><a href="{{ url('/') }}" class="btn btn-primary">Retour à la page d'accueil</a></p>
    </div>
</body>
</html>
