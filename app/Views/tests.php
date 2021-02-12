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

    <?php foreach ($articles as $row) {
        echo $row->article_author;
        echo $row->article_created_at;
        echo $row->article_title;
        echo $row->article_header;
        echo $row->article_text;
    } ?>

    <?php $this->endSection(); ?>