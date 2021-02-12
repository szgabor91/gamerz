<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/colors.css">

    <title><?= (isset($meta_title) ? $meta_title : 'Gamerz'); ?></title>

    <!-- jQuery import CDN -->
    <script src="assets/js/scripts.js"></script>

</head>

<body>

    <!-- LOGO -->

    <div class="logo">
        <div>
            <h1 class="logo-name">gamerZ</h1>
        </div>
    </div>

    <!-- MENU -->

    <nav class="fill">
        <div class="menus">
            <div class="row">
                <div class="col-sm">
                    <a href="#" id="news">Hírek</a>
                </div>

                <div class="col-sm">
                    <a href="#" id="tests">Tesztek</a>
                </div>

                <div class="col-sm">
                    <a href="<?= base_url('/forum') ?>">Fórum</a>
                </div>

                <div class="col-sm" id="login-button">
                    <a href="" onclick="loginButtonClicked()">Bejelentkezés</a>
                </div>

                <button class="btn btn-primary" onclick="openModal()" type="button" data-bs-toggle="modal" data-bs-target="#login-button">Launch modal</button>

                <div class="modal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Modal body text goes here.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </nav>

    <!-- PLATFORMS -->

    <nav class="fill">
        <div class="platforms">
            <div class="row">
                <ul>
                    <div class="platforms p-3 mb-2 bg-dark text-dark">

                        <?php foreach ($platforms as $row) : ?>

                            <li class="platforms-writeout bg-dark">
                                <a href="">
                                    <?php
                                    echo $row->platform_name;
                                    echo " ";
                                    echo $row->platform_type;
                                    ?>
                                </a>
                            </li>

                        <?php endforeach; ?>
                    </div>
                </ul>
            </div>
        </div>
    </nav>