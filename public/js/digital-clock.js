function displayTime(){
    var dateTime = new Date();
    var hrs = dateTime.getHours();
    var min = dateTime.getMinutes();
    var sec = dateTime.getSeconds();

    hrs = (hrs < 10) ? "0" + hrs : hrs;
    min = (min < 10) ? "0" + min : min;
    sec = (sec < 10) ? "0" + sec : sec;

    document.getElementById('hours').innerHTML = hrs;
    document.getElementById('minutes').innerHTML = min;
    document.getElementById('secons').innerHTML = sec;
}
setInterval(displayTime, 1000);

var daytoday = ["Ahad", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"];
var bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
var today = new Date();
var date = today.getDate();
var day = today.getDay();
var month = today.getMonth();
var years = today.getFullYear();

date = (date < 10) ? "0" + date : date;
mot = parseInt(month + 1);
mon = (mot < 10) ? "0" + mot : mot;

const tanggal = `${years}-${mon}-${date}`;
// console.log(tanggal);



function HariIni(){
    document.getElementById('tanggal').innerHTML = date;
    document.getElementById('hari').innerHTML = daytoday[day];
    document.getElementById('bulan').innerHTML = bulan[month];
    document.getElementById('tahun').innerHTML = years;
}
setInterval(HariIni, 1000);

const tampilKota = document.querySelector('.judul-kota');
tampilKota.textContent = localStorage.namakota;

function getJadwalShalat(){
    fetch('https://api.banghasan.com/sholat/format/json/jadwal/kota/'+ parseInt(localStorage.idkota) + '/tanggal/' + tanggal)
        .then(response => response.json())
        .then(data => {
            const jadwal = data.jadwal.data;
            document.getElementById('imsak').textContent = jadwal.imsak;
            document.getElementById('subuh').textContent = jadwal.subuh;
            document.getElementById('terbit').textContent = jadwal.terbit;
            document.getElementById('dzuhur').textContent = jadwal.dzuhur;
            document.getElementById('ashar').textContent = jadwal.ashar;
            document.getElementById('maghrib').textContent = jadwal.maghrib;
            document.getElementById('isya').textContent = jadwal.isya;
        })
}

getJadwalShalat();

const inputSearch = document.getElementById('input');
const kotaKota = document.querySelector('.kota-list');

inputSearch.addEventListener('keyup', function(){
    const valueSearch = inputSearch.value.length;

    if(valueSearch > 0) {
        kotaKota.classList.remove('hidden-list');
        fetch('https://api.banghasan.com/sholat/format/json/kota')
        .then(response => response.json())
        .then(response => {
            const kota = response.kota;
            let listKota = '';

            kota.forEach(k => {
                listKota += `<li><p data-idkota="${k.id}" id="nama-kota">${k.nama}</p></li>`;
            })

            const namaKota = document.querySelector('.kota-list');
            namaKota.innerHTML = listKota;
            
            const isiKota = document.querySelectorAll('#nama-kota');
            isiKota.forEach(kota => {

                const filterText = inputSearch.value.toLowerCase();
                const itemText = kota.firstChild.textContent.toLowerCase();


                if(itemText.indexOf(filterText) != -1){
                    kota.setAttribute("style", "display: block");
                }else {
                    kota.setAttribute("style", "display: none !important");
                }

                

                kota.addEventListener('click', function(){
                    const idKota = this.dataset.idkota;
                    const judulKota = this.textContent;
                    window.localStorage.setItem('idkota', idKota);
                    window.localStorage.setItem('namakota', judulKota);
                    namaKota.classList.add('hidden-list');
                    inputSearch.value = '';
                    location.reload();
                })
            })
        })
    }
    else{
        kotaKota.classList.add('hidden-list');
    }
})