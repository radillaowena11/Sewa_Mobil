<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Pelanggan</title>
    <link rel="stylesheet" href="login_p.css">
  </head>
  <body>
    <div class="form">
      <img src="aset/gambar/iconfinder.png" class="user">
      <h2>LOG IN HERE</h2>
      <form action="proses_pelanggan.php" method="post">
        <input type="hidden" action="proses_pelanggan.php" value="">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">LOGIN</button>
      </form>
    </div>
  </body>
</html>
