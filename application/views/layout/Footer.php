<!-- Footer Section Start -->
<footer class="footer-1 mt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="cta-wrapper">
          <img src="<?= base_url(); ?>assets/images/home/2.png" alt="">

          <h3>You can learn anything</h3>
          <a href="javascript:void(0)" class="bisylms-btn">Join Now</a>
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
    <!-- Copyright -->
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

    const DLKat = listKategori.map((item, index)=>{
      return `<option value="${item.id}">${item.name}</option>`
    });
    DLKat.unshift(`<option value="">Silahkan Pilih Kategori Produk</option>`);

    console.log(DLKat)

    $("#produkkategori").html(DLKat.toString().replaceAll(",",""))

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

  $('button[name="tambah-produk"]').click(() => {
    buttonProdukFor = 'simpan'
    $("input[name='name']").val('')
    $("input[name='instructur']").val('')
    $("input[name='price']").val('')
    $("input[name='idKategori']").val('')
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

  $("button[name='button-produk']").click(() => {
    if (buttonProdukFor === 'update') {
      update(ref(database, `produk/${idProdukUpdate}`), {
        name: namaKategori
      }).then(() => {
        alert('kategori berhasil diubah')
      }).catch(e => {
        alert(`error ${e}`)
      })
    } else {
      // const idProduk = listProduk.length + 1
      // listProduk.map((item, index)=>{
      //   console.log(item)
      // })
      const idProdukArr = []
      dataProdukAdmin.data.map((item, index)=>{
        idProdukArr.push(item.id)
      })
      const sortIdProduk = idProdukArr.sort();
      const lastId = sortIdProduk[sortIdProduk.length - 1] + 1;
      set(ref(database, `produk/${lastId}`), {
        id: lastId,
        idKategori: $("#produkkategori").val(),
        instructur: $("#produkinstructur").val(),
        name: $("#produkname").val(),
        price: $("#produkprice").val(),
      }).then(() => {
        alert('kategori berhasil ditambahkan')
        $("#modalProduk").modal('hide')
      }).catch(e => {
        alert(`error ${e}`)
      })
    }
  })

  // menampilkan produk untuk admin

  let listProduk = [],
    idProdukUpdate,
    buttonProdukFor = 'simpan';

    var dataProdukAdmin = {}

  onValue(ref(database, 'produk'), (snapshot) => {
    const data = snapshot.val();
    let htmlProduk = ''
    listProduk = data.filter(item => item !== undefined || item !== null);
    dataProdukAdmin.data = listProduk;
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
                                        <a class="enroll" name='buy-course' href="javascript:void(0)" data-course='${JSON.stringify({...item,kategori:snap.val().name})}'>Beli</a>
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
                                            ${item.price > 0 ? formatRupiah(item.price ):' Free' }
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

        let products;
        let transactions;
        $('a[name="buy-course"]').click(function() {
          const course = $(this).data('course');
          if (auth) {
            // fungsi menampilkan list transaksi
            onValue(ref(database, 'transaksi'), (snap) => {
              if (snap.val() === null) {
                transactions = snap.val()
              } else {
                transactions = snap.val().filter(item => item !== undefined && item !== null)
              }
            })

            onValue(ref(database, 'produk-user'), (snap) => {
              if (snap.val() === null) {
                products = snap.val()
              } else {
                products = snap.val().filter(item => item !== undefined && item !== null)
              }
            })

            if (products === null || products === undefined || transactions === null || transactions === undefined) {
              set(ref(database, `transaksi/1`), {
                idProduk: course.id,
                idUser: user.id,
                tanggalPembelian: new Date(Date.now()).toLocaleDateString(),
                id: 1
              })
              set(ref(database, `produk-user/1`), {
                idUser: user.id,
                id: 1,
                instructur: course.instructur,
                kategori: course.kategori,
                namaProduk: course.name
              })
              alert('Pembelian Berhasil')
            } else {
              set(ref(database, `transaksi/${transactions[transactions.length - 1].id + 1}`), {
                idProduk: course.id,
                idUser: user.id,
                tanggalPembelian: new Date(Date.now()).toLocaleDateString(),
                id: transactions[transactions.length - 1].id + 1
              })
              set(ref(database, `produk-user/${products[products.length - 1].id + 1}`), {
                idUser: user.id,
                id: products[products.length - 1].id + 1,
                instructur: course.instructur,
                kategori: course.kategori,
                namaProduk: course.name
              })
              alert('Pembelian Berhasil')
            }
          } else {
            $('#modelId').modal('show');
          }
        })
      })
    })
  })

  // registrasi
  const userRegis = {
    name: '',
    email: '',
    password: ''
  }

  $('input[name="regis-name"]').keyup(e => {
    userRegis.name = e.target.value
  })

  $('input[name="regis-email"]').keyup(e => {
    userRegis.email = e.target.value
  })

  $('input[name="regis-password"]').keyup(e => {
    userRegis.password = e.target.value
  })

  let users = [];
  onValue(userRef, snap => {
    users = snap.val().filter(item => item !== undefined && item !== null)
  })
  // fungsi regis
  $('#button-regis').click(e => {
    if (users.length > 0) {
      set(ref(database, `user/${users.length + 1}`), {
        ...userRegis,
        id: users.length + 1,
        role: 'customer'
      }).then(() => {
        alert('Berhasil registrasi')
      }).catch(e => {
        alert(`error ${e}`)
      })
    }
  })

  // fungsi update profile
  $('input[name="input-user-name"]').keyup((e) => {
    userRegis.name = e.target.value
  })
  $('input[name="input-user-password"]').keyup(e => {
    userRegis.password = e.target.value

  })
  $('#button-update-profile').click(e => {
    update(ref(database, `user/${user.id}`), {
      ...user,
      name: userRegis.name,
      password: userRegis.password
    }).then(() => {
      alert('Berhasil update')
      localStorage.setItem('user', JSON.stringify({
        ...user,
        name: userRegis.name,
        password: userRegis.password
      }))
    }).catch(e => {
      alert(`error ${e}`)
    })

  })


  // menampilkan kursus yang dipilih customer
  onValue(ref(database, 'produk-user'), (snapshot) => {
    const data = snapshot.val();
    let htmlProduk = ''
    if (data === null || data === undefined) {
      htmlProduk += `<div class='d-flex w-100 mt-3 flex-column justify-content-center align-items-center'>
      <img src='<?= base_url() ?>assets/images/home/course/4.png' />
        <h4>Anda belum berlangganan</h4>
      </div>`
    } else {
      listProduk = data.filter(item => item !== undefined || item !== null);
      listProduk.forEach((item, index) => {
        let kategori;
        htmlProduk += `<div class="col-lg-6 col-md-6">
                                  <div class="feature-course-item-4">
                                      <div class="fcf-thumb">
                                          <img src="<?= base_url(); ?>assets/images/profile/1.jpg" alt="">
                                          <a class="enroll" name='remove-course' href="javascript:void(0)" data-course='${JSON.stringify({...item})}'>Berhenti Langganan</a>
                                      </div>
                                      <div class="fci-details">
                                          <a href="<?= base_url('/course/detail/') ?>${item.id}" class="c-cate"><i class="icon_tag_alt"></i>${item.kategori}</a>
                                          <h4><a href="<?= base_url('/course/detail/') ?>${item.id}">${item.namaProduk}</a></h4>
                                          <div class="author">
                                              <img src="<?= base_url(); ?>assets/images/home3/course/a1.png" alt="">
                                              <a href="#">${item.instructur}</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>`
      })
    }
    $('#data-materi').html(htmlProduk)

    $('a[name="remove-course"]').click(function() {
      const course = $(this).data('course');

      remove(ref(database, `produk-user/${course.id}`)).then(() => {
        alert('Berhasil berhenti berlangganan')
      }).catch(e => alert(`error : ${e}`))
    })
  })

  // menampilkan transaksi per customer
  onValue(ref(database, 'transaksi'), (snapshot) => {
    const data = snapshot.val();
    let htmlTransaksi = ''
    if (data !== null) {
      let listTransaksi = []
      if (user.role === 'admin') {
        listTransaksi = data.filter(item => item !== undefined || item !== null);
      } else {
        listTransaksi = data.filter(item => item !== undefined || item !== null && item.idUser === user.id)
      }

      listTransaksi.forEach((item, index) => {
        get(child(ref(database), `produk/${item.idProduk}`)).then((snap) => {
          htmlTransaksi += `<tr>
          <td>${++index}</td>
          <td>${snap.val().name}</td>
          <td>${snap.val().price}</td>
          <td>${item.tanggalPembelian}</td>
                <td>
                    <a href="javascript:void(0)" name='hapus-transaksi' data-id="${item.id}">
                    <i class="fas fa-trash text-danger"></i>
                    </a> 
                    </td>
                    </tr>`
          $('#data-transaksi').html(htmlTransaksi)

          $('a[name="hapus-transaksi"]').click(function() {
            const idTransaksi = $(this).data('id');
            remove(ref(database, `transaksi/${idTransaksi}`)).then(() => {
              alert('transaksi berhasil dihapus')
            }).catch(e => alert(`error : ${e}`))
          })
        })

      })
    }



  })
