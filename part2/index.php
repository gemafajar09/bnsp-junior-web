<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mengimplementasikan User Interface</title>
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
    
            <div class="tombol">
                &#9776;
            </div>
    
        </div>
    </nav>
    <!-- /navbar -->
  
    <!-- content -->

    <!-- beranda -->
    <div class="main" id="beranda">
        <div class="content-image">
            <img src="public/img/gambar1.jpg" alt="">
        </div>
        <div class="content-title">
            <div class="title-atas">MEDIATAMA ACADEMY</div>
            <div class="title-bawah">BACK TO SCHOOL</div>
            <div class="garis"></div>
            <div class="deskripi-beranda">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit voluptatem, laboriosam ad nesciunt fuga magnam inventore velit enim dolore esse! Architecto veritatis magnam facere a saepe ratione quasi exercitationem nesciunt.
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
                <img class="banner" src="public/img/school3.jpg" alt="">
                <div class="deskripsi-content">
                    <h2>Mediatama Academy</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere unde quidem delectus cumque quam, ullam consectetur atque ea accusamus reprehenderit voluptate ipsa accusantium dolorem similique voluptatibus quos recusandae numquam! Inventore!</p>
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
                <li class="item"><div class="content">Item 1</div></li>
                <li class="item"><div class="content">Item 2</div></li>
                <li class="item"><div class="content">Item 3</div></li>
                <li class="item"><div class="content">Item 4</div></li>
                <li class="item"><div class="content">Item 5</div></li>
            </ul>
            <button onclick="handleClick('previous')" class="button button-previous" type="button">➜</button>
            <button onclick="handleClick('next')" class="button button-next" type="button">➜</button>
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
                <img class="gambar-berita" src="public/img/school3.jpg" alt="">

                <h2>Title Sekolah</h2>

                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium officiis cum placeat illo nemo in sed fugiat ea numquam repellat, reprehenderit iure id vel quibusdam deleniti eligendi ducimus saepe provident?</p>

                <a href="" class="baca-berita">Selengkapnya</a>
            </div>

            <div class="list-berita">
                <div class="content-berita">
                    <img  class="gambar-berita-list" src="public/img/school3.jpg" alt="">
                    <div class="title-berita">
                        <h3>BERITA HARI INI</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero asperiores autem id tempora aperiam ut? Perspiciatis dolorum cupiditate nihil, non consectetur eligendi at aliquam, impedit laborum possimus rem soluta consequatur.</p>
                    </div>
                </div>
                <div class="content-berita">
                    <img  class="gambar-berita-list" src="public/img/school3.jpg" alt="">
                    <div class="title-berita">
                        <h3> BERITA HARI INI</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero asperiores autem id tempora aperiam ut? Perspiciatis dolorum cupiditate nihil, non consectetur eligendi at aliquam, impedit laborum possimus rem soluta consequatur.</p>
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
                <form action="controller/simpan.php" method="post">
                    <div class="list-data">
                        <input type="text" name="nama" class="input" placeholder="Masukan Nama">
                        <input type="email" name="email" class="input" placeholder="Masukan Email">
                    </div>
                    <div class="pesan">
                        <textarea class="textarea" name="pesan" placeholder="Masukan Pesan"></textarea>
                    </div>
                    <div class="btn-box">
                        <button class="button-style" name="simpan" type="submit">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- kontak -->
    <!-- /content -->

    <!-- bisini logic -->
    
    <!-- import script javascript -->
	<script src="vendor/js/action.js"></script>
 
</body>
</html>