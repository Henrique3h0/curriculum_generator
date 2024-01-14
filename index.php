<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Criar Currículo</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f2f2f2;
      color: #333333;
    }
    .container {
      background-color: #ffffff;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
    }
    h1, h2, p {
      color: #ff3333; /* Vermelho */
    }
    a {
      color: #007bff; /* Azul */
    }
    .form-control {
      background-color: #ffffff;
      color: #333333;
      border-color: #ff3333; /* Vermelho */
    }
    .form-control:focus {
      border-color: #ff3333; /* Vermelho */
      box-shadow: 0 0 0 0.2rem rgba(255, 51, 51, 0.25); /* Vermelho com opacidade */
    }
    .btn-primary {
      background-color: #007bff; /* Azul */
      border-color: #007bff; /* Azul */
    }
    .btn-primary:hover {
      background-color: #0056b3; /* Azul mais escuro ao passar o mouse */
      border-color: #0056b3; /* Azul mais escuro ao passar o mouse */
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <h1 class="text-center mb-4">Preencha as Informações do Currículo</h1>
    <form action="gerar_curriculo.php" method="post">
      <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="telefone">Telefone:</label>
        <input type="tel" class="form-control" id="telefone" name="telefone" required>
      </div>
      <div class="form-group">
        <label for="experiencia">Experiência Profissional:</label>
        <textarea class="form-control" id="experiencia" name="experiencia"></textarea>
      </div>
      <div class="form-group">
        <label for="habilidades">Habilidades:</label>
        <textarea class="form-control" id="habilidades" name="habilidades"></textarea>
      </div>
      <div class="form-group">
        <label for="educacao">Educação:</label>
        <textarea class="form-control" id="educacao" name="educacao"></textarea>
      </div>
      <div class="form-group">
        <label for="idiomas">Idiomas:</label>
        <textarea class="form-control" id="idiomas" name="idiomas"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Gerar Currículo</button>
      <a href="howto.php"><button type="button" class="btn btn-primary">Como usar</button></a>
    </form>
  </div>

  <!-- Scripts do Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
