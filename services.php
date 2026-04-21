<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="bg-black">
    <?php include("../index_alexandria/includes/navbar.html") ?>
    <div class="text-center">
        <h1 class="text-light">Nossos Planos</h1>
        <p class="fs-6 text-light">Escolha o plano ideal para você</p>
    </div>
    <div class="row justify-content-around p-3">
        <div class="col card m-3 bg-black border-dark" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title text-light text-center">Básico</h5>
                <h6 class="card-subtitle mb-2 fs-2 text-center" style="color: #a5080a">R$17</h6>
                <p class="fs-6 text-center text-light border-bottom p-3">/mês</p>
                <p class="card-text text-light">✅ Acesso ao material completo da plataforma.</p>
                <p class="card-text text-light">✅ Acesso aos aulões da plataforma ao vivo.</p>
                <p class="card-text text-light border-bottom pb-3">✅ Vasto banco de questões.</p>
                <div class="d-flex justify-content-center">
                <a href="../index_alexandria/contato.php">
                <button class="btn" style="border: 2px solid #740018; background-color: #000; color: #fff;"> Entrar em contato</button>
                </a>
            </div>
            </div>
        </div>
        <div class="col card m-3 bg-black p-3 border-danger" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title text-light text-center">Pro</h5>
                <h6 class="card-subtitle mb-2 fs-2 text-center" style="color: #a5080a">R$27</h6>
                <p class="fs-6 text-center text-light border-bottom p-3">/mês</p>
                <p class="card-text text-light">✅ Tudo do plano Básico.</p>
                <p class="card-text text-light">✅ Simulados todo final de tema.</p>
                <p class="card-text text-light border-bottom pb-3">✅ Acesso aos aulões gravados e prioridade nas dúvidas.</p>
                <div class="d-flex justify-content-center">
                <a href="../index_alexandria/contato.php">
                <button class="btn" style="background-color: #740018; color: #fff;"> Entrar em contato</button>
                </a>
                </div>
            </div>
        </div>
        <div class="col card m-3 bg-black border-dark" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title text-light text-center">Premium</h5>
                <h6 class="card-subtitle mb-2 fs-2 text-center" style="color: #a5080a">R$37</h6>
                <p class="fs-6 text-center text-light border-bottom p-3">/mês</p>
                <p class="card-text text-light">✅ Tudo do plano Básico e Pro.</p>
                <p class="card-text text-light">✅ IA para tirar duvidas e preparar planos de estudos.</p>
                <p class="card-text text-light border-bottom pb-3">✅ Aulas particulares.</p>
                <div class="d-flex justify-content-center">
                <div class="d-flex justify-content-center">
                <a href="../index_alexandria/contato.php">
                <button class="btn" style="border: 2px solid #740018; background-color: #000; color: #fff;"> Entrar em contato</button>
                </a>
            </div>
            </div>
        </div>
    </div>
    <?php include("../index_alexandria/includes/footer.html") ?>
</body>
</html>