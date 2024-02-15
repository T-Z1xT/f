<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="assets/img/faviconn.png" rel="icon">
      <title>Bikin akun dulu gak sih</title>
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <div class="container">
         <header>Signup Form</header>
         <div class="progress-bar">
            <div class="step">
               <p>
                  Name
               </p>
               <div class="bullet">
                  <span>1</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            <div class="step">
               <p>
                  Contact
               </p>
               <div class="bullet">
                  <span>2</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            <div class="step">
               <p>
                  Birth
               </p>
               <div class="bullet">
                  <span>3</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            <div class="step">
               <p>
                  Submit
               </p>
               <div class="bullet">
                  <span>4</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
         </div>
         <div class="form-outer">
            <form id="myForm" action="routers/r_login.php?aksi=register" method="post">
                  <input type="text" name="id" id="id" hidden>
                  <input type="text" name="username" id="username" value="<?= $username ?>" hidden>
                  <input type="text" name="fullname" id="fullname" value="<?= $fullname ?>" hidden>
                  <input type="text" name="email" id="email" value="<?= $email ?>" hidden>
                  <input type="text" name="alamat" id="alamat" value="<?= $address ?>" hidden>
                  <input type="text" name="JK" id="JK" value="<?= $jk ?>" hidden>
               <div class="page slide-page">
                  <div class="title">
                     Kimi No Namae Wa:
                  </div>
                  <div class="field">
                     <div class="label">
                        Full Name
                     </div>
                     <input type="text" name="fullname">
                  </div>
                  <div class="field">
                     <div class="label">
                        Alamat
                     </div>
                     <input type="text" name="alamat">
                  </div>
                  <div class="field">
                     <button class="firstNext next">Next</button>
                  </div>
               </div>
               <div class="page">
                  <div class="title">
                     Username And Email:
                  </div>
                  <div class="field">
                     <div class="label">
                        Username
                     </div>
                     <input type="text" name="username">
                  </div>
                  <div class="field">
                     <div class="label">
                        Email Address
                     </div>
                     <input type="email" name="email">
                  </div>
                  <div class="field btns">
                     <button class="prev-1 prev">Previous</button>
                     <button class="next-1 next">Next</button>
                  </div>
               </div>
               <div class="page">
                  <div class="title">
                     Date of Birth:
                  </div>
                  <div class="field">
                     <div class="label">
                        Date
                     </div>
                     <input type="date" name="date">
                  </div>
                  <div class="field">
                     <div class="label">
                        Gender
                     </div>
                     <select name="JK">
                        <option>Male</option>
                        <option>Female</option>
                     </select>
                  </div>
                  <div class="field btns">
                     <button class="prev-2 prev">Previous</button>
                     <button class="next-2 next">Next</button>
                  </div>
               </div>
               <div class="page">
                  <div class="title">
                     Password:
                  </div>
                  <div class="field">
                     <div class="label">
                        Password
                     </div>
                     <input type="password" name="password" id="password">
                  </div>
                  <div class="field">
                     <div class="label">
                        Comfirm Password
                     </div>
                     <input type="password" name="c_pass" id="c_pass">
                  </div>
                  <div class="field btns">
                     <button class="prev-3 prev">Previous</button>
                     <button type="submit" value="submit" class="submit" name="register" onclick="redirectToLogin()">Submit</button>
                  </div>
               </div>
            </form>
            <p>Sudah Punya Akun? <a href="login.php">login di sini</a>.</p>
         </div>
      </div>
      <script src="assets/js/script.js"></script>
   </body>
</html>