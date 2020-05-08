<?php 
$tituloDaPagina = "Página Cadastro";
require_once (".\inc\head.php");
?>

<body>
<?php require_once(".\inc\header.php"); ?>

<main class="container my-5">

<form action="principal.php" method="$_POST" class="col-6 mx-auto border rounded bg-light p-4">
  <h3>Formulário de cadastro</h3>
  <p>Coloque seus dados pessoais</p>
<div class="form-row"> 
  <div class="form-group col-md-5">
    <label for="exampleInputEmail1">Nome</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="inputEmail" aria-describedby="emailHelp" placeholder="Enter email">    
  </div>

  <div class="form-group col-md-5">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="inputEmail" aria-describedby="emailHelp" placeholder="Enter email">    
  </div>

  <div class="form-group col-md-5">
    <label for="exampleInputEmail1">Telefone</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="inputEmail" aria-describedby="emailHelp" placeholder="Enter email">    
  </div>

  <div class="form-group col-md-5">
    <label for="exampleInputEmail1">Endereço para entrega</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="inputEmail" aria-describedby="emailHelp" placeholder="Enter email">    
  </div>

  <div class="form-group col-md-5">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  </div>

  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Li e estou de acordo com as políticas de privacidade</label>
  </div>

  <button type="submit" class="btn btn-primary">Confirmar</button>
</form>


</main>

<?php require_once("./inc/footer.php"); ?>
</body>

</html>