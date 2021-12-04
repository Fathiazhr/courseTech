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
                <div id='form-login'>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="" id="email" aria-describedby="emailHelpId" placeholder="Masukan Email ...">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="" id="password" aria-describedby="emailHelpId" placeholder="Masukan password ...">
                    </div>
                    <button type="button" name='login' class="btn btn-block bisylms-btn mb-3">Login</button>
                    <small class="text-muted">Belum punya akun? <a href='javascript:void(0)' onclick='handleChangeRegister()'>Daftar Sekarang</a> </small>
                </div>
                <div id="form-register">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input required type="text" class="form-control" name="regis-name" id="" aria-describedby="emailHelpId" placeholder="Masukan Nama ...">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input required type="email" class="form-control" name="regis-email" id="" aria-describedby="emailHelpId" placeholder="Masukan Email ...">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input required type="password" class="form-control" name="regis-password" id="" aria-describedby="emailHelpId" placeholder="Masukan password ...">
                    </div>
                    <button type="button" id="button-regis"' class="btn btn-block bisylms-btn mb-3">Daftar</button>
                    <small class="text-muted">Sudah punya akun? <a href=' javascript:void(0)' onclick='handleChangeLogin()' class=''>Login</a> </small>
                </div>
            </div>
        </div>
    </div>
</div>