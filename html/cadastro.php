<?php
  include_once('../conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Meta tags e links para CSS e Bootstrap -->
</head>

<body>
    <!-- Seu cabeçalho (header) aqui -->

    <div class="container">
        <div class="row">
            <div class="back-form col-md-6 offset-md-3 bg-black">
                <div class="card bg-black">
                    <div class="card-header bg-black">
                        <h1 class="text-white">Cadastro</h1>
                    </div>
                    <div class="card-body">
                        <form action="processar_cadastro.php" method="post" class="row g-3">
                            <div class="col-md-6">
                                <label for="email" class="form-label text-white">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="col-md-6">
                                <label for="password" class="form-label text-white">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="col-12">
                                <label for="nome" class="form-label text-white">Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="cidade" class="form-label text-white">Cidade</label>
                                <input type="text" class="form-control" id="cidade" name="cidade" required>
                            </div>
                            <div class="col-md-4">
                                <label for="estado" class="form-label text-white">Estado</label>
                                <select id="estado" name="estado" class="form-select" required>
                                    <option selected disabled>Escolha...</option>
                                    <!-- Inclua as opções do Estado aqui -->
                                </select>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Seu rodapé (footer) aqui -->

    <script src="../js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Meta tags e links para CSS e Bootstrap -->
</head>

<body>
    <!-- Seu cabeçalho (header) aqui -->

    <div class="container">
        <div class="row">
            <div class="back-form col-md-6 offset-md-3 bg-black">
                <div class="card bg-black">
                    <div class="card-header bg-black">
                        <h1 class="text-white">Cadastro</h1>
                    </div>
                    <div class="card-body">
                        <form action="processar_cadastro.php" method="post" class="row g-3">
                            <div class="col-md-6">
                                <label for="email" class="form-label text-white">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="col-md-6">
                                <label for="password" class="form-label text-white">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="col-12">
                                <label for="nome" class="form-label text-white">Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="cidade" class="form-label text-white">Cidade</label>
                                <input type="text" class="form-control" id="cidade" name="cidade" required>
                            </div>
                            <div class="col-md-4">
                                <label for="estado" class="form-label text-white">Estado</label>
                                <select id="estado" name="estado" class="form-select" required>
                                    <option selected disabled>Escolha...</option>
                                    <!-- Inclua as opções do Estado aqui -->
                                </select>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Seu rodapé (footer) aqui -->

    <script src="../js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>

   
    <script src="../js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>