<!-- Footer Section Start -->
<footer class="footer-1 mt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="cta-wrapper">
          <img src="<?= base_url(); ?>assets/images/home/2.png" alt="">

          <h3>You can learn anything</h3>
          <a href="javascript:void(0)" data-toggle="modal" data-target="#modelId" onclick="handleChangeRegister()" class="bisylms-btn">Join Now</a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-3">
        <aside class="widget">
          <div class="about-widget">
            <a href="index.html"><img src="<?= base_url(); ?>assets/images/logo.png" alt=""></a>
            <p>
              Sebagai organisasi kami tanpa henti mengejar visi kami tentang dunia di mana setiap pelajar dapat mengakses pendidikan untuk membuka potensi mereka, tanpa hambatan biaya atau lokasi. </p>
            <div class="ab-social">
              <a class="fac" href="#"><i class="social_facebook"></i></a>
              <a class="twi" href="#"><i class="social_twitter"></i></a>
              <a class="you" href="#"><i class="social_youtube"></i></a>
              <a class="lin" href="#"><i class="social_linkedin"></i></a>
            </div>
          </div>
        </aside>
      </div>
      <div class="offset-lg-1"></div>
      <div class="col-lg-3 col-md-3">
        <aside class="widget">
          <h3 class="widget-title">Quick Links</h3>
          <ul>
            <li><a href="#">About</a></li>
            <li><a href="#">Faq</a></li>
            <li><a href="#">Privacy Police</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="#">Term & Conditions</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </aside>
      </div>

      <div class="col-lg-4 col-md-3">
        <aside class="widget">
          <h3 class="widget-title">Contact Info</h3>
          <ul>
            <li>
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              Jl Mangga Besar
              Jakarta Pusat, 17130
              INDONESIA
            </li>
            <li>
              <i class="fa fa-phone" aria-hidden="true"></i>
              +62 813-1706-6238
            </li>
            <li>
              <i class="fa fa-envelope" aria-hidden="true"></i>courseTech@gmail.com
            </li>
          </ul>
        </aside>
      </div>
    </div>
    <!-- Copyrigh -->
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="copyright">
          <p>© 2021 Copyright all Right Reserved</p>
        </div>
      </div>
    </div>
    <!-- Copyrigh -->
  </div>
</footer>

<!-- Back To Top -->
<a href="#" id="back-to-top">
  <i class="fal fa-angle-double-up"></i>
</a>
<!-- Back To Top -->

<!-- Start Include All JS -->
<script src="<?= base_url() ?>assets/js/jquery.js"></script>
<script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/js/jquery.appear.js"></script>
<script src="<?= base_url() ?>assets/js/owl.carousel.min.js"></script>
<script src="<?= base_url() ?>assets/js/slick.js"></script>
<script src="<?= base_url() ?>assets/js/jquery.nice-select.min.js"></script>
<script src="<?= base_url() ?>assets/js/swiper-bundle.min.js"></script>
<script src="<?= base_url() ?>assets/js/TweenMax.min.js"></script>
<script src="<?= base_url() ?>assets/js/lightcase.js"></script>
<script src="<?= base_url() ?>assets/js/jquery.plugin.min.js"></script>
<script src="<?= base_url() ?>assets/js/jquery.countdown.min.js"></script>
<script src="<?= base_url() ?>assets/js/jquery.easing.1.3.js"></script>
<script src="<?= base_url() ?>assets/js/jquery.shuffle.min.js"></script>

<script src="<?= base_url() ?>assets/js/theme.js"></script>

