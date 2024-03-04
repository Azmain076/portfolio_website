<html>  
    <head>  
        <title>PHP login system</title>  
       
 
    </head>  

    <?php
  if (isset($_COOKIE['user_name'])) {
      $username =$_COOKIE['user_name'];
  } else {
    $username ="";
  }
?>

<?php
  if (isset($_COOKIE['password'])) {
      $password = $_COOKIE['password'];
  } else {
    $password = "";
  }
?>
    <body>  
        <div id = "frm">  
            <h1>Login</h1>  
            <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">  
                <p>  
                    <label> UserName: </label>  
                    <input type = "text" id ="user" name  = "user" value="<?php echo $username;?>" />  
                </p>  
                <p>  
                    <label> Password: </label>  
                    <input type = "password" id ="pass" name  = "pass" value="<?php echo $password;?>"/>  
                </p>  
                <p>     
                    <input type =  "submit" id = "btn" value = "Login" />  
                </p>  
            </form>  
        </div>  

        <a href="index.php"> <button>portfolio</button></a>
       
        <script>  
                function validation()  
                {  
                    var id=document.f1.user.value;  
                    var ps=document.f1.pass.value;  
                    if(id.length=="" && ps.length=="") {  
                        alert("User Name and Password fields are empty");  
                        return false;  
                    }  
                    else  
                    {  
                        if(id.length=="") {  
                            alert("User Name is empty");  
                            return false;  
                        }   
                        if (ps.length=="") {  
                        alert("Password field is empty");  
                        return false;  
                        }  
                    }                             
                }  
            </script>  
    </body>     
    </html>  
