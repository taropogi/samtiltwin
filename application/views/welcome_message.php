<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>?v=<?= random_string('alnum', 16) ?>">
</head>

<body class='my-body-class another-body-class'>


    <div class="bxo bxo_lander container-fluid p-0">
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
                    <!-- /.bxo-hl -->
                </div>
                <!-- <div class="hidden-xs-down my-sm-3 row"></div>
                <div class="hidden-sm-down my-md-3 row"></div> -->
                <div class="row">
                    <div class="bxo-content col-md-8 col-lg-4 offset-md-2 offset-lg-4 text-center">

                        <form id="register_form" class="form">

                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Please enter your email">
                            <div id="no_email" class="error">
                                <img src="https://d2i5a4y6yksdm0.cloudfront.net/images/arrow-up.png" class="arrow-up" />
                                Please enter your email
                            </div>
                            <div id="invalid_email" class="error">
                                <img src="https://d2i5a4y6yksdm0.cloudfront.net/images/arrow-up.png" class="arrow" />
                                Invalid Email
                            </div>


                            <input type="hidden" name="redirect_url"
                                value="https://tracker.tiltwin.com/nz/redirect-lp/3065" />
                            <input type="hidden" name="page" value="086" />

                            <input type="hidden" name="affiliateLink" value="wildz" />
                            <input type="hidden" name="templateNumber" value="511" />

                            <div class="button form-group btns-group btn btn-primary d-block w-100" type="submit"
                                name="submit" id="submit_btn">
                                Claim it! </div>


                            <div class="checkbox-container">
                                <div id="accept_terms" class="error error2">Please agree to the terms and
                                    conditions</br>
                                    <img src="https://d2i5a4y6yksdm0.cloudfront.net/images/arrow-down.png"
                                        class="arrow-down" />
                                </div>


                                <p>
                                    <input type="checkbox" name="terms" value="1" />
                                    I'm over 18 years of age and accept these <a class="terms-link" href="#">terms and
                                        conditions</a> Keep me updated on all latest offers, rewards and promotions

                                    <input type="hidden" name="validate_terms" value="1" />
                                </p>
                            </div>

                        </form>


                        <?php
                        $this->load->view('modals/terms');
                        ?>


                        <!--<div class="loading-layer" style="display:none"></div> -->





                    </div>
                    <!-- /.bxo-content -->
                </div>
            </div>
        </div>

        <?php

        $this->load->view('segments/footer');
        ?>

    </div>




</body>

</html>