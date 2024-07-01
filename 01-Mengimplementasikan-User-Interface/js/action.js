const tombol = document.querySelector('.tombol')
const menu = document.querySelector('.menu')

tombol.addEventListener('click', () => {
    menu.classList.toggle('aktif')
})

// slider
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