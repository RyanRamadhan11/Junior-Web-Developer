<!-- Ryan Ramadhan -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>JWD - Tugas 5 - Ryan Ramadhan</title>
</head>
<body>
    <!-- Form Input Angka -->
    <form action="" method="post">
        Masukkan Bilangan 1 : <input type="text" name="bil1">
        Masukkan Bilangan 2 : <input type="text" name="bil2">
        <input type="submit" name="submit" value="hitung"> <br>
    </form>
    <?php
    
    //Fungsi Pertambahan
    function tambah($a, $b){
        $hasil = $a + $b;
        
        echo "=================================<br>";
        echo "hasil pertambahan adalah : $hasil <br>";
        return $hasil;
    }
    
    //Fungsi Pengurangan
    function kurang($a, $b){
        $hasil = $a - $b;
        echo "hasil pengurangan adalah : $hasil <br>";
        return $hasil;
    }
    //Fungsi Perkalian
    function kali($a, $b){
        $hasil = $a * $b;
        echo "hasil perkalian adalah : $hasil <br>";
        return $hasil;
    }
    //Fungsi Pembagian
    function bagi($a, $b){
        $hasil = $a / $b;
        echo "hasil pembagian adalah : $hasil <br>";
        return $hasil;
    }
    //Proses
    if(isset($_POST['submit'])){
        $i = $_POST['bil1'];
        $j = $_POST['bil2'];

        if($i && $j != ""){
            // jika form inputan tidak kosong maka:
            echo "<br> bilangan 1 : $i <br>" ; 
            echo "bilangan 2 : $j <br>";
            tambah($i, $j);     //Memanggil fungsi pertambahan
            kurang($i, $j);     //Memanggil fungsi pengurangan
            kali($i, $j);       //Memanggil fungsi perkalian
            bagi($i, $j);       //Memanggil fungsi pembagian
        } else{
            // jika form inputan tidak menerima input apapun
        }   echo "";
    }
    ?>
</body>
</html>