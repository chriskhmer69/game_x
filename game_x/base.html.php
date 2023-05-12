<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.2.3/morph/bootstrap.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game-X</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand navbar-dark bg-dark">
            <div class="container-fluid">

                <a class="navbar-brand" href="index.php">Game-X</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor02">
                    <ul class="navbar-nav me-auto">

                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Accueil</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="games.php">Jeux</a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>
    </header>

    <div class="container">
        <h1 class="my-4 shadow p-3 text-center bg-secondary">
            <?= $title ?>
        </h1>

        <?= $content ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>