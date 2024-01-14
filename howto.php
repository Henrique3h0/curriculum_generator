<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Documentação das Formatações</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      color: #333333;
      padding: 20px;
    }
    .container {
      background-color: #ffffff;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
    }
    h1, h2, p, ul {
      color: #ff3333; /* Vermelho */
    }
  </style>
</head>
<body>
  <div class="container">
    <h1 class="text-center mb-4">Documentação das Formatações</h1>

    <h2>1. Formatação em Negrito</h2>
    <p>Para formatar um texto em <b>negrito</b>, coloque o texto entre dois asteriscos: <code>**texto**</code> ou tudo que vier antes de: <code>-</code> ficara em <b>negrito</b></p>

    <h2>2. Formatação em Itálico</h2>
    <p>Para formatar um texto em <i>itálico</i>, coloque o texto entre um asterisco: <code>*texto*</code></p>

    <h2>3. Formatação Sublinhada</h2>
    <p>Para formatar um texto <u>sublinhado</u>, coloque o texto entre underlines: <code>_texto_</code></p>

    <h2>Exemplo de Uso</h2>
    <p>Suponha que você deseje formatar o seguinte texto:</p>
    <pre>
      **Texto em negrito** *Texto em itálico* _Texto sublinhado_
    </pre>
    <p>O resultado será:</p>
    <p><b>Texto em negrito</b> <i>Texto em itálico</i> <u>Texto sublinhado</u></p>

    <h2>Observações</h2>
    <ul>
      <li>As formatações podem ser combinadas. Por exemplo, <code>**<i>Texto</i>**</code> resultará em <b><i>Texto</i></b>.</li>
      <li>As formatações funcionam apenas em texto dentro do currículo. Fora do currículo, elas serão exibidas como texto normal.</li>
    </ul>
  </div>
</body>
</html>
