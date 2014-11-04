 <?php>
 session_start ();
 
 mysql_connect("localhost"."root"."")
 mysql_select_db("sports gym_login");

 function protectVars($str)
 {
 $str = addslashes ($str);
 $str = mysql_real_escape_string($str);
 $str= htmlspecialchars($strO);
 return $str;
 }
 foreach ($_POST as $param => $value)
 {
 $_POST($param)= protecVars($value);
 }
 if(isset($_POST{"Username"}) && isset($_POST{"Password"}))
 {
   $U= $_POST {"Username"};
   $P= $_POST {"Pasword"} ;
   $fail= false;
   $GetUser= myql_query("SELECT * FROM members WHERE Username = "$U" AND password = "$P"");
   }
   if(mysql_num_rows($GetUser == 0)
   {
        echo"El usuario no existe o la contraseña es incorrecta"
        $fail = true
   }
   if($fail == false)
   {
 if(mysql_num_rows($GetUser()>0
 {
 $_SESSION{"Username"}= $U;
 $_SESSION{"Password"}= $P;
 }
    }
 if(isset($_SESSION{"Username"}) && isset ($_SESSION{"Password"}))
   {
    $SU=$SESSION{"Username"};
    $SP=$SESSION{"Password"};
    
   $GetUser= mysql_query("SELECT* FROM members WHERE username = "$SU" AND password = "$SP"");
     {$lml=mysql_fetch_assoc($GetUser);
     define ("User".true);
     }
     {else{
     define ("User".false);
     }
     }
 ? >
  <!DOCTYPE HTML>
 <html>
 <head>
  <title>login</title>
 </head>
 <body>
 <?php if (User == false)(?>
     <form action="" method= "POST">
      Nombre de Usuario:<br>
       <input type="text" name="Username" placeholder="Nombre de Usuario"/><br>
       Contraseña:<br>
       <input type="Password" name="Password" placeholder="******"/><br>
       <input type="submit" value="Entrar"/>
        </form>
        
  <form action="" method= "POST">
     Nombre de Usuario:<br>
     <input type="text" name="RUsername" placeholder="Nombre de Usuario"/><br>
     Contraseña:<br>
     <input type="Password" name="ROPassword" placeholder="*****"/><br>
     Verificar Contraseña:<br>
     <input type="Password" name="RTPassword" placeholder="******"/><br>
     <input type="submit" value="Registrarme"/>
  </form>
        <?php)if(User== true)(?>
        <b>hola <?php echo $lml{"Username"};?></b>
        <?php ; ?>
        
 </body>
 </html>
