<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if (isset($page_title)) { ?>
        <title><?php echo ($page_title) ?></title>
    <?php } else { ?>
        <title>Doctor Who | Admin panel</title>
    <?php } ?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="/doctor-who/adm">Hlavná</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/doctor-who/adm/doctor-list.php">Zoznam Doktorov</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/doctor-who/adm/enemy-list.php">Zoznam nepriateľov</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/doctor-who/adm/qna-list.php">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/doctor-who/index.php">Na stránku</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Odhlasiť sa</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="mt-3">