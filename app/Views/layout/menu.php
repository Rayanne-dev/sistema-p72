<style>
    /* Estiliza a barra de navegação em lilás */
    .navbar {
        background-color: #dcd0ff; /* Lilás claro no fundo */
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        gap: 15px;
        padding: 15px 20px;
        font-family: Arial, sans-serif;
    }

    /* Estiliza todos os links do menu */
    .navbar .nav-link {
        color: #3b1e54;            /* Texto roxo escuro para boa leitura */
        text-decoration: none;
        font-size: 15px;
        font-weight: bold;
        padding: 8px 14px;
        border-radius: 5px;
        transition: background-color 0.3s, color 0.3s;
    }

    /* Efeito ao passar o mouse */
    .navbar .nav-link:hover {
        background-color: #c5b0ff; /* Lilás médio ao passar o mouse */
        color: #240046;
    }

    /* Destaca a página que está aberta no momento */
    .navbar .nav-link.active {
        background-color: #8e44ad; /* Lilás vibrante no item ativo */
        color: #ffffff;            /* Texto branco no botão ativo */
    }
</style>

<nav class="navbar">
<a href="<?=site_url('home') ?>" class="nav-link <?= url_is('home') ? 'active':''?>">Home</a>
<a href="<?=site_url('Contato') ?>" class="nav-link <?= url_is('Contato') ? 'active':''?>">Contato</a>
<a href="<?=site_url('FaleComigo') ?>" class="nav-link <?= url_is('FaleComigo') ? 'active':''?>">FaleComigo</a>
<a href="<?=site_url('Habilidades') ?>" class="nav-link <?= url_is('Habilidades') ? 'active':''?>">Habilidades</a>
<a href="<?=site_url('PlanosFuturos') ?>" class="nav-link <?= url_is('PlanosFuturos') ? 'active':''?>">PlanosFuturos</a>
<a href="<?=site_url('QuemSou') ?>" class="nav-link <?= url_is('QuemSou') ? 'active':''?>">QuemSou</a>
<a href="<?=site_url('conteudos') ?>" class="nav-link <?= url_is('conteudos') ? 'active':''?>">PainelAdministrativo</a>
</nav>
