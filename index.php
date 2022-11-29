<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de E-mail</title>
</head>
<body>  
  <h4>Envio de E-mail</h4>  
    <form action="enviar.php" method="POST">
      <div>
        <div>
          <label>Nome</label>
          <input type="text" name="Nome" required><br><br>
        </div>
        <div>
          <label>E-mail</label>
          <input type="email" name="Email" required><br><br>
        </div>
      <div>
          <label>Assunto</label>
          <input type="text" name="Assunto" required><br><br>
        </div>
        <div>
          <label>Mensagem</label>
          <textarea name="Mensagem" cols="30" rows="4" required></textarea><br><br>
        </div>
        <div >
          <input type="submit" value="Enviar">
        </div>
      </div>
    </form>
  </body>
</html>