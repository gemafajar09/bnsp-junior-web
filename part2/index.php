<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mengimplementasikan User Interface</title>
  <!-- plugin bootstrap -->
  <link
  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
  rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
  crossorigin="anonymous"
  />
  <!-- plugin text editor -->
  <link
  href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css"
  rel="stylesheet"
  />
  <!-- import style css -->
	<link rel="stylesheet" href="vendor/css/style.css">
	<link rel="stylesheet" href="vendor/css/beranda.css">
	<link rel="stylesheet" href="vendor/css/tentang.css">
	<link rel="stylesheet" href="vendor/css/kegiatan.css">
	<link rel="stylesheet" href="vendor/css/berita.css">
	<link rel="stylesheet" href="vendor/css/kontak.css">
</head>
<body>
        <!-- navbar -->
        <nav class="navbar">
      <div class="container">
        <a href="#" class="logo">Latihan</a>

        <ul class="menu">
          <li><a href="#beranda">Beranda</a></li>
          <li><a href="#tentang">Tentang Kami</a></li>
          <li><a href="#kegiatan">Kegiatan</a></li>
          <li><a href="#berita">Berita</a></li>
          <li><a href="#kontak">Kontak</a></li>
        </ul>

        <div class="tombol">&#9776;</div>
      </div>
    </nav>
    <!-- /navbar -->

    <!-- content -->

    <!-- beranda -->
    <div class="main" id="beranda">
      <div class="content-image">
        <img src="public/img/gambar1.jpg" alt="" />
      </div>
      <div class="content-title">
        <div class="title-atas">MEDIATAMA ACADEMY</div>
        <div class="title-bawah">BACK TO SCHOOL</div>
        <div class="garis"></div>
        <div class="deskripi-beranda">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit
          voluptatem, laboriosam ad nesciunt fuga magnam inventore velit enim
          dolore esse! Architecto veritatis magnam facere a saepe ratione quasi
          exercitationem nesciunt.
        </div>
      </div>
    </div>
    <!-- beranda -->

    <!-- tentang kami -->
    <div class="main" id="tentang">
      <center>
        <h2>Tentang Kami</h2>
        <div class="divider-green"></div>
      </center>

      <div class="main-content">
        <div class="container-content">
          <img class="banner" src="public/img/school3.jpg" alt="" />
          <div class="deskripsi-content">
            <h2>Mediatama Academy</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere
              unde quidem delectus cumque quam, ullam consectetur atque ea
              accusamus reprehenderit voluptate ipsa accusantium dolorem
              similique voluptatibus quos recusandae numquam! Inventore!
            </p>
            <a href="" class="baca-deskripsi">Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
    <!-- tentang kami -->

    <!-- kegiatan -->
    <div class="main" id="kegiatan">
      <center>
        <h2>Kegiatan</h2>
        <div class="divider-white"></div>
      </center>

      <div class="list-wrapper">
        <ul class="list">
          <li class="item">
            <div class="d-flex flex-column">
                <div class="w-100 bg-cover" style="background-image: url(https://picsum.photos/200); height: 250px;"></div>
                <div class="text-secondary p-3">
                    <h3>Judul</h3>
                    <p>Keterangan</p>
                </div>
            </div>
          </li>
          <li class="item">
            <div class="d-flex flex-column">
                <div class="w-100 bg-cover" style="background-image: url(https://picsum.photos/200); height: 250px;"></div>
                <div class="text-secondary p-3">
                    <h3>Judul</h3>
                    <p>Keterangan</p>
                </div>
            </div>
          </li>
          <li class="item">
            <div class="d-flex flex-column">
                <div class="w-100 bg-cover" style="background-image: url(https://picsum.photos/200); height: 250px;"></div>
                <div class="text-secondary p-3">
                    <h3>Judul</h3>
                    <p>Keterangan</p>
                </div>
            </div>
          </li>
          <li class="item">
            <div class="d-flex flex-column">
                <div class="w-100 bg-cover" style="background-image: url(https://picsum.photos/200); height: 250px;"></div>
                <div class="text-secondary p-3">
                    <h3>Judul</h3>
                    <p>Keterangan</p>
                </div>
            </div>
          </li>
          <li class="item">
            <div class="d-flex flex-column">
                <div class="w-100 bg-cover" style="background-image: url(https://picsum.photos/200); height: 250px;"></div>
                <div class="text-secondary p-3">
                    <h3>Judul</h3>
                    <p>Keterangan</p>
                </div>
            </div>
          </li>
          
        </ul>
        <button
          onclick="handleClick('previous')"
          class="button button-previous"
          type="button"
        >
          ➜
        </button>
        <button
          onclick="handleClick('next')"
          class="button button-next"
          type="button"
        >
          ➜
        </button>
      </div>
    </div>
    <!-- kegiatan -->

    <!-- berita -->
    <div class="main" id="berita">
      <center>
        <h2>Berita</h2>
        <div class="divider-green"></div>
      </center>

      <div class="container-berita">
        <div class="berita-utama">
          <img class="gambar-berita" src="public/img/school3.jpg" alt="" />

          <h2>Title Sekolah</h2>

          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Praesentium officiis cum placeat illo nemo in sed fugiat ea numquam
            repellat, reprehenderit iure id vel quibusdam deleniti eligendi
            ducimus saepe provident?
          </p>

          <a href="" class="baca-berita">Selengkapnya</a>
        </div>

        <div class="list-berita">
          <div class="content-berita">
            <img class="gambar-berita-list" src="public/img/school3.jpg" alt="" />
            <div class="title-berita">
              <h3>BERITA HARI INI</h3>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero
                asperiores autem id tempora aperiam ut? Perspiciatis dolorum
                cupiditate nihil, non consectetur eligendi at aliquam, impedit
                laborum possimus rem soluta consequatur.
              </p>
            </div>
          </div>
          <div class="content-berita">
            <img class="gambar-berita-list" src="public/img/school3.jpg" alt="" />
            <div class="title-berita">
              <h3>BERITA HARI INI</h3>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero
                asperiores autem id tempora aperiam ut? Perspiciatis dolorum
                cupiditate nihil, non consectetur eligendi at aliquam, impedit
                laborum possimus rem soluta consequatur.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- berita -->

    <!-- kontak -->
    <div class="main" id="kontak">
      <center>
        <h2>Kontak</h2>
        <div class="divider-white"></div>
      </center>

      <div class="align-center">
        <div class="card">
          <div class="list-data">
            <input type="text" id="nama" class="form-control" placeholder="Masukan Nama" />
            <input type="email" id="email" class="form-control" placeholder="Masukan Email" />
          </div>
          <br />
          <textarea
            class="pesan"
            class="textarea"
            id="summernote"
            name="pesan"
            placeholder="Masukan Pesan"
          ></textarea>
          <div class="btn-box">
            <button id="kirim" class="btn btn-info text-white" type="button">Kirim</button>
          </div>
        </div>
      </div>
    </div>
    <!-- kontak -->
    <!-- /content -->

    <!-- bisini logic -->
    
    <!-- plugin jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- import script javascript -->
	  <script src="vendor/js/action.js"></script>
    <!-- plugin bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

    <!-- plugin text editor -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

</body>
</html>