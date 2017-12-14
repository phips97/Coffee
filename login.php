<link rel="stylesheet" href="css/login.css">
<!-- EINBINDUNG FAVICON -->
<link rel="shortcut icon" type="image/x-icon" href="/coffee/img/favicon.ico">

<form method="POST" action="login_action.php">
    
  

  <div class="container">
      <img src="img/tasse.png" alt="Avatar" class="avatar">
      <p><label>Mailadresse</label></p>
      <!--Autokomplettierung abgeschalten-->
      <p><input type="text" autocomplete="off" placeholder="Mailadresse eingeben" name="email" required></p>

      <p><label>Passwort</label></p>
      <p><input type="password" placeholder="Passwort eingeben" name="psw" required></p>

      <p><button type="submit">Login</button></p>
    </div>
  <!-- HIER KÖNNTE NOCH ein Container kommen -->
  <!-- <div class="container" style="background-color:#f1f1f1"> -->
    <!-- <button type="button" class="cancelbtn">Cancel</button> -->
    <!-- HIER KÖNNTE NOCH EIN Passwort vergessen Feld kommen -->
	<!-- <span class="psw">Forgot <a href="#">password?</a></span> -->
  <!-- </div> -->
</form>
