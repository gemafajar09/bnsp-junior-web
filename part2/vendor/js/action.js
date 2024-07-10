// menu navigator 
const tombol = document.querySelector('.tombol')
const menu = document.querySelector('.menu')

tombol.addEventListener('click', () => {
    menu.classList.toggle('aktif')
})

// slide kegiatan
const list = document.querySelector(".list");
const item = document.querySelector(".item");

const itemWidth = item.offsetWidth;

function handleClick(direction) {
    if(direction === "previous") {
        list.scrollBy({ left: -itemWidth, behavior: "smooth" });
    } else {
        list.scrollBy({ left: itemWidth, behavior: "smooth" });
    }
}

// texteditor
$(document).ready(function () {
    $("#summernote").summernote();
});

// action kirim kontak

$('#kirim').click(function(){
    var nama = $('#nama').val()
    var email = $('#email').val()
    var pesan = $('#summernote').summernote('code');

    $.ajax({
        url: 'controller/simpan.php',
        type: 'POST',
        dataType: 'JSON',
        data: {
            nama: nama,
            email: email,
            pesan: pesan
        },
        success: function(res){
            if(res){
                alert("Pesan Terkirim")
                window.location.reload()
            }else{
                alert("Terjadi Kesalahan")
            }
        }
    })
})