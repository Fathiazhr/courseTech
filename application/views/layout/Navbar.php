<!-- Preloader Icon -->
<div class="preloader">
    <div class="loaderInner">
        <div id="top" class="mask">
            <div class="plane"></div>
        </div>
        <div id="middle" class="mask">
            <div class="plane"></div>
        </div>
        <div id="bottom" class="mask">
            <div class="plane"></div>
        </div>
        <p>LOADING...</p>
    </div>
</div>
<!-- Preloader Icon -->


<!-- Header Start -->
<header style="<?= $forAct === 'account' ? 'background-color: #5838fc;' : '' ?>" class="<?= $forAct === 'account' ? '' : 'header-01' ?> sticky">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg">
                    <!-- logo Start-->
                    <a class="navbar-brand" href='<?= base_url() ?>'>
                        <img src="<?= base_url(); ?>assets/images/logo.png" alt="">
                        <img class="sticky-logo" src="<?= base_url(); ?>assets/images/logo.png" alt="">
                    </a>
                    <!-- logo End-->

                    <!-- Moblie Btn Start -->
                    <button class="navbar-toggler" type="button">
                        <i class="fal fa-bars"></i>
                    </button>
                    <!-- Moblie Btn End -->

                    <!-- Nav Menu Start -->
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav">
                            <li class="menu-item-has-children">
                                <a href="<?= base_url() ?>">Home</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="<?= base_url('course') ?>">Courses</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Nav Menu End -->

                    <!-- User Btn -->
                    <div id="user-button">
                    </div>
                    <!-- User Btn -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->


<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Masuk CourseTech</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="modalBody">

            </div>
        </div>
    </div>
</div>