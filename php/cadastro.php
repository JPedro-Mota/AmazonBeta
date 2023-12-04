<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cadastro.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg" id="navbar-container">
          <div class="container-fluid mb-lg-0 m-3 p-0>
            <a href="../index.html" class="logo"><img src="../img/amazon-logo.png" alt="" class="logo-img"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse mb-lg-3 col ms-5" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item ">
                  <a class="nav-link active text-light" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light" href="../html/sobre.html">Sobre</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light" href="/html/logistica.html">Logistica</a>
                </li>
                
          
              </ul>
                <input type="search" id="rectangle-1" class="rectangle-1" style="font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif" placeholder="   Tudo para você, de A a Z""> </input>
                <ul class="navbar-nav me-auto ms-auto">
                  <li class="nav-item">
                    <a class="nav-link text-light" href="#" >Olá, faça seu login</a>
                  </li>
                </ul> 
              </form>
            </div>
          </div>
        </nav>
    </header> 

        <div class="container">
          <div class="row">
              <div class="back-form col-md-6 offset-md-3 bg-black" >
                  <div class="card bg-black">
                      <div class="card-header bg-black">
                          <h1 class="text-white">Cadastro</h1>
                      </div>
                      <div class="card-body">
                        <form class="row g-3">
                          <div class="col-md-6">
                            <label for="inputEmail4" class="form-label text-white">Email</label>
                            <input type="email" class="form-control" id="inputEmail4">
                          </div>
                          <div class="col-md-6">
                            <label for="inputPassword4" class="form-label text-white">Password</label>
                            <input type="password" class="form-control" id="inputPassword4">
                          </div>
                          <div class="col-12">
                            <label for="inputAddress" class="form-label text-white">Nome</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="Name">
                          </div>
                          <div class="col-md-6">
                            <label for="inputCity" class="form-label text-white">Cidade</label>
                            <input type="text" class="form-control" id="inputCity">
                          </div>
                          <div class="col-md-4">
                            <label for="inputState" class="form-label text-white">Estado</label>
                            <select id="inputState" class="form-select">
                              <option selected>Choose...</option>
                              <option>AC</option>
                              <option>AL</option>
                              <option>AP</option>
                              <option>AM</option>
                              <option>BA</option>
                              <option>CE</option>
                              <option>ES</option>
                              <option>GO</option>
                              <option>MA</option>
                              <option>MT</option>
                              <option>MS</option>
                              <option>MG</option>
                              <option>PA</option>
                              <option>PB</option>
                              <option>PR</option>
                              <option>PE</option>
                              <option>PI</option>
                              <option>RJ</option>
                              <option>RN</option>
                              <option>RS</option>
                              <option>RO</option>
                              <option>RR</option>
                              <option>SC</option>
                              <option>SP</option>
                              <option>SE</option>
                              <option>TO</option>
                            </select>
                          </div>
                         <li class="form-li"><a href="./cadastro.html"> Entrar</a></li>
                          <div class="col-12">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                </div>
            </div>
        </div>
   
    <script src="../js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>