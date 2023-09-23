<?php
class faktorial
{
    function cal_faktorial(int $angka)
    {
        if ($angka <= 0) {
            return 1;
        } else {
            $hasil = 1;
            for ($i = 1; $i <= $angka; $i++) {
                $hasil *= $i;
            }
            return $hasil;
        }
    }

    //recursive
    function recursive_faktorial(int $angka)
    {
        if ($angka <= 0) {
            return 1;
        } else {
            return $angka * $this->recursive_faktorial($angka - 1);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="number" name="angka" id="angka" required>
        <input type="submit" name="submit">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $faktorial = new faktorial();
        echo $faktorial->cal_faktorial($_POST['angka']) . "<br \>";
        echo "Recursive : " . $faktorial->recursive_faktorial($_POST['angka']);
    }
    ?>
</body>

</html>