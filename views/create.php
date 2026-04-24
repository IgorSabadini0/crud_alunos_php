<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Aluno</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="index.php?action=store" method="POST" >
        <input type="text" name="nome" placeholder="Nome">

        <input type="email" name="email" placeholder="e-mail">

        <input type="number" name="idade" placeholder="Idade">

        <button type="submit"> Salvar </button>
    </form>
</body>
</html>