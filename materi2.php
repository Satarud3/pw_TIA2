<form method="POST">
    masukkan angka : <input type="number" name="angka"> <br>
    <input type="submit" value="kirim" >
</form>

<?php
if(isset($_POST['angka'])){
    $data = $_POST['angka'];
    for ($i=1; $i <= $data; $i++){
        if ($i % 2 == 0) {
        echo "angka $i adalah bilangan genap" . "<br>";
        } else{
        echo "angka $i adalah bilangan ganjil" . "<br>";
        }
    }
}

?>


<?php
echo "<br>";
echo "====looping while==== <br>";

if (isset($_POST['angka'])){
    $data = $_POST['angka'];
    $i = 1;
    echo "angka genap : <br>";
    while ( $i <= $data){
        if ($i % 2 == 0) {
            echo "$i <br>";
        }
        $i++;
    }
}



echo "<br>";
echo "====looping do while==== <br>";
echo "angka ganjil : <br>";
if (isset($_POST['angka'])){
    $data = $_POST['angka'];
    $i = 1;
    do {
        if ($i % 2 != 0) {
            echo "$i <br>";
        }
        $i++;
    } while ($i <= $data);
}

?>