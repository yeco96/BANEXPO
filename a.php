        <!DOCTYPE html> <!-- The new doctype -->
        <html>
        <head>
        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        <title>BANEXPO </title>
        
        <link rel="stylesheet" type="text/css" href="styles.css" />
        
        </head>
        
        <body>

         <?php
             $user = 'root';
             $passwd = 'verde';
             $db = 'banexpo_psql';
             $port = 5432;
             $host = 'localhost';
             $strCnx = "host=$host port=$port dbname=$db user=$user password=$passwd";
             $cnx = pg_connect($strCnx) or die("Error de conexion. " . pg_last_error());
             
             
             
             // echo "Conexion exitosa <hr>";
             # Ejecutando la Consulta
             if ($_POST) {
                $cedula = pg_escape_string($_POST['txtcedula']);
                $nombre = pg_escape_string($_POST['txtnombre']);
                $sucursal = pg_escape_string($_POST['selectsucursal']);

             
             $result = pg_query($cnx, "INSERT INTO clientelb (cedula, nombre, codsucursal) VALUES (1,'Alejandro',2);") or die(pg_last_error());
             if (!$result) {
             echo "Query: Un error ha occurido.\n";
             exit;
             }
             }
             if ($_POST)
             
             echo "<script languaje='javascript'> alert('Cliente Insertado Correctamente')</script>";
             
             ?>

        
        <section id="page"> <!-- Defining the #page section with the section tag -->
        
        <header> <!-- Defining the header section of the page with the appropriate tag -->
        
        <hgroup>
        <h1>BANEXPO</h1>
        <h3>Tus ahorros son mis ganancias</h3>
        </hgroup>
        
        <nav class="inicio"> <!-- The nav link semantically marks your main site navigation -->
        <ul>
        <li><a href="#">Inicio</a></li>
        </ul>
        </nav>
        
        </header>
        
        <section id="articles"> <!-- A new section with the articles -->
        
        <!-- Article 1 start -->
        
        <div class="line"></div>  <!-- Dividing line -->
        
        <article id="article1"> <!-- The new article tag. The id is supplied so it can be scrolled into view. -->
        <center>
        <h2>Agregar Nuevo Cliente</h2>
        <br>
        <br>
        
        
        </center>
        <center>
        <table>
        
        <tr>
        <td><p class="s">Cédula : </p></td>
        <td><input type="text" name="txtcedula"></td>
        </tr>



        <tr>
        <td><p class="s">Nombre Completo:  </p></td>
        <td><input type="text" name="txtnombre"></td>
        </tr>
       
 <tr>
             <td><p class="s">Sucursal : </p></td>
             <td>

             <select name='selectsucursal'>
        <?php
        $user = 'root';
        $passwd = 'verde';
        $db = 'banexpo_psql';
        $port = 5432;
        $host = 'localhost';
        $strCnx = "host=$host port=$port dbname=$db user=$user password=$passwd";
        $cnx = pg_connect($strCnx) or die("Error de conexion. " . pg_last_error());
        
        
        
        $sql = pg_query(sprintf("SELECT * FROM sucursal"));
        while ($row = pg_fetch_assoc($sql)) {
        echo '<option value="' . htmlspecialchars($row['codsucursal']) . '">' . htmlspecialchars($row['descripcion']) . '</option>';
        }
        pg_close($cnx);
        ?>
        </select>

        </td>
        </tr>
         <tr>
        <form action="" method="post">                  
            <td> <input id="campo3" name="enviar" type="submit" value="Insertar Cliente" class="btn"/> </td>
        </form>

        
        </tr>
       
        </table>
        
        </center>
        
        
        
        <div class="line"></div>
        
        <div class="articleBody clear">
        
        
        
        </div>
        </article>
        
        <!-- Article 1 end -->
        
        
        </section>
        
        <footer> <!-- Marking the footer section -->
        
        <div class="line"></div>
        
        <p>Copyright 2016 - Yeison Picado  --  Alejandro Gonzalez</p> <!-- Change the copyright notice -->
        
        <a href="#" class="up">Arriba</a>
        
        
        
        </footer>
        
        </section> <!-- Closing the #page section -->
        
        <!-- JavaScript Includes -->
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
        <script src="jquery.scrollTo-1.4.2/jquery.scrollTo-min.js"></script>
        <script src="script.js"></script>
        </body>
        </html>
