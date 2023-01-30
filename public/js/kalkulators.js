let imgkal = document.getElementById('imgkal');
// var pilihzakat = document.getElementById('pilihanzakat');
var options = document.getElementsByClassName('kal-options');
let kalList = document.querySelector('.kal-list');
let fitrah = document.querySelector('.zakatfitrah');
let penghasilan = document.querySelector('.zakatpenghasilan');
let maal = document.querySelector('.zakatmaal');

imgkal.onclick = function(){
    kalList.classList.toggle('on1');
    if(kalList.toggleAttribute('on1')){
        imgkal.src = "icons/44.png";
    }
    else{
        imgkal.src = "icons/43.png";
    }
}

// for (option of options){
//     option.onclick = function(){
//         pilihzakat.innerHTML = this.textContent;
//     }
// }

// function show(anything){
//     document.getElementById('pilihzakat').value = anything;
// }

function pilihzakat(){
    let p = document.getElementById('pilihzakat').value;
    if(p == "Zakat Maal"){
        maal.style.display = "block";
        penghasilan.style.display = "none";
        fitrah.style.display = "none";
    }
    else if(p == 'Zakat Penghasilan'){
        penghasilan.style.display = "block";
        fitrah.style.display = "none";
        maal.style.display = "none";
    }
    else{
        fitrah.style.display = "block";
        penghasilan.style.display = "none";
        maal.style.display = "none";
    }
}
    