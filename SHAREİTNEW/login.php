<?php
###
#PHP dosyalarini calistirabilmek icin virtual bi servera ihtiyacin var
#https://www.apachefriends.org/de/index.html
#üstteki linkten xampp i indir, indirdikten sonra xampp>htdocs klasörüne kendi websiteni at
#control panelden apache serverini calistir ve Browser üzerinden localhost/shareit/login.php ...
#...yaz ve websiteni server üzerinden cagir.
#Eger serverdan acmazsan php kodlarin hicbirsekilde acilmaz.
###
?>

<!DOCTYPE html>
<?php
if(isset($_POST['submit'])){
    $user = $_POST['username'];
    $password = $_POST['password'];
    ##User ve pw tarafina istedigin kadar kullanici ekleyebilirsin
    if($user=="admin" && $password=="admin"){
        echo("Giris basarili");
        header("Location: index.html");
        exit();
    }else{
        echo("Lütfen gecerli kullanici bilgileri giriniz");
    }
    
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kullanici Girisi</title>
</head>
<body>


    <form action="" method="post">
    <table>
        <tr>
            <td>Kullanici adi:</td>
            <td> <input type="text" name="username" placeholder="Kullanici adi giriniz">
        </tr>
        <tr>
            <td>Sifre:</td>
            <td><input type="password" name="password" placeholder="Sifrenizi giriniz"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="submit"></td>
        </tr>
    </table>

    </form>
</body>
</html>