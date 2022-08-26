<?

//$con = mysqli_connect("localhost:3306", "kadrustr_root", "Muhammadaziz1410", "kadrustr_turizm");
$con = mysqli_connect("localhost", "root", "root", "endo");

$lang_count = 3;


if (isset($_COOKIE['lang'])){
    $lang = $_COOKIE['lang'];
}else {
    $lang = "uz";
}


$uri = explode("/",$_SERVER['REQUEST_URI']);
$count = count($uri);