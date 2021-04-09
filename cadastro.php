<!DOCTYPE html> <!-- Indica qual versão HTML deve ser renderizada -->
    <html lang="pt-br"> <!-- Mecanismo de busca idioma -->
    <head> <!-- Informações sobre o documento -->
        <meta charset="utf-8"> <!-- Codificação de Linguagem-->
        <title> DGP Games </title>

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
                color: #000000;
                background: #ffffff;
                font-weight: bold; /*ponto-e-vírgula é facultativo */
            }
            .navblack{
                background-color:#000000 !important;
            }
        </style>




<nav class="navbar navbar-light navbar-expand-md navbar-dark navblack justify-content-center" id="navbarSupportedContent">
    <img src="imagens/dgp.png" class="btn" alt="Projeto" width="130" alt="Projeto">
    

    <div class="navbar-collapse collapse justify-content-between align-items-center w-100" id="collapsingNavbar2">
        <ul class="navbar-nav mx-auto text-center">
          <li class="nav-item">
            <a class="nav-link" href="primeira_pagina.html">INICIO</a> 
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

<div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="/docs/4.4/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h2>Faça seu cadastro!</h2>
    <p class="lead"></p>
  </div>

<div class="row justify-content-center">
    <div class="col-md-8 order-md-1">
        <form class="needs-validation" novalidate="">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="firstName">Primeiro nome</label>
                    <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="lastName">Sobrenome</label>
                    <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="username">Apelido</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="username" placeholder="Apelido" required="">
                    <div class="invalid-feedback" style="width: 100%;">
                        Your username is required.
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="você@exemplo.com">
                <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                </div>
            </div>

            <div class="mb-3">
                <label for="address">Endereço</label>
                <input type="text" class="form-control" id="address" placeholder="Rua Teófilo, 123" required="">
                <div class="invalid-feedback">
                    Please enter your shipping address.
                </div>
            </div>
            <div class="mb-3">
                <label for="address2">Endereço 2 <span class="text-muted">(Opcional)</span></label>
                <input type="text" class="form-control" id="address2" placeholder="Apartamento ou casa">
            </div>

            <div class="row">
                <div class="col-md-5 mb-3">
                    <label for="country">País</label>
                    <select class="custom-select d-block w-100" id="country" required="">
                        <option>Brasil</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid country.
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="state">Estado</label>
                    <select class="custom-select d-block w-100" id="state" required="">
                    <option value="">Escolha</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                    </select>
                    <div class="invalid-feedback">
                        Please provide a valid state.
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="zip">CEP</label>
                    <input type="text" class="form-control" id="zip" placeholder="" required="">
                    <div class="invalid-feedback">
                        Zip code required.
                    </div>
                </div>
            </div>
            
            <div class="mb-3">
                <label for="address2">Cidade</label>
                <input type="text" class="form-control" id="address2" placeholder="Digite a cidade">
            </div>
            
           

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">© 2020-2020 Company Dodge Cars</p>
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