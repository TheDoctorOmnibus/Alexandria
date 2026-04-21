<?php
$nome = $_GET['nome'] ?? '';
$email = $_GET['email'] ?? '';
$assunto = $_GET['assunto'] ?? '';
$mensagem = $_GET['mensagem'] ?? '';
$status = $_GET['status'] ?? '';
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
    background-color: #000 !important;
    color: #fff !important;
}

        .contact-container {
            max-width: 1100px;
            margin: 80px auto;
        }

        h1 {
            text-align: center;
            margin-bottom: 10px;
            color: #fff !important;
        }

        .subtitle {
            text-align: center;
            color: #fff !important;
            margin-bottom: 40px;
        }

        .form-select {
            background-color: #111 !important;
            color: #fff !important;
            border: 1px solid #333 !important;
        }

        .form-select::placeholder {
            color: #fff !important;
        }

        .form-control {
            background-color: #111 !important;
            color: #fff !important;
            border: 1px solid #333 !important; 
        }

        .form-control::placeholder {
            color: #fff !important;
        }

        .form-control:focus,
        .form-select:focus {
            background-color: #111;
            color: #fff;
            border-color: #a00000;
            box-shadow: none;
        }

        .divider {
            border-right: 1px solid #333;
        }

        .btn-custom {
            background-color: #a00000;
            color: white;
            padding: 12px 25px;
            border-radius: 8px;
            border: none;
            transition: 0.3s;
        }

        .btn-custom:hover {
            background-color: #c00000;
        }

        .contact-box {
            padding-left: 30px;
        }

        .contact-box p {
            margin-bottom: 10px;
            color: #ccc;
        }

        @media (max-width: 768px) {
            .divider {
                border-right: none;
                border-bottom: 1px solid #333;
                margin-bottom: 30px;
                padding-bottom: 30px;
            }

            .contact-box {
                padding-left: 0;
            }
        }
    </style>
</head>

<body>

<?php include("../index_alexandria/includes/navbar.html"); ?>

<?php if ($status == "sucesso"): ?>
    <div class="alert alert-success">Mensagem enviada com sucesso!</div>
<?php elseif ($status == "erro"): ?>
    <div class="alert alert-danger">Erro ao enviar. Tente novamente.</div>
<?php endif; ?>

<div class="container contact-container">

    <h1>Entre em contato</h1>
    <p class="subtitle">
        Tem alguma dúvida ou sugestão? Preencha o formulário abaixo.
    </p>

    <div class="row">

        <!-- FORM -->
        <form method="POST" action="processa.php" class="col-md-7 divider">

            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Nome completo</label>
                    <input type="text" name="nome" class="form-control" placeholder="Flávio Belisário" value="<?= htmlspecialchars($nome) ?>">
                </div>

                <div class="col">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="leaoxiv@vatican" value="<?= htmlspecialchars($email) ?>">
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Assunto</label>
                <select name="assunto" class="form-select">
                    <option <?= $assunto=="Plano Pro"?"selected":"" ?>>Plano Pro</option>
                    <option <?= $assunto=="reclamação"?"selected":"" ?>>reclamação</option>
                    <option <?= $assunto=="Dúvida"?"selected":"" ?>>Dúvida</option>
                    <option <?= $assunto=="Suporte"?"selected":"" ?>>Suporte</option>
                    <option <?= $assunto=="Plano Báscio"?"selected":"" ?>>Plano Báscio</option>
                    <option <?= $assunto=="Plano Premium"?"selected":"" ?>>Plano Premium</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Mensagem</label>
                <textarea name="mensagem" class="form-control" rows="5"><?= $mensagem ?></textarea>
            </div>

            <button type="submit" class="btn-custom">
                Enviar mensagem ✈
            </button>

        </form>

        <!-- CONTATO -->
        <div class="col-md-5 contact-box d-flex align-items-center">
            <diV>
                <h2 class="mb-3">Outras formas de contato</h5>
                <p class="fs-4">📞 +55 11 40028922</p>
                <p class="fs-4">📧 alexandriaofc@gmail.com</p>
                <p class="fs-4">⏰ Segunda a sexta, 9h às 18h</p>
            </div>
        </div>

    </div>

</div>

<?php include("../index_alexandria/includes/footer.html"); ?>

</body>
</html>