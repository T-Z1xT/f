<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <link href="assets/img/faviconn.png" rel="icon">
      <title>Login dulu cuy</title>
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <div class="container">
         <header>Sign In</header>
         <div class="form-outer">
            <form action="routers/r_login.php?aksi=login" method="post">
               <div class="page">
                  <div class="title">
                     Login Details:
                  </div>
                  <div class="field">
                     <div class="label">
                        Username
                     </div>
                     <input type="text" name="usermail">
                  </div>
                  <div class="field">
                     <div class="label">
                        Password
                     </div>
                     <input type="password" name="password">
                  </div>
                  <div class="field btns">
                     <button type="submit" name="login">Log In</button>
                  </div>
               </div>
            </form>
            <p>Belum punya akun? <a href="register.php">Registrasi di sini</a>.</p>
         </div>
      </div>
      <script src="assets/js/script.js"></script>
   </body>
</html>