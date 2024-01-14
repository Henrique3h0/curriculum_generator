<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Currículum Gerado</title>
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
  </style>
</head>
<body>
  <div class="container mt-5">
    <h1 class="text-center mb-4">Currículum Gerado</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $nome = $_POST["nome"];
      $email = $_POST["email"];
      $telefone = $_POST["telefone"];
      $experiencia = $_POST["experiencia"];
      $habilidades = $_POST["habilidades"];
      $educacao = $_POST["educacao"];
      $idiomas = $_POST["idiomas"];

      function formatarTexto($texto) {
        $padrao = '/([^\s]+) -/m';
        $substituicao = '<b>$1</b> -';
        $texto_formatado = preg_replace($padrao, $substituicao, $texto);
        $texto_formatado = preg_replace('/\*(.*?)\*/', '<strong>$1</strong>', $texto_formatado);
        $texto_formatado = preg_replace('/\_(.*?)\_/', '<u>$1</u>', $texto_formatado);
        $texto_formatado = preg_replace('/\*\*(.*?)\*\*/', '<b><i>$1</i></b>', $texto_formatado);

        return $texto_formatado;
      }

      $experiencia = formatarTexto($experiencia);
      $educacao = formatarTexto($educacao);
      $habilidades = formatarTexto($habilidades);
      $idiomas = formatarTexto($idiomas);
    ?>
      <div class="row">
        <div class="col-md-6">
          <h2>Dados Pessoais</h2>
          <p><strong>Nome:</strong> <?= $nome ?></p>
          <p><strong>Email:</strong> <?= $email ?></p>
          <p><strong>Telefone:</strong> <?= $telefone ?></p>
        </div>
        <div class="col-md-6">
          <h2>Experiência Profissional</h2>
          <p><?= nl2br($experiencia) ?></p>
        </div>
      </div>
      <h2 class="mt-4">Educação</h2>
      <p><?= nl2br($educacao) ?></p>
      <h2 class="mt-4">Habilidades</h2>
      <p><?= nl2br($habilidades) ?></p>
      <h2 class="mt-4">Idiomas</h2>
      <p><?= nl2br($idiomas) ?></p>
    <?php
    }
    ?>
  </div>

  <!-- Scripts do Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
