<!-- Ryan Ramadhan -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>JWD - Tugas 4 - Ryan Ramadhan</title>
</head>
<body>
    <form action="" method="POST">
    Jumlah Bintang = <input type="text" name="bintang"><br>
    <input type="submit" name="submit" value="kirim">
    </form><br>
</body>
</html>

<?php
        if(isset($_POST['submit'])){
            $bin=$_POST['bintang'];

            for($a=1; $a <= $bin; $a++){
                for($b=1;$b <= $a; $b++)
                {
                    echo "*";
                }
                echo "<br>";
            }

        }
?>