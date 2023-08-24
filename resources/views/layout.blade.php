<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOMMERCE </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
   
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-md bg-light pl-5 pr-5 mb-5">
        <a href="#" class="navbar-brand">ESHOP</a>
        <div class="collapse navbar-collapse">
            <div class="navbar-nav"> 
                <a href="{{ route('home')}}" class="nav-link">HOME</a>
                <a href="{{ route('categoria')}}" class="nav-link">Categoria</a>
                <a href="{{ route('cadastrar')}}" class="nav-link">Cadastrar</a>
            </div>
        </div>

        <a href="{{'carrinho' }}" class="btn btn-sm"><i  class="fa fa-shopping-cart" ></i></a>
    </nav>

    <div class="container">
        <div class="row"> 
            <!-- fica esperando o conteudo  -->
            @yield("conteudo")
        </div>
    </div>
</body>
</html>