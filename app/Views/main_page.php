    <?php

    use App\Controllers\MainPage;

    $this->extend('layouts/main');
    $this->section('content'); ?>

    <div class="container">

        <!-- LOGO -->

        <div class="logo">
            <div>
                <h1 class="logo-name">gamerZ</h1>
            </div>
        </div>

        <!-- MENU -->

        <nav class="fill">
            <div class="menus">
                <ul>
                    <div class="row">

                        <!-- NEWS -->
                        <div class="col-sm">
                            <li>
                                <a href="#" id="news">Hírek</a>
                            </li>
                        </div>

                        <!-- TESTS -->
                        <div class="col-sm">
                            <li>
                                <a href="#" id="tests">Tesztek</a>
                            </li>
                        </div>

                        <!-- FORUM -->
                        <div class="col-sm">
                            <li>
                                <a href="<?= base_url('/forum') ?>">Fórum</a>
                            </li>
                        </div>

                        <!-- LOGIN -->
                        <div class="col-sm" id="login-button">
                            <li>
                                <a href="" onclick="loginButtonClicked()">Bejelentkezés</a>
                            </li>
                        </div>

                        <button class="btn btn-primary" onclick="openModal()" type="button" data-bs-toggle="modal" data-bs-target="#login-button">Launch modal</button>

                        <div class="modal" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Close</button>
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
                </ul>
            </div>
        </nav>

        <!-- PLATFORMS -->

        <nav class="fill">
            <div class="platforms">
                <div class="row">
                    <ul>
                        <div class="platforms p-3 mb-2 bg-dark text-dark">

                            <?php foreach ($platforms as $row) : ?>

                                <li class="platforms-writeout bg-dark <?php echo $row->platform_name . "-" . $row->platform_type; ?>">
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

        <!-- ARTICLES -->

        <div id="articles">

            <?php foreach ($articles as $row) : ?>
                <div id="article">
                    <div class="article-title">
                        <?php
                        echo $row->article_title;
                        echo " ";
                        echo "<br>";
                        ?>
                    </div>

                    <div class="article-author">
                        <?php
                        echo $row->article_author;
                        echo " ";
                        ?>
                    </div>

                    <div class="article-created-at">
                        <?php
                        echo $row->article_created_at;
                        echo " ";
                        echo "<br>";
                        ?>
                    </div>

                    <div class="platform">
                        <?php
                        echo $row->platform;
                        echo " ";
                        echo "<br>";
                        ?>
                    </div>

                    <div class="article-header">
                        <?php
                        echo $row->article_header;
                        echo " ";
                        echo "<br>";
                        ?>
                    </div>

                    <div class="article-text">
                        <?php
                        echo $row->article_text;
                        echo " ";
                        echo "<br>";
                        ?>
                    </div>

                    <a href="<?php echo base_url('/news/' . $row->id); ?>" class="btn btn-primary">Tovább</a>

                </div>

            <?php endforeach; ?>
        </div>



        <div class="carousel">

        </div>

    </div>

    <!-- JS added to use Bootstrap Modal for login button 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"></script>-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script>
        var myModal = new bootstrap.Modal(document.getElementById('#login-button'));

        function openModal() {
            myModal.show();

        }
    </script>

    <?php $this->endSection(); ?>