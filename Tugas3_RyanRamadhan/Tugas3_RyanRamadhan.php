<!-- Ryan Ramadhan -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>JWD - Tugas 3 - Ryan Ramadhan</title>
</head>
<body>
    <?php
        echo "===============CETAK BILANGAN GANJIL GENAP 1-100=============== <br>";
        // Bagian ini untuk membuat nomor berurutan dari 1 sampai dengan 100 (kurang dari sama dengan 100).
        for($no=1;$no<=100;$no++)
        /*
            Bagian untuk menentukan bilangan genap, dengan menggunakan sisa bagi 2 (modulus 2).
            Apabila habis dibagi 2, maka bilangan tersebut adalah genap. dan apabila tidak, maka bilangan tersebut adalah ganjil.
        */
        {
            if($no%2==0){   
                echo "$no ";echo "adalah Bilangan Genap <br>";
            }
            else{
                echo "$no ";echo "adalah Bilangan Ganjil. <br>";
            }
        }
    ?>
</body>
</html>