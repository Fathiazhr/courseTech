<section class="page-banner" style="background-image: url(<?= base_url(); ?>assets/images/banner4.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="banner-title">Daftar Kursus</h2>
                <div class="bread-crumbs">
                    <a href="<?= base_url('') ?>">Home</a> <span></span> Daftar Kursus
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner End -->

<!-- Course Section Start -->
<section class="coursepage-section-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="toolbar-wrapper-2">
                    <div class="toolbar-btn nav nav-tabs">
                    </div>
                    <form class="search-box" method="post" action="#">
                        <input type="search" name="s" placeholder="Cari kursus...">
                        <button type="submit"><i class="ti-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9">
                <!-- Tab Content -->
                <div class="tab-content">
                    <!-- Grid Tab -->
                    <div class="tab-pane fade show in active" id="grid" role="tabpanel">
                        <div class="row" id='data-course'>

                        </div>
                        <!-- Pagination -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="bisylms-pagination">
                                    <span class="current">01</span>
                                    <a href="#">02</a>
                                    <a class="next" href="#">next<i class="arrow_right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Pagination -->
                    </div>
                    <!-- Grid Tab -->
                </div>
                <!-- Tab Content -->
            </div>
            <div class="col-lg-3">
                <div class="course-sidebar">
                    <aside class="widget">
                        <h3 class="widget-title">Kategori</h3>
                        <ul>
                            <li><a href="#">Web Developmment</a></li>
                            <li><a href="#">Mobile Development</a></li>
                            <li><a href="#">IT &amp; Software</a></li>
                            <li><a href="#">UI/UX Design</a></li>
                            <li><a href="#">Programming Language</a></li>
                            <li><a href="#">Computer Science</a></li>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>