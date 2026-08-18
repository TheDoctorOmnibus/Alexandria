<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Revolução de 1930</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

:root {
            --vinho-alexandria:   #8b1e2d;
            --vinho-escuro:       #5e1220;
            --dourado-alexandria: #d4af37;
            --dourado-claro:      #f0d060;
            --bege-fundo:         #f5efe6;
            --bege-card:          #fdf8f2;
            --preto-contraste:    #1a1a1a;
            --cinza-destaque:     #dee0e3;
            --cinza-texto:        #555;
            --branco:             #ffffff;
        }

html,
body {
    width: 100%;
    height: 100%;
    font-family: Arial, Helvetica, sans-serif;
    background: var(--branco);
}

.topbar {
    width: 100%;
    height: 43px;

    background: var(--vinho-alexandria);

    display: flex;
    align-items: center;
    justify-content: space-between;

    color: white;

    padding: 0 8px;

    box-shadow: 0 1px 4px rgba(0, 0, 0, 0.25);

    position: fixed;
    top: 0;
    left: 0;

    z-index: 1000;
}

.topbar-left {
    height: 100%;

    display: flex;
    align-items: center;
}

.menu-button {
    width: 28px;
    height: 28px;

    display: flex;
    align-items: center;
    justify-content: center;

    border: 1px solid rgba(255,255,255,0.8);
    border-radius: 3px;

    background: transparent;
    color: white;

    margin-right: 20px;

    cursor: pointer;
}

.menu-button i {
    font-size: 17px;
}

.page-title {
    font-size: 10px;
    font-weight: 600;

    white-space: nowrap;
}

.topbar-right {
    display: flex;
    align-items: center;

    height: 100%;

    gap: 10px;
}

.topbar-icon {
    width: 24px;
    height: 30px;

    display: flex;
    align-items: center;
    justify-content: center;

    background: transparent;
    border: none;

    color: white;

    cursor: pointer;
}

.topbar-icon i {
    font-size: 13px;
}

.page {
    width: 100%;
    min-height: 100vh;

    padding-top: 43px;

    display: flex;
}

.sidebar {
    width: 220px;
    min-width: 220px;

    min-height: calc(100vh - 43px);

    border-right: 1px solid #ddd;

    padding: 7px 2px;

    background: #fff;
}

.back-button {
    height: 36px;

    display: flex;
    align-items: center;

    padding-left: 5px;

    border-bottom: 1px solid #999;

    font-size: 10px;
    font-weight: 600;

    color: var(--preto-contraste);

    cursor: pointer;
}

.back-button i {
    font-size: 18px;
    margin-right: 14px;
}


/* LISTA */

.sidebar-title {
    display: flex;
    align-items: center;
    justify-content: space-between;

    padding: 7px 4px 4px;

    color: var(--vinho-alexandria);

    font-size: 9px;
    font-weight: 700;
}

.sidebar-tools {
    display: flex;
    gap: 12px;

    color: #777;
}

.sidebar-search {
    width: 100%;
    height: 24px;

    border: 1px solid #ddd;
    border-radius: 3px;

    padding: 0 7px;

    font-size: 8px;

    margin-bottom: 5px;
}

.lesson-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.lesson-item {
    min-height: 31px;

    display: flex;
    align-items: center;

    padding: 3px 5px;

    font-size: 9px;

    cursor: pointer;

    border-radius: 4px;
}

.lesson-item.active {
    background: #f3ede5;
}

.lesson-number {
    width: 18px;
    height: 18px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 50%;

    background: var(--vinho-alexandria);
    color: white;

    font-size: 9px;
    font-weight: bold;

    margin-right: 7px;
}

.lesson-name {
    flex: 1;
}

.lesson-check {
    width: 8px;
    height: 8px;

    border: 1px solid #ddd;

    border-radius: 50%;
}

.content {
    flex: 1;

    min-width: 0;

    padding: 44px 32px 60px 38px;

    background: var(--branco);
}

.breadcrumb-area {
    display: flex;
    align-items: center;

    margin-bottom: 18px;
}

.breadcrumb {
    display: flex;
    align-items: center;
}

.breadcrumb-item {
    display: flex;
    align-items: center;

    color: #b1954a;
    font-size: 9px;
    font-weight: 600;
}

.breadcrumb {
    display: flex;
    align-items: center;
}

.breadcrumb-item {
    display: flex;
    align-items: center;

    color: #b1954a;
    font-size: 9px;
    font-weight: 600;
}

.breadcrumb-item + .breadcrumb-item::before {
    content: "›";

    color: #555;

    font-size: 16px;
    line-height: 1;

    padding: 0 10px;

    display: flex;
    align-items: center;
}

.next-button {
    margin-left: auto;

    background: #f1cc54;

    border: none;
    border-radius: 4px;

    color: var(--preto-contraste);

    font-size: 9px;
    font-weight: 600;

    padding: 7px 11px;

    cursor: pointer;
}

.next-button i {
    margin-left: 5px;
}

.content h1 {
    font-size: 11px;

    font-weight: 700;

    margin-bottom: 17px;
}

.content h2 {
    font-size: 11px;

    font-weight: 700;

    margin-bottom: 20px;
}

.content p {
    max-width: 100%;

    font-size: 10px;

    line-height: 1.45;

    color: #222;

    text-align: justify;

    margin-bottom: 0;
}

.section-divider {
    width: 100%;

    border: none;
    border-top: 1px solid #888;

    margin: 62px 0 44px;
}

@media (max-width: 768px) {

    .sidebar {
        width: 190px;
        min-width: 190px;
    }

    .content {
        padding: 30px 20px;
    }

    .page-title {
        font-size: 9px;
    }

}

