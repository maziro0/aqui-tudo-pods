<!doctype html>
<html lang="pt-BR">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cadastro</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>

    <nav class="navbar col-12 m-auto navbar-dark navbar-expand-lg bg-danger " style="z-index: 999;">
    <div class="container-fluid m-auto">
        <a class="navbar-brand" href="index.php">Sheiden Store</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active" aria-current="index.php" href="#">Início</a>
            <a class="nav-link" href="?page=novo">Contato</a>
            
        </div>
        </div>
    </div>
    </nav>
    <div class="container"> 
        <div class="row">
            <div class="col mt-0">
                <nav>
                    <br>
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./img/EX1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img/sejaparceiro.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img/SHEIDAO.png" class="d-block w-100 " alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
                </nav>
                <nav>
                <div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="./img/budweiser.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Produto 1</h5>
        <p class="card-text">O processo de produçãoda Budweiser é diferenciado, por utilizar lascas de Beechwood durante os processos de fermentação e maturação. O resultado é um cerveja de sabor único e com equilíbrio perfeito: marcante no início e suave no final.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="./img/cocacola.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Produto 2</h5>
        <p class="card-text">Refrigerante com sabor único e refrescante, vendido em mais de 200 países e considerado uma das maiores marcas do mundo.
</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="./img/supreme.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Produto 3</h5>
        <p class="card-text">Supreme é uma marca americana de roupas e estilo de vida de skate estabelecida na cidade de Nova York em abril de 1994.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="./img/kfc.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Produto 4</h5>
        <p class="card-text">Kentucky Fried Chicken é uma rede de restaurantes de fast-food estadunidense, que explora a antiga receita de frango frito do Kentucky.</p>
      </div>
    </div>
  </div>
</div>
                </nav>
            <?php
            include("config.php");
        switch(@$_REQUEST["page"]){
            case "novo":
                include("novo-usuario.php");
            break;
            case "listar":
                include("listar-usuario.php");
            break;
            case "salvar";
                include("salvar-usuario.php");
                break;
            default:
                print(" ");
        }

    ?>
        </div>
     </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

  </body>
</html>