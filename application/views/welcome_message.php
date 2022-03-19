<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>?v=<?= random_string('alnum', 16) ?>">
    <script src="https://unpkg.com/vue@3"></script>

</head>

<body class='my-body-class another-body-class'>

    <div class="bxo bxo_lander container-fluid p-0" id="app">
        <header class="bxo-header col-md-12 mb-4 pt-3 pt-md-4 text-center">
            <div class="bxo-logo">
                <img src="<?= base_url('assets/images/logo.png') ?>" alt="Logo">
            </div>

            <!-- /.bxo-logo -->
        </header>

        <!-- /.bxo-header -->
        <div class="bxo-main mb-4">
            <div class="container">
                <div class="mb-4 row" style="margin-bottom: 55px !important;">
                    <div class="bxo-hl mx-auto text-center">
                        <h2>EXCLUSIVE OFFER
                        </h2>
                        <h1 class="anim-upDown">UP TO 200</h1>
                        <p class="m-0 text-muted"></p>
                        <p></p>
                        <div style="height:42px">
                            <h2>FREE SPINS</h2>
                        </div>
                    </div>
                </div>
                <!-- <div class="hidden-xs-down my-sm-3 row"></div>
                <div class="hidden-sm-down my-md-3 row"></div> -->
                <div class="row">
                    <div class="bxo-content col-md-8 col-lg-4 offset-md-2 offset-lg-4 text-center">

                        <?php
                        $this->load->view('segments/register_form');
                        $this->load->view('modals/terms');
                        ?>


                    </div>

                </div>
            </div>
        </div>

        <?php

        $this->load->view('segments/footer');
        ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="/assets/js/app.js"></script>

</body>

</html>