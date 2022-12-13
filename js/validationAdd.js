const form = document.getElementById("form");
const NIM = document.getElementById("nim");
const nama = document.getElementById("nama");
const alamat = document.getElementById("alamat");
const telepon = document.getElementById("telepon");

var checkerNIM, checkerNama, checkerAlamat, checkerTelepon;
checkerNIM = checkerNama = checkerAlamat = checkerTelepon = false;

NIM.addEventListener("keyup", function (e) {
    if (NIM.value === "") {
        // tampilkan error dan tambahkan class error
        setError(NIM, "NIM tidak boleh kosong");
        checkerNIM = false;
    } else if (cekSimbol(NIM.value)) {
        // tampilkan error dan tambahkan class error
        setError(NIM, "NIM tidak boleh mengandung simbol");
        checkerNIM = false;
    } else if (NIM.value.length != 10) {
        // tampilkan error dan tambahkan class error
        setError(NIM, "NIM harus berisi 10 digit angka");
        checkerNIM = false;
    } else {
        // tambahkan class success
        setSuccess(NIM);
        checkerNIM = true;
    }
});

nama.addEventListener("keyup", function (e) {
    if (nama.value === "") {
        // tampilkan error dan tambahkan class error
        setError(nama, "Nama tidak boleh kosong");
        checkerNama = false;
    } else if (cekSimbol(nama.value)) {
        // tampilkan error dan tambahkan class error
        setError(nama, "Nama tidak boleh mengandung simbol");
        checkerNama = false;
    } else if (cekAngka(nama.value)) {
        // tampilkan error dan tambahkan class error
        setError(nama, "Nama tidak boleh mengandung angka");
        checkerNama = false;
    } else if (nama.value.length < 2) {
        // tampilkan error dan tambahkan class error
        setError(nama, "Nama harus lebih dari 1 huruf");
        checkerNama = false;
    } else if (!cekNama(nama.value)) {
        // tampilkan error dan tambahkan class error
        setError(nama, "Nama tidak boleh diawali atau diakhiri spasi");
        checkerNama = false;
    } else {
        // tambahkan class success
        setSuccess(nama);
        checkerNama = true;
    }
});

telepon.addEventListener("keyup", function (e) {
    if (telepon.value === "") {
        // tampilkan error dan tambahkan class error
        setError(telepon, "No. Telepon tidak boleh kosong");
        checkerTelepon = false;
    } else if (telepon.value.length < 3) {
        // tampilkan error dan tambahkan class error
        setError(telepon, "No. Telepon harus terdiri dari 3 hingga 12 angka");
        checkerTelepon = false;
    } else if (cekSimbol(telepon.value)) {
        // tampilkan error dan tambahkan class error
        setError(telepon, "No. Telepon tidak boleh mengandung simbol");
        checkerTelepon = false;
    } else if (cekHuruf(telepon.value)) {
        // tampilkan error dan tambahkan class error
        setError(telepon, "No. Telepon tidak boleh mengandung huruf");
        checkerTelepon = false;
    } else if (cekWhiteSpace(telepon.value)) {
        // tampilkan error dan tambahkan class error
        setError(telepon, "No. Telepon tidak boleh mengandung white space");
        checkerTelepon = false;
    } else if (!cekTelepon(telepon.value)) {
        // tampilkan error dan tambahkan class error
        setError(telepon, "No. Telepon tidak valid");
        checkerTelepon = false;
    } else {
        // tambahkan class success
        setSuccess(telepon);
        checkerTelepon = true;
    }
});

alamat.addEventListener("keyup", function (e) {
    if (alamat.value === "") {
        // tampilkan error dan tambahkan class error
        setError(alamat, "Alamat tidak boleh kosong");
        checkerAlamat = false;
    } else if (alamat.value.length < 2) {
        // tampilkan error dan tambahkan class error
        setError(alamat, "Alamat harus lebih dari 1 karakter");
        checkerAlamat = false;
    } else if (!cekAlamat(alamat.value)) {
        // tampilkan error dan tambahkan class error
        setError(alamat, "Alamat tidak boleh diawali atau diakhiri spasi");
        checkerAlamat = false;
    } else {
        // tambahkan class success
        setSuccess(alamat);
        checkerAlamat = true;
    }
});

form.addEventListener("submit", (e) => {
    if (checkerNIM == false || checkerNama == false || checkerTelepon == false || checkerAlamat == false) {
        // cegah agar form tidak kosong saat dikirim
        e.preventDefault();
    }
});

function setError(input, pesan) {
    // .form-control
    const formControl = input.parentElement;
    const small = formControl.querySelector("small");

    // tambahkan pesan error di dalam small
    small.innerText = pesan;

    // tambahkan class error (ubah warna kolom form menjadi merah)
    formControl.className = "form-control error";
}

function setSuccess(input) {
    const formControl = input.parentElement; // .form-control

    // tambahkan class success (ubah warna kolom form menjadi hijau)
    formControl.className = "form-control success";
}

// Regex:
// /.../    = scope dari regex
// /^       = parameter karakter pertama
// $/       = parameter karakter terakhir
// []       = scope karakter
// [^...]   = scope untuk mengecualikan karakter
// -        = untuk range/interval karakter
// \s       = parameter white space
// /.../g   = global, parameter untuk mencocokkan keseluruhan string
// /.../i   = case-insensitive, parameter untuk mengabaikan huruf besar atau kecil

function cekNama(nama) {
    // ^[^\s]       = karakter pertama tidak boleh white space
    // [a-z\s]*     = karakter berikutnya harus huruf dan boleh mengandung white space
    // [^\s]$       = karakter terakhir tidak boleh white space
    let regex = /^[^\s][a-z\s]*[^\s]$/gi;
    return nama.match(regex);
}

function cekAlamat(alamat) {
    // ^[^\s]       = karakter pertama tidak boleh white space
    // [a-z0-9\s/"':._,()#&-]*  = karakter berikutnya berupa huruf atau angka, serta boleh mengandung white space dan simbol (/"':._,()#&-)
    // [^\s]$       = karakter terakhir tidak boleh white space
    let regex = /^[^\s][a-z0-9\s/"':._,()#&-]*[^\s]$/gi;
    return alamat.match(regex);
}

function cekTelepon(telepon) {
    // ^([0-9]*)$   = karakter harus berupa angka, serta tidak boleh mengandung white space
    let regex = /^([0-9]*)$/g;
    return telepon.match(regex);
}

function cekSimbol(input) {
    // [^a-z0-9\s]  = karakter harus berupa huruf atau angka, serta tidak boleh mengandung white space
    let regex = /[^a-z0-9\s]/gi;
    return input.match(regex);
}

function cekWhiteSpace(input) {
    // [\s]         = cek semua white space di dalam suatu string
    let regex = /[\s]/g;
    return input.match(regex);
}

function cekAngka(input) {
    // [0-9]        = cek semua angka di dalam suatu string
    let regex = /[0-9]/g;
    return input.match(regex);
}

function cekHuruf(input) {
    // [0-9]        = cek semua angka di dalam suatu string
    let regex = /[a-z]/gi;
    return input.match(regex);
}
