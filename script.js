// let mahasiswa = {
//     "nama" : "Muhamad Guruh",
//     "nim" : "18810081",
//     "email" : "muhamadguruh15@gmail.com"
// }

// console.log(JSON.stringify(mahasiswa));

// Vanilla javascript
// let xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function () {
//     if (xhr.readyState == 4 && xhr.status == 200) {
//         let mahasiswa = JSON.parse(this.responseText);
//         console.log(mahasiswa);
//     }
// }

// xhr.open('GET', 'coba.json', true);
// xhr.send();

// JQuery
$.getJSON('coba.json', function(data){
    console.log(data);
})