@media (max-width: 576px) {

    .sidebar {
        display: none;
    }

    .content {
        padding: 25px 18px;
    }

}
    </style>

</head>

<body>

    <?php
        include("../FRONT/includes/header.html");
    ?>


    <main class="page">

        <aside class="sidebar">

            <div class="back-button">

                <i class="bi bi-arrow-left"></i>

                <span>
                    Voltar para as videoaulas
                </span>

            </div>


            <div class="sidebar-title">

                <span>
                    Lista de Conteúdos
                </span>

                <div class="sidebar-tools">

                    <i class="bi bi-gear-fill"></i>

                    <i class="bi bi-box-arrow-right"></i>

                </div>

            </div>


            <input
                type="text"
                class="sidebar-search"
                placeholder="Buscar conteúdo">


            <ul class="lesson-list">


                <li class="lesson-item active">

                    <span class="lesson-number">
                        1
                    </span>

                    <span class="lesson-name">
                        Era Vargas: Revolução de 1930
                    </span>

                    <span class="lesson-check"></span>

                </li>


                <li class="lesson-item">

                    <span class="lesson-number">
                        2
                    </span>

                    <span class="lesson-name">
                        Era Vargas: Governo Provisório
                    </span>

                    <span class="lesson-check"></span>

                </li>


                <li class="lesson-item">

                    <span class="lesson-number">
                        3
                    </span>

                    <span class="lesson-name">
                        Era Vargas: Governo Constitucional
                    </span>

                    <span class="lesson-check"></span>

                </li>


                <li class="lesson-item">

                    <span class="lesson-number">
                        4
                    </span>

                    <span class="lesson-name">
                        Era Vargas: Estado Novo
                    </span>

                    <span class="lesson-check"></span>

                </li>


                <li class="lesson-item">

                    <span class="lesson-number">
                        5
                    </span>

                    <span class="lesson-name">
                        Era Vargas: Fim da Era Vargas
                    </span>

                    <span class="lesson-check"></span>

                </li>


                <li class="lesson-item">

                    <span style="width:18px;">
                        <i class="bi bi-clipboard"></i>
                    </span>

                    <span class="lesson-name">
                        Lista de Exercícios 1
                    </span>

                    <span class="lesson-check"></span>

                </li>


                <li class="lesson-item">

                    <span style="width:18px;">
                        <i class="bi bi-clipboard"></i>
                    </span>

                    <span class="lesson-name">
                        Lista de Exercícios 2
                    </span>

                    <span class="lesson-check"></span>

                </li>


                <li class="lesson-item">

                    <span style="width:18px;">
                        <i class="bi bi-clipboard"></i>
                    </span>

                    <span class="lesson-name">
                        Lista de Exercícios 3
                    </span>

                    <span class="lesson-check"></span>

                </li>


            </ul>

        </aside>

        <section class="content">

            <div class="breadcrumb-area">

                <nav aria-label="breadcrumb">

                    <ol class="breadcrumb">

                        <li class="breadcrumb-item">
                            História do Brasil
                        </li>

                        <li class="breadcrumb-item">
                            Era Vargas
                        </li>

                        <li class="breadcrumb-item active">
                            1. Revolução de 1930
                        </li>

                    </ol>

                </nav>


                <button class="next-button">

                    Próximo

                    <i class="bi bi-chevron-right"></i>

                </button>

            </div>

            <h1>
                1. Revolução de 1930
            </h1>


            <p>
                Entenda como ocorreu o golpe de Estado cívico-militar
                que depôs o presidente da República Washington Luís em
                24 de outubro de 1930 e impediu a posse do presidente
                eleito Júlio Prestes, encerrando o período conhecido
                como República Velha.
            </p>


            <hr class="section-divider">

            <h2>
                1. Introdução
            </h2>


            <p>
                A Revolução de 1930 representa um ponto de inflexão
                fundamental na história política brasileira, marcando
                o colapso da República Oligárquica e o início de um
                novo ciclo político sob a liderança de Getúlio Vargas.
                Este movimento cívico-militar, que culminou na deposição
                do presidente Washington Luís em 24 de outubro de 1930
                e impediu a posse do presidente eleito Júlio Prestes,
                reconfigurou profundamente as estruturas de poder
                político e econômico do país, abrindo caminho para a
                Era Vargas e as transformações que caracterizariam o
                Brasil do século XX.
            </p>


            <hr class="section-divider">

            <h2>
                2. Contexto Histórico: A Primeira República e Suas Contradições
            </h2>


            <p>
                A Primeira República brasileira, estabelecida em 1889
                após a proclamação da República, foi construída sobre
                um sistema político que concentrou o poder nas mãos
                das oligarquias estaduais, particularmente as de São
                Paulo e Minas Gerais. Este período, que se estenderia
                até 1930, ficaria conhecido como República Oligárquica,
                caracterizando-se pela exclusão política de amplos
                setores da população e pela manipulação sistemática
                dos processos eleitorais.
                <br><br>

                A estrutura política da Primeira República baseava-se
                na chamada Política dos Governadores, estabelecida
                durante o governo de Campos Sales (1898-1902). Este
                sistema funcionava através de um pacto entre o governo
                federal e os governos estaduais, garantindo a reeleição
                do presidente em exercício e a vitória dos candidatos
                governistas nas eleições.
                <br><br>

                O Congresso Nacional, composto por representantes das
                oligarquias locais, raramente questionava as decisões
                do Executivo, criando um sistema de poder altamente
                centralizado nas mãos do presidente e das elites
                estaduais.
            </p>


        </section>

    </main>

</body>

</html>