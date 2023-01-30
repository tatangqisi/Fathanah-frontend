let namaDoa = document.querySelectorAll('.kategori-doa');
let doa = document.querySelectorAll('.nama-doa');

Array.from(namaDoa).forEach(function(el) { // updated `e` to `el`
    el.addEventListener("click", (e) => { 
        let dropdown = e.currentTarget.nextElementSibling;
        dropdown.classList.toggle("on"); 
    });
});