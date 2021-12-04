<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 " style="flex-grow:1">
                <div class="contact--info-area contact-form">
                    <div class="d-flex justify-content-center align-items-center">
                        <img src="<?= base_url() ?>assets/images/blog/p1.jpg" alt="" class="rounded-circle">
                    </div>
                    <h6 class="mt-3 text-center" id='user-name'>

                    </h6>
                    <ul class="list-group bg-transparent" id="menu-list">


                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                <div class="contact-form">
                    <?php $this->load->view($content); ?>
                </div>
            </div>
        </div>
    </div>
</section>