</script>

<script>
  let modalBodyFor = 'login'
  const formRegis = $('#form-register').addClass('d-none')
  const formLogin = $('#form-login')

  function handleChangeRegister() {
    formLogin.removeClass('d-block').addClass('d-none');
    formRegis.addClass('d-block');
  }

  function handleChangeLogin() {
    formRegis.removeClass('d-block').addClass('d-none');
    formLogin.addClass('d-block');
  }

  // menu account
  const menuList = $('#menu-list')
  const user = JSON.parse(localStorage.getItem('user'))
  if (user) {
    $('#user-name').text(user.name)
    $('input[name="input-user-name"]').val(user.name)
    $('input[name="input-user-email"]').val(user.email)
    if (user.role === 'admin') {
      menuList.html(`<li class="list-group-item bg-transparent border-0">
                              <a href="">Dashboard</a>
                          </li>
                          <li class="list-group-item bg-transparent border-0">
                              <a href="<?= base_url('account/transaksi') ?>">Transaksi</a>
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
      menuList.html(`
      <li class="list-group-item bg-transparent  border-0"><a href="<?= base_url('account/profile') ?>">Profil</a></li>
      <li class="list-group-item bg-transparent border-0">
                              <a href="<?= base_url('account/materi') ?>">Materi Belajar</a>
                              </li>
                              <li class="list-group-item bg-transparent  border-0"><a href="<?= base_url('account/transaksi') ?>">Transaksi</a></li>
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

  // format rupiah
  function formatRupiah(angka) {
    var number_string = String(angka).replace(/[^,\d]/g, '').toString(),
      split = number_string.split(','),
      sisa = split[0].length % 3,
      rupiah = split[0].substr(0, sisa),
      ribuan = split[0].substr(sisa).match(/\d{3}/gi);

    // tambahkan titik jika yang di input sudah menjadi angka ribuan
    if (ribuan) {
      let separator = sisa ? '.' : '';
      rupiah += separator + ribuan.join('.');
    }

    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    return 'Rp. ' + rupiah;
  }

  // menampilkan halaman dashboard user
  $('#welcome-user').text(`Selamat datang ${user.name}`)
</script>

</body>


<!-- Mirrored from quomodosoft.com/html/bisy/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Dec 2021 02:24:30 GMT -->

</html>