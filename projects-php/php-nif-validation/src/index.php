<?php
include_once './service/NIFValidationService.php';

use src\service\NIFValidationService;

$userNIF = filter_input(INPUT_POST, 'user_nif');
$moreInfo = filter_input(INPUT_POST, 'more_info');
$moreInfoHTML = null;

if ($userNIF) {
    $nifValidationService = new NIFValidationService($userNIF);

    if ($userNIF && $moreInfo) {
        $moreInfoHTML = $nifValidationService->validateOnline();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VALIDADOR DE NIF | BY RAZIEL RODRIGUES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-gray">

    <nav class="navbar navbar-dark bg-danger">
        <div class="container">
            <a class="navbar-brand" href="#">
                VALIDA NIF
            </a>
        </div>
    </nav>

    <main class="container mt-4">
        <section>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                <div class="mb-3">
                    <label for="user_nif" class="form-label">Digite seu NIF</label>
                    <input name="user_nif" maxlength="9" minlength="9" type="text" class="form-control" id="user_nif" aria-describedby="user_nif">
                </div>
                <div class="mb-3 form-check d-none">
                    <input name="more_info" type="checkbox" class="form-check-input" id="more_info">
                    <label class="form-check-label" for="more_info">Quero mais informações</label>
                </div>
                <button type="submit" class="btn btn-primary">validar</button>
            </form>
        </section>

        <section class="mt-4">
            <?php if (isset($nifValidationService)) { ?>
                <?php if ($nifValidationService->validate()) { ?>
                    <h2 class="mt-3">NIF Válido</h2>
                    <h5 class="mt-3">Tipo: <?= $nifValidationService->getNIFtype() ?></h5>
                    <?php if ($moreInfoHTML) { ?>
                        <article class="mt-3">
                            <?= $moreInfoHTML ?>
                        </article>
                    <?php } ?>
                <?php } else { ?>
                    <h2 class="mt-3">NIF INVÁLIDO</h2>
                <?php }  ?>
            <?php }  ?>
            <p> O número de identificação fiscal (NIF) tem como finalidade identificar em Portugal uma entidade fiscal, contribuinte, por exemplo, em declarações de IRS ou outros impostos ou transações financeiras.
            </p>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>