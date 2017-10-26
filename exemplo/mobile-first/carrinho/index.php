<link rel="stylesheet" href="css/bootstrap.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<div class="jumbotron">
    <h1>Ótima escolha</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore, sapiente!</p>
</div>

<div class="panel panel-default">
  <div class="panel-heading">
      Sua Compra
  </div>
  <div class="panel-body">
    <dl>
        <dt>Nome:</dt> 
        <dd><?php print $_POST["nome"] ?></dd>
        
        <dt>Preço:</dt> 
        <dd><?php print $_POST["preco"] ?></dd>
        
        <dt>Cor</dt>
        <dd>
            <?php print $_POST["cor"] ?>
        </dd>

        <dt>Tamanho</dt>
        <dd>
            <?php print $_POST["tamanho"] ?>
        </dd>
    </dl>
  </div>
</div>

