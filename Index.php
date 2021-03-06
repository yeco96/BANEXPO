<!DOCTYPE html> <!-- The new doctype -->
<html>
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <title>BANEXPO</title>

        <link rel="stylesheet" type="text/css" href="styles.css" />

    </head>

    <body>

    	<section id="page"> <!-- Defining the #page section with the section tag -->

            <header> <!-- Defining the header section of the page with the appropriate tag -->

                <hgroup>
                    <h1>BANEXPO</h1>
                    <h3>Tus ahorros son mis ganancias</h3>
                </hgroup>

                <nav class="clear"> <!-- The nav link semantically marks your main site navigation -->
                    <ul>
                        <li><a href="#article1">Inicio</a></li>
                        <li><a href="#article2">Mantemientos</a></li>
                        <li><a href="#article3">Cajero Automático</a></li>
                    </ul>
                </nav>

            </header>

            <section id="articles"> <!-- A new section with the articles -->

				<!-- Article 1 start -->

                <div class="line"></div>  <!-- Dividing line -->

                <article id="article1"> <!-- The new article tag. The id is supplied so it can be scrolled into view. -->
                    <center>
                    <h2>Inicio</h2>
                    </center>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                    </p>

                    <div class="line"></div>

                    <div class="articleBody clear">



                    </div>
                </article>

				<!-- Article 1 end -->


				<!-- Article 2 start -->

                <div class="line"></div>

                <article id="article2">
                    <center>
                        <table>
                            <h2>Mantemientos</h2>
                            <br>
                            <br>
                            <br>
                            <br>

                                <form method="POST" action="#">
                                    <label class="columna"><input type="submit" value="Liberia" name="" /></label>
                                    </form>

                                <form method="POST" action="#">
                                    <label class="columna"><input type="submit" value="San José" name="" /></label>
                                    </form>

                                <form method="POST" action="#">
                                    <label class="columna"><input type="submit" value="Perez Zeledón" name="" /></label>
                                    </form>



                            <br>
                            <br>
                            <br>
                            <br>
                        </table>

                </center>
                    <div class="line"></div>

                    <div class="articleBody clear">

                        </div>
                </article>

				<!-- Article 2 end -->

				<!-- Article 3 start -->

                <div class="line"></div>

                <article id="article3">
                    <center>
                        <h2>Cajero Automático</h2>
                        <br>
                        <br>
                        <br>
                        <br>

                            <form method="POST" action="#">
                                <label class="columna"><input type="submit" value="Liberia" name="" /></label>
                                </form>

                            <form method="POST" action="cajero_san_jose.php">
                                <label class="columna"><input type="submit" value="San José" name="" /></label>
                                </form>

                            <form method="POST" action="#">
                                <label class="columna"><input type="submit" value="Perez Zeledón" name="" /></label>
                                </form>


                                <br>
                                <br>
                        <br>
                        <br>
                    </center>


                    <div class="line"></div>

                    <div class="articleBody clear">

                    </div>
                </article>

				<!-- Article 3 end -->


            </section>

        <footer> <!-- Marking the footer section -->

           <div class="line"></div>

           <p>Copyright 2016 - Yeison Picado  --  Alejandro Gonzales</p> <!-- Change the copyright notice -->

           <a href="#" class="up">Arriba</a>



        </footer>

		</section> <!-- Closing the #page section -->

        <!-- JavaScript Includes -->

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
        <script src="jquery.scrollTo-1.4.2/jquery.scrollTo-min.js"></script>
        <script src="script.js"></script>
    </body>
</html>
