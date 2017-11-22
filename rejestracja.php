<?php
$conn=new mysqli('localhost','root','','projekt');
if(isset($_POST['submit'])) {
  $id1=$_POST['id'];
  $login=$_POST['login'];
  $haslo=$_POST['haslo'];
  $haslo2=$_POST['haslo2'];
  $email=$_POST['email'];


  $sql="insert into uzytkownicy values('$id1','$login','$haslo',''$haslo2','$email')";
  $res=$conn->query($sql);
  echo $sql;
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Projekt</title>
  <link rel="stylesheet" href="css\bootstrap.min.css">
  <link rel="stylesheet" href="css\style.css">
</head>
<body>
  <div class="container center">
    <form method="post">
      <p><label>Login: <input type="text" name="login"></label></p>
      <p><label>hasło: <input type="password" name="haslo"></label></p>
      <p><label>powtórz hasło: <input type="password" name="haslo2"></label></p>
      <p><label>email: <input type="email" name="email"></label></p>
    <input type="submit" name="submit" value="Zapisz">
    </form>
  </div>
  <script src="js\jquery-3.2.1.min.js"></script>
  <script src="js\bootstrap.min.js"></script>
</body>
</html>

<?php
