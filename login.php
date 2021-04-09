<!DOCTYPE html> <!-- Indica qual versão HTML deve ser renderizada -->
    <html lang="pt-br"> <!-- Mecanismo de busca idioma -->
    <head> <!-- Informações sobre o documento -->
        <meta charset="utf-8"> <!-- Codificação de Linguagem-->
        <title> DGP Games </title>
        <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <body> <!-- Corpo de todo o documento (página)-->

        <style>
            p {
                font-size: 12px; 
            }
          
            body {
                background: #ffffff;
                font-weight: bold; /*ponto-e-vírgula é facultativo */
            }
            .navblack{
                background-color:#000000 !important;

            }

            h1
            {
            color: #000000;
            text-align: center;
            font-family:'Anton', sans-serif;
            
            }
        </style>





<nav class="navbar navbar-light navbar-expand-md navbar-dark navblack justify-content-center" id="navbarSupportedContent">
    <img src="imagens/dgp.png" class="btn" alt="Projeto" width="130" alt="Projeto">
    

    <div class="navbar-collapse collapse justify-content-between align-items-center w-100" id="collapsingNavbar2">
        <ul class="navbar-nav mx-auto text-center">
          <li class="nav-item">
            <a class="nav-link" href="index.php">INICIO</a> 
          </li>
            <li class="nav-item">
              <a class="nav-link" href="loja.html">LOJA<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sobre_nos.html">SOBRE NÓS</a> 
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                SUPORTE
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="contato.html">CONTATO</a>
              </div>
            </li>
            
        </ul>
        <a class="nav-link" type="button" style="font-size: 15px;" href="sign_up.html">Sign Up</a>
    </div>
</nav>


<div class="container text-center align-items-center">
  <div class="row justify-content-center" style="margin-top: 50px;" >
    

  <form class="form-signin">
    <h2 class="form-signin-heading"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Faça seu Login</font></font></h2>
      <label for="inputEmail" class="sr-only"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Endereço de e-mail</font></font></label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Endereço de e-mail" required="" autofocus="">
          <label for="inputPassword" class="sr-only"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Senha</font></font></label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required="">
    <div class="checkbox">
      <small class="text-muted">Não é cadastrado?</small> 
      <a class="nav-item" type="button" style="font-size: 15px;" href="cadastro.php">clique aqui.</a>
      <br>
      <label>
        <input type="checkbox" value="remember-me"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Lembre de mim
      </font></font></label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Entrar</font></font></button>
  </form>

</div>

</div>









       
<footer class="my-5 pt-5 text-muted text-center text-small">
  <p class="mb-1">© 2020-2020 Company DGP Games</p>
  <ul class="list-inline">
    <li class="list-inline-item"><a href="#">Privacidade</a></li>
    <li class="list-inline-item"><a href="#">Termos</a></li>
    <li class="list-inline-item"><a href="#">Suporte</a></li>
  </ul>
  <a href="http://www.facebook.com" target="_blank">
    <img style="width: 23px;" src="imagens/face.png">
  </a>
  <a href="http://www.instagram.com.br" target="_blank">
    <img style="width: 23px;" src="imagens/insta.png">
  </a>
</footer>

</body>
    </html>