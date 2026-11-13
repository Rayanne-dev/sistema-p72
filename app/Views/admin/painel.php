<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel administrativo</title>
    <style>
    /* Fundo da página */
    body {
        margin: 0;
        background-color: #f8f5ff;
        font-family: Arial, sans-serif;
        color: #2c163f;
    }

    /* Barra superior do menu administrativo */
    nav, header {
        background-color: #dcd0ff;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 15px;
        padding: 15px 20px;
        box-shadow: 0 2px 8px rgba(59, 30, 84, 0.1);
    }

    /* Links do menu (Painel, Conteúdos) */
    nav a, header a {
        color: #3b1e54;
        text-decoration: none;
        font-size: 15px;
        font-weight: bold;
        padding: 8px 16px;
        border-radius: 6px;
        transition: all 0.3s ease;
    }

    nav a:hover, header a:hover {
        background-color: #c5b0ff;
        color: #240046;
    }

    /* Link ativo */
    nav a.active, header a.active {
        background-color: #8e44ad;
        color: #ffffff;
    }

    /* Ajusta o formulário do botão Sair para ficar na mesma linha */
    nav form, header form {
        margin: 0;
        display: inline-block;
    }

    /* Estiliza o botão Sair */
    nav button, header button {
        background-color: #f8d7da;
        color: #842029;
        border: none;
        font-size: 15px;
        font-weight: bold;
        padding: 8px 16px;
        border-radius: 6px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    nav button:hover, header button:hover {
        background-color: #dc3545;
        color: #ffffff;
    }
    /* Centraliza o título, subtítulo e o conteúdo da página */
    body {
        text-align: center;
    }

    h1 {
        color: #3b1e54;
        margin-top: 60px;
        margin-bottom: 15px;
        font-size: 32px;
    }

    p {
        color: #5b3a78;
        font-size: 18px;
    }
</style>
</head>
<body>
    <nav class="navbar">
    <a href="<?= site_url('admin') ?>" class="nav-link active">
        Painel
    </a>
    <a href="<?= site_url('conteudos') ?>" class="nav-link">
        Conteúdos
    </a>
    <form action="<?= site_url('admin/sair') ?>" method="post" class="logout-form">
        <?= csrf_field() ?>
        <button type="submit" class="nav-link logout-button">
            Sair
        </button>
    </form>
    </nav>
    <main class="container">
    <h1>Painel administrativo</h1>
    <p>Escolha uma opção no menu para continuar.</p>
    </main>
</body>
</html>
