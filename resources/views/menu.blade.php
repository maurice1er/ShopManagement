<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PROJET YARA</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>

        body{
            margin: 0px;
            padding: 0px 325px;
            background: linear-gradient(to bottom right, #7A7FBA, #11C37C) no-repeat 100%;
            
            width: 100%;
            height: 100vh;
        }
        
        #logo{
            background-color: #000;
            padding: 20px 25px;
            color: red;
        }
        #logo:hover{
            transition: 0.09s;
            transform: skewX(-2deg);
            background-color: #111;
            padding: 20px 24px;
            font-weight: bold;
            color: #fff;
        }

        #menu{
            background: #fff;
        }

        body .container h1{
            font-size: 22px;
            height: 35px;
            margin-top: 22px;
            margin-bottom: 12px;
        }
        
        body .container .table tr{
            font-size: 12px;
            background: #fff;
        }
    

        #menu li a{
            padding: 8px 12px
        }
        #menu li a:hover{
            color: red;
            background: #ffefff;
        }
        .btn-xs {
            font-size: 10px;
            font-weight: bold;
        }
        .btn-xxs {
            font-size: 7px;
            padding: auto 5px;
        }
        .btn-add{
            color: red;
        }
    </style>
</head>
<body>


<div class="container">
    <nav class="navbar navbar-expand-lg" id="menu">
        <a class="navbar-brand" id="logo" href="/"> 
           YR
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/categorie/all">Catégories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/produit/all">Produits</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/commande/all">Commandes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/client/all">Clients</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/fournisseur/all">Fournisseurs</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>


</div>