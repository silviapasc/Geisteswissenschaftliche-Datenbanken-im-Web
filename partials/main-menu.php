<!doctype html>
<html lang="de">

<head>
  <meta charset="utf-8">
  <title>Fayumporträts – Porträts aus dem alten Ägypten</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap' rel='stylesheet'>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- OpenSeadragon -->
  <script src="./openseadragon-bin-4.1.0/openseadragon.min.js"></script>

  <!-- Stylesheet -->
  <link rel="stylesheet" href="css/main.css">



</head>

<body>

    <?php
        // Access to Database
        require_once "config.php";
    ?>

  <!-- Navigation section starts -->
    <section class="navbar">

      <nav class="nav-navbar" id="nav-navbar">
        <ul class="left">
            <li></i><a class="logo" href="startseite.php">Fayumporträts</a></li>
        </ul>
        <!-- <i class="fa fa-times" onclick="hideMenu()"></i> -->
        <ul class="right">
          <!-- <li><a href="gallery.php">Startseite</a></li> -->
          <li><a href="startseite.php#portrait-info">Über das Projekt</a></li>
          <li><a href="sammlung.php">Die Sammlung</a></li>
          <!-- model style like above -->
          <li><span id="fa-search" onclick="openNav()"><i class="fa fa-search"></i> Suche</span></li>
          <li><span href="javascript:void(0);" class="bar-icon" onclick="responsiveNavbar()">
                <i class="fa fa-bars"></i></span>
          </li>
        </ul>
        <!-- <i class="fa fa-bars" onclick="showMenu()"></i> -->
      </nav>
        <!-- <img src="" class="menu-icon">  -->


      <!-- Overlay section -->
      <div id="myNav" class="overlay">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="overlay-content">
                <h2>Suchmenü</h2>
                <form class="fulltext-search" action="volltextsuche.php" method="GET"><input id ="fulltext" type="text" name="query" placeholder=" Volltextsuche hier eingeben" /><i id="filtersubmit" class="fa fa-search"></i></form>

                <form action="formular-suche.php" method="get">
                   <p><label for="Date">Datum: </label>
                      <select name="date" id="Date">
                            <?php
                                // Querying the database
                                $result = mysqli_query($conn, "SELECT * FROM portrait");

                                $rows = array();
                                while($row = mysqli_fetch_assoc($result)){
                                        // Select the table fields and save them in separate arrays
                                        $date[] = $row['Date'];
                                        $medium[] = $row['Medium_Technique'];
                                        $tag[] = $row['Tags'];
                                        $place[] = $row['Museum'];
                                        }

                                    // Define arrays from the ones above, but that only contain unique values
                                    $date = array_unique($date);
                                    $medium = array_unique($medium);
                                    $tag = array_unique($tag);
                                    $place = array_unique($place);
                                //}
                                foreach($date as $d)
                                echo "<option value='" . $d . "'>" . $d . "</option>";
                            ?>
                      </select>
                   </p>
                    <p><label for="Medium">Medium und Technik: </label>
                        <select name="medium" id="Medium">';
                                <?php
                                foreach($medium as $m){
                                    echo "<option value='" . $m . "'>" . $m . "</option>";
                                 }
                            ?>
                      </select>
                    </p>
                    <p><label for="Tag">Tag: </label>
                        <select name="tag" id="Tag">
                                <?php
                                foreach($tag as $t){
                                    echo "<option value='" . $t . "'>" . $t . "</option>";
                                }
                            ?>
                      </select>
                    </p>
                    <p><label for="Place">Ort: </label>
                        <select name="place" id="Place">
                            <?php
                                foreach($place as $p){
                                    echo "<option value='" . $p . "'>" . $p . "</option>";
                                }
                            ?>
                      </select>
                    </p>
                   <p><input id="submit-button" type="submit" value="Eingaben absenden"/></p>
                </form>
          </div>
        </div>
        <!-- Overlay section ends -->

        <!-- Scroll-to-top button -->
        <i id="myBtn" onclick="topFunction()"class="fa fa-arrow-circle-up"></i>

    </section>
    <!-- Navigation section ends -->


    <script type='text/javascript'>

        /* Overlay Opening and Closing Functions */

        function openNav() {
          var x = window.matchMedia("(max-width: 700px)")
          // If media query matches, apply the rules
          if (x.matches) {
            document.getElementById("myNav").style.width = "100%";
          } else {
            document.getElementById("myNav").style.width = "50%";
          }
        }


        function closeNav() {
          document.getElementById("myNav").style.width = "0%";
        }


        /* Scroll-to-top Button */
        // Get the scroll-to-top button
        let mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
          } else {
            mybutton.style.display = "none";
          }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }


        /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
        function responsiveNavbar() {
          var x = document.getElementById("nav-navbar");
          if (x.className === "nav-navbar") {
            x.className += " responsive";
          } else {
            x.className = "nav-navbar";
          }
        }


    </script>

