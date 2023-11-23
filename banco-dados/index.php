
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>meuFormulario</title>
</head>
<body>
 
    <section>
                   
        <form action="" method="GET" id="meuFormulario">
            <h2>Formulario</h2>
 
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome">
           
            <label for="telefone">Telefone</label>
            <input type="number" id="telefone" name="telefone">
           
            <label for="email">Email</label>
            <input type="email"  id="email" name="email" >
           
            <label for="mensagem">Mensagem</label>
            <textarea id="mensagem" name="Mensagem" rows="10" maxlength="150"></textarea>
           
            <input type="submit" value="Enviar">
           
        </form>
    </section>
   
</body>
</html>