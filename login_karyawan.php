<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Karyawan</title>
    <link rel="stylesheet" href="login_k.css">
  </head>
  <body>
    <div class="form">
      <img src="aset/gambar/iconfinder.png" class="user">
      <h2>Log In Here</h2>
      <form action="proses_karyawan.php" method="post">
        <input type="hidden" action="proses_karyawan.php" value="">
        <input type="text" name="username" placeholder="Enter Username" required>
        <input type="password" name="password" placeholder="Enter Password" required>
        <button type="submit bg-infoS">LOGIN</button>
      </form>
    </div>
  </body>
</html>
