<?php

if (isset($_POST["login"])){
    echo "
<form method='post' action='gastenboek.php'>
    <div class=\"container\">
      <label for=\"uname\"><b>Username</b></label>
      <input type=\"text\" placeholder=\"Enter Username\" name=\"uname\" required>

      <label for=\"psw\"><b>Password</b></label>
      <input type=\"password\" placeholder=\"Enter Password\" name=\"psw\" required>
        
      <button type=\"submit\" name='loging' >Login</button>
      <label>
        <input type=\"checkbox\" checked=\"checked\" name=\"remember\"> Remember me
      </label>
    </div>
</form>";
}



?>