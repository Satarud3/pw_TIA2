<?php
function garis(){
    echo "================================= <br>";
}
function hello(){
    echo "Selamat datang di materi php dasar <br>";
    echo "Semoga materi ini bermanfaat untuk kalian semua <br>";
}
hello();
garis();

function tambah(int $a, int $b){
    $hasil = $a + $b;
    return $hasil;
}

function kurang(int $a, int $b){
    $hasil = $a - $b;
    return $hasil;
}

function kali(int $a, int $b){
    $hasil = $a * $b;
    return $hasil;
}

function bagi(int $a, int $b){
    if ($b == 0) {
        return "Error: Pembagian dengan nol tidak diperbolehkan.";
    }
    $hasil = $a / $b;
    return $hasil;
}


function login ($username, $password){
    if ($username == "Satar" && $password == "abc1234") {
        return "login berhasil";
    } else {
        return "login gagal";   
    }
}
?>


<form method = "POST">
    masukkan angka1 : <input type="number" name="a"> <br>
    masukkan angka2 : <input type="number" name="b"> <br>
    <input type="submit" value="kirim" >
</form>


<form method = "POST">
    Masukkan Username : <input type="string" name="username"> <br>
    Masukkan Password : <input type="password" name="password"> <br>
    <input type="submit" value="login" >
</form>


<?php
if (isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo login($username, $password);
}   

if (isset($_POST['a']) && isset($_POST['b'])){
    $angka1 = $_POST['a'];
    $angka2 = $_POST['b'];
    echo "hasil penjumlahan $angka1 + $angka2 = " . tambah($angka1, $angka2) . "<br>";
    echo "hasil pengurangan $angka1 - $angka2 = " . kurang($angka1, $angka2) . "<br>";
    echo "hasil perkalian $angka1 * $angka2 = " . kali($angka1, $angka2) . "<br>";
    echo "hasil pembagian $angka1 / $angka2 = " . bagi($angka1, $angka2) . "<br>";  
}
?>