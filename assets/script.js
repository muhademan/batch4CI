var container = document.getElementById('container');
var cari = document.getElementById('cari');
var keyword = document.getElementById('keyword');

cari.style.display = 'none';

// support gak browser untuk js yang kita buat
keyword.addEventListener('keyup',function(){
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
        // status dari 200 baru di eksekusi dengan method element 
        if(xhr.readyState == 4 && xhr.status == 200){
            container.innerHTML = xhr.responseText;
        }
    }
    // js tidak bisa base_url
    xhr.open('get','http://localhost/batch4/index.php/mahasiswa/getmahasiswa/' + keyword.value, true);
    xhr.send();
});