<script type="module">
  import {
    initializeApp
  } from "https://www.gstatic.com/firebasejs/9.5.0/firebase-app.js";
  import {
    getDatabase,
    ref,
    onValue,
    get,
    query,
    set,
    remove,
    update,
    child
  } from "https://www.gstatic.com/firebasejs/9.5.0/firebase-database.js"

  import {
    getAnalytics
  } from "https://www.gstatic.com/firebasejs/9.5.0/firebase-analytics.js";


  const firebaseConfig = {

    apiKey: "AIzaSyBzY7KEx1L8I1iNwQMPJNkyR7u7q3oWqoM",

    authDomain: "coursetech-9153e.firebaseapp.com",

    projectId: "coursetech-9153e",

    storageBucket: "coursetech-9153e.appspot.com",

    messagingSenderId: "956302217306",

    appId: "1:956302217306:web:4f31def480b13e235b0863",

    measurementId: "G-45PPTNNVW5",

    databaseURL: 'https://coursetech-9153e-default-rtdb.asia-southeast1.firebasedatabase.app/'

  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const database = getDatabase(app)

  const userLogin = {
    email: '',
    password: ''
  }

  // inisialisais database  
  const userRef = ref(database, `user`)
  const kategoriRef = ref(database, `kategori`)

  const emailEl = document.querySelector('#email')
  const passwordEl = document.querySelector('#password')
  const btnLogin = document.querySelector('button[name="login"]')

  // fungsi untuk merubah email login
  emailEl.addEventListener('keyup', e => {
    userLogin.email = e.target.value;
  })

  // fungsi untuk merubah password login
  passwordEl.addEventListener('keyup', e => {
    userLogin.password = e.target.value;
  })

  // fungsi untuk login
  btnLogin.addEventListener('click', e => {
    onValue(userRef, (snapshot) => {
      const data = snapshot.val();
      const findByEmailAndPassword = data.filter(item => item !== undefined || item !== null).find(item => item.email == userLogin.email && item.password == userLogin.password)
      if (findByEmailAndPassword) {
        localStorage.setItem('user', JSON.stringify(findByEmailAndPassword))
        localStorage.setItem('auth', true)
        window.location.replace('http://localhost/coursetech/account')
      } else {
        alert('Gagal login, email/password tidak sesuai')

      }
    })
  })

  let listKategori = [],
    idKategoriUpdate,
    buttonKategoriFor = 'simpan';
  // baca data kategori
  onValue(kategoriRef, (snapshot) => {
    const data = snapshot.val();
    let dataFilter = ''
    listKategori = data.filter(item => item !== undefined || item !== null);

    data.filter(item => item !== undefined || item !== null).forEach((item, index) => {
      dataFilter += `<tr>
      <td>${++index}</td>
      <td>${item.name}</td>
            <td>
            <a href="javascript:void(0)" name='update-kategori' data-kategori='${JSON.stringify(item)}' data-toggle="modal" data-target="#modalKategori">
            <i class="fas fa-edit text-info mr-2"></i>
            </a>
                <a href="javascript:void(0)" name='hapus-kategori' data-id="${item.id}">
                <i class="fas fa-trash text-danger"></i>
                </a> 
                </td>
                </tr>`
    })

    $('#data-kategori').html(dataFilter)

    // fungsi hapus kategori 
    $('a[name="hapus-kategori"]').click(function() {
      remove(ref(database, `kategori/${$(this).attr('data-id')}`)).then(() => {
        alert('Kategori berhasil dihapus')
      }).catch(e => alert(`kategori gagal dihapus, error : ${e}`))

    })

    // buka modal update kategori
    $('a[name="update-kategori"]').click(function() {
      let kategoriUpdate = $(this).data('kategori')
      $("input[name='nama-kategori']").val(kategoriUpdate.name)
      idKategoriUpdate = kategoriUpdate.id
      buttonKategoriFor = 'update'
    })

  })


  //buka modal tambah kategori 
  $('button[name="tambah-kategori"]').click(() => {
    buttonKategoriFor = 'simpan'
    $("input[name='nama-kategori']").val('')
  })

  // input nama kategori
  let namaKategori = ''
  $("input[name='nama-kategori']").keyup(e => {
    const {
      value
    } = e.target
    namaKategori = value
  })

  // fungsi tambah dan update kategori
  $("button[name='button-kategori']").click(() => {
    if (buttonKategoriFor === 'update') {
      update(ref(database, `kategori/${idKategoriUpdate}`), {
        name: namaKategori
      }).then(() => {
        alert('kategori berhasil diubah')
      }).catch(e => {
        alert(`error ${e}`)
      })
    } else {
      const idKategori = listKategori.length + 1
      set(ref(database, `kategori/${idKategori}`), {
        id: idKategori,
        name: namaKategori
      }).then(() => {
        alert('kategori berhasil ditambahkan')
      }).catch(e => {
        alert(`error ${e}`)
      })
    }
  })

  // menampilkan produk untuk admin
  onValue(ref(database, 'produk'), (snapshot) => {
    const data = snapshot.val();
    let htmlProduk = ''
    let listProduk = data.filter(item => item !== undefined || item !== null);

    listProduk.forEach((item, index) => {
      let kategori;
      get(child(ref(database), `kategori/${item.idKategori}`)).then((snap) => {
        htmlProduk += `<tr>
        <td>${++index}</td>
        <td>${item.name}</td>w
        <td>${item.price}</td>
        <td>${snap.val().name}</td>
        <td>${item.instructur}</td>
              <td>
              <a href="javascript:void(0)" name='update-produk' data-produk='${JSON.stringify(item)}' data-toggle="modal" data-target="#modalProduk">
              <i class="fas fa-edit text-info mr-2"></i>
              </a>
              <a href="javascript:void(0)" name='update-produk' data-produk='${JSON.stringify(item)}' data-toggle="modal" data-target="#modalProduk">
                <i class="fa fa-eye" aria-hidden="true"></i>
              </a>
                  <a href="javascript:void(0)" name='hapus-produk' data-id="${item.id}">
                  <i class="fas fa-trash text-danger"></i>
                  </a> 
                  </td>
                  </tr>`
        $('#data-produk').html(htmlProduk)
      })

    })

    // // fungsi hapus kategori 
    // $('a[name="hapus-kategori"]').click(function() {
    //   remove(ref(database, `kategori/${$(this).attr('data-id')}`)).then(() => {
    //     alert('Kategori berhasil dihapus')
    //   }).catch(e => alert(`kategori gagal dihapus, error : ${e}`))

    // })

    // // buka modal update kategori
    // $('a[name="update-kategori"]').click(function() {
    //   let kategoriUpdate = $(this).data('kategori')
    //   $("input[name='nama-kategori']").val(kategoriUpdate.name)
    //   idKategoriUpdate = kategoriUpdate.id
    //   buttonKategoriFor = 'update'
    // })

  })
  // menampilkan produk untuk customer
  onValue(ref(database, 'produk'), (snapshot) => {
    const data = snapshot.val();
    let htmlProduk = ''
    let listProduk = data.filter(item => item !== undefined || item !== null);
    listProduk.forEach((item, index) => {
      let kategori;
      get(child(ref(database), `kategori/${item.idKategori}`)).then((snap) => {
        htmlProduk += `<div class="col-lg-4 col-md-6">
                                <div class="feature-course-item-4">
                                    <div class="fcf-thumb">
                                        <img src="<?= base_url(); ?>assets/images/profile/1.jpg" alt="">
                                        <a class="enroll" href="#">Enroll Now</a>
                                    </div>
                                    <div class="fci-details">
                                        <a href="<?= base_url('/course/detail/') ?>${item.id}" class="c-cate"><i class="icon_tag_alt"></i>${snap.val().name}</a>
                                        <h4><a href="<?= base_url('/course/detail/') ?>${item.id}">${item.name}</a></h4>
                                        <div class="author">
                                            <img src="<?= base_url(); ?>assets/images/home3/course/a1.png" alt="">
                                            <a href="#">${item.instructur}</a>
                                        </div>
                                        <div class="price-rate">
                                            <div class="course-price">
                                            ${item.price > 0 ? item.price :' Free' }
                                            </div>
                                            <div class="ratings">
                                                <i class="icon_star"></i>
                                                <span>4.5 (2,420)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>`
        $('#data-course').html(htmlProduk)
      })
    })


  })
</script>

<script>
  let modalBodyFor = 'login'
  const modalBody = $('#modalBody')

  modalBody.html(`<div class="form-group">
                      <label for="">Email</label>
                      <input type="email" class="form-control" name="" id="email" aria-describedby="emailHelpId" placeholder="Masukan Email ...">
                  </div>
                  <div class="form-group">
                      <label for="">Password</label>
                      <input type="password" class="form-control" name="" id="password" aria-describedby="emailHelpId" placeholder="Masukan password ...">
                  </div>
                  <button type="button" name='login' class="btn btn-block bisylms-btn mb-3">Login</button>
                  <small class="text-muted">Belum punya akun? <a href='javascript:void(0)' onclick='handleChangeRegister()'>Daftar Sekarang</a> </small>`)

  function handleChangeLogin() {
    modalBody.html(`<div class="form-group">
                      <label for="">Email</label>
                      <input type="email" class="form-control" name="" id="name" aria-describedby="emailHelpId" placeholder="Masukan Email ...">
                  </div>
                  <div class="form-group">
                      <label for="">Password</label>
                      <input type="password" class="form-control" name="password" id="password"  placeholder="Masukan password ...">
                  </div>
                  <button type="button" name='login' class="btn btn-block bisylms-btn mb-3">Login</button>
                  <small class="text-muted">Belum punya akun? <a href='javascript:void(0)' onclick='handleChangeRegister()'>Daftar Sekarang</a> </small>`)
  }

  function handleChangeRegister() {
    modalBody.html(`
      <div class="form-group">
                      <label for="">Nama</label>
                      <input type="email" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="Masukan Nama ...">
                  </div>
      <div class="form-group">
                      <label for="">Email</label>
                      <input type="email" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="Masukan Email ...">
                  </div>
                  <div class="form-group">
                      <label for="">Password</label>
                      <input type="email" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="Masukan password ...">
                  </div>
                  <button type="button" class="btn btn-block bisylms-btn mb-3">Daftar</button>
                  <small class="text-muted">Sudah punya akun? <a href='javascript:void(0)' onclick='handleChangeLogin()' class=''>Login</a> </small>`)
  }

  // menu account
  const menuList = $('#menu-list')
  const user = JSON.parse(localStorage.getItem('user'))
  if (user) {
    if (user.role === 'admin') {
      menuList.html(`<li class="list-group-item bg-transparent border-0">
                              <a href="">Dashboard</a>
                          </li>
                          <li class="list-group-item bg-transparent border-0">
                              <a href="">Transaksi</a>
                          </li>
                          <li class="list-group-item bg-transparent border-0">
                              <a href="<?= base_url('account/kategori') ?>">Kategori</a>
                          </li>
                          <li class="list-group-item bg-transparent border-0">
                              <a href="<?= base_url('account/produk') ?>">Produk</a>
                          </li>
                          <li class="list-group-item bg-transparent border-0">
                              <a href="">Customer</a>
                          </li> <li class="list-group-item bg-transparent  border-0">
                          <a href="javascript:void(0)" onclick='handleLogout()'>Log out</a></li>`)
    } else {
      menuList.html(`<li class="list-group-item bg-transparent border-0">
                              <a href="">Materi Belajar</a>
                          </li>
                          <li class="list-group-item bg-transparent  border-0"><a href="">Transaksi</a></li>
                          <li class="list-group-item bg-transparent  border-0"><a href="javascript:void(0)" onclick='handleLogout()'>Log out</a></li>`)


    }
  }

  // fungsi login 
  const auth = JSON.parse(localStorage.getItem('auth'))
  if (!auth) {
    if (window.location.href.includes('account')) {
      window.location.replace('http://localhost/coursetech/')
    }
  }

  // fungsi logout 
  function handleLogout() {
    localStorage.clear()
    window.location.replace('http://localhost/coursetech/')
  }

  // button user navbar
  const userIcon = $('#user-button')
  if (auth) {
    userIcon.html(`<a href='<?= base_url('account') ?>' class="user-btn"><i class="ti-user"></i></a>`)
  } else {
    userIcon.html(`<a href='javascript:void(0)' data-toggle="modal" data-target="#modelId" class="user-btn"><i class="ti-user"></i></a>`)
  }
</script>

</body>


<!-- Mirrored from quomodosoft.com/html/bisy/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Dec 2021 02:24:30 GMT -->

</html>