<?php

$nama = "Stevren";
/*
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
echo $nama;
*/

// Perulangan
/*
$no = 10;
for ($i=0; $i<$no; $i++) {
    $n = $i + 1;
    echo $n." " .$nama."<br/>";
}
*/

/*
$no = 10;
$i = 0;

while ($i < $no) {
    $n = $i + 1;
   echo $n." ".$nama."<br/>";
   $i++;
}
*/

/*
$no = 10;
$i = 0;

do {
    $n = $i + 1;
    echo $n." ".$nama."<br/>;
    $i++;
} while ($i < $no)
*/


//$data = array('Avanza', 'Lamborghini', 'Tesla', 'Xenia', 'XPander', 'RUBICON');
/*
$i = 0;
while (si < count($data)) {
    echo $data[$i]."<br>";
    $i++;
}
*/
//echo $data[5];
/*
foreach($data as $value) {
    echo $value."<br>";
}
*/


//Percabangan
/*
if ($nama == "Putu") {
    echo $nama." adalah orang Bali";
}else if($nama = "Budi") {
    echo $nama."berasal dari pulau Jawa";
}else {
    echo $nama." darimana ya?";
}
*/
/*
switch($nama) {
    case "Putu";
        $pesan = $nama." adalah orang Bali";
    break;
    case "Budi";
        $pesan = $nama." berasal dari pulau Jawa";
    break;
    default;
        $pesan = $nama." darimana ya?";

}

echo $pesan;

*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
       <label>Nama</label>
       <input type="text" name="nama">
       <label>Jumlah</label>
       <input type="text" name="no">
       <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        if($_POST['submit'] == "submit") {

            switch($_POST['nama']) {
                case "Putu"
            }
        }
    ?>
</body>
</html>