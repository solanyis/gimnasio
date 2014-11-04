 <?php>
 session_start ();
 function protectVars($str)
 $str
 
 ?>
 
 <!DOCTYPE HTML>
 <html>
 <head>
  <title>login</title>
 </head>
 <body>
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

        
 </body>
 </html>
