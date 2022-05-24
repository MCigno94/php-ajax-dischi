<?php

include __DIR__ . '/db.php';

?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dischi</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        img {
            max-width: 100%;
        }


        /* HEADER */

        header {
            height: 60px;
            background-color: #2E3A46;
        }
        .logo.cols {
            height: 100%;
            display: flex;
            align-items: center;
        }
        .logo.cols > img {
            display: inline-block;
            width: 35px;
            aspect-ratio: 1/1;
            margin-left: calc((60px - 35px) / 2);
        }
            

        /* MAIN */

        main {
            height: calc(100vh - 60px);
            background-color: #1E2D3B;
        }
        .container {
            padding: 2rem 0;
        }
        .discs {
            max-height: calc(100vh - 60px - 4rem);
            overflow-y: auto;
        }
        .row {
            margin: 0;
        }
                        
        .cols > .card {
            background-color: #2E3A46;
        }
        .card > img {
            aspect-ratio: 1/1;
            padding: 0.75rem;
        }
        .card > h6 {
            font-size: 18px;
        }
        .card > .card-text {
            color: #808080;
            font-size: 15px;
        }
    </style>

</head>
<body>
    
    <header>
        <div class="container-fluid h-100">
            <div class="row row-cols-2 justify-content-between align-items-center h-100">
                <div class="logo cols">
                    <img src="../src/assets/img/Spotify.png" alt="">
                </div>
                <!-- /.logo -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </header>
    <main>
        <div class="container">
            <section class="discs">
                <div class="row row-cols-2 row-cols-md-3 row-cols-xxl-5">
                    <?php foreach ($all_disc as $disc) : ?>
                    <div class="cols gy-3 text-white text-center">
                        <div class="card rounded-0 border-0 h-100">
                            <img src="<?= $disc['poster'] ?>" class="card-img-top" :alt="disc.title">
                            <div class="card-body pt-0">
                                <h6 class="card-title text-uppercase">
                                    <?= $disc['title'] ?>
                                </h6>
                                <div class="card-text">
                                    <div class="author">
                                        <?= $disc['author'] ?>
                                    </div>
                                    <!-- /.author -->
                                    <div class="year">
                                        <?= $disc['year'] ?>
                                    </div>
                                    <!-- /.year -->
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.cols -->
                    <?php endforeach; ?>
                </div>
                <!-- /.row -->
            </section>
            <!-- /.discs -->
        </div>
        <!-- /.container-md -->
    </main>
    
</body>

</html>