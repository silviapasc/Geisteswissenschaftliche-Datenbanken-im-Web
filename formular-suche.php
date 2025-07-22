<?php include('partials/main-menu.php');?>

  <!-- Main content section starts -->
  <section class="main">

    <?php

        // List of if-statements for each of the 4 attributes to be selected through the overlay form
        // Thanks to the $_REQUEST variable the content from each form select tag is get and
        // assigned to an associative array, which can then be passed to the following SQL query

        // The SQL where-condition is based on the logical AND, so that database records match
        // only if all the 4 attribute values selected through the form are given

        if($_REQUEST['date']){
            $period = $_REQUEST['date'];

            if($period != ''){
                $where = "WHERE Date='". $period ."'";
            }
        }


        if($_REQUEST['medium']){
            $medium = $_REQUEST['medium'];

            if($medium != ''){
                 if((!empty($period)) && ($medium != '')){
                    $where .= " AND Medium_Technique='". $medium ."'";
                 } else if ($medium != '') {
                    $where = "WHERE Medium_Technique='". $medium ."'";
                }
            }
        }


        if($_REQUEST['tag']){
            $tag = $_REQUEST['tag'];

            if($tag != ''){
                if(((!empty($period)) || (!empty($medium))) && ($tag != '')){
                    $where .= " AND Tags='". $tag ."'";
                } else if ($tag != '') {
                    $where = "WHERE Tags='". $tag ."'";
                }
            }
        }


        if($_REQUEST['place']){
            $place = $_REQUEST['place'];

            if($place != ''){
                if(((((!empty($period)) || (!empty($medium))) || (!empty($tag)))) && ($place != '')){
                    $where .= " AND Museum='". $place ."'";
                } else if ($place != '') {
                    $where = "WHERE Museum='". $place ."'";
                }
            }
        }


        // SQL Query to select all the database records matching with "$where", i.e. with
        // all the where-conditions defined through the if-statements above
        $results = mysqli_query($conn, "SELECT * FROM portrait ". $where ."");

        // Count the total number of matching results
        $rowCount = mysqli_num_rows($results);

        echo "<div class='col'><h2>Sie haben nach Einträgen zu Jahr &quot;" . $period . "&quot; und Technik &quot;" . $medium . "&quot; und Kategorie &quot;" . $tag . "&quot; und Bewahrungsort &quot;" . $place . "&quot; gesucht.</h2><br>";
        echo "<h3 class='col'>Ihre Suche ergab " . $rowCount . " Treffer</h3></div>";

        // Output of matching portrait image and information selected through the overlay form
        if ($where) {
            $query = mysqli_query($conn, "SELECT * FROM portrait ".$where."");

                $markup = "";
                $markup .= "<div class='col'>";

                while ($row = mysqli_fetch_assoc($query)){

                    $digitalisatMarkup = "<img id='img-form' src='img/" . $row["Portrait_Image_File"] . "' alt='Bild von " . $row["Title"] . "'>";

                    $markup .= "<div class='row form-results'>";
                    $markup .= "<div id='portrait-left' class='col portrait-left'>" . $digitalisatMarkup . "</div>";


                    $markup .= "<div id='portrait-right' class='col portrait-right'>";
                    $markup .= "<h2 class='portrait-title'><a href='portraet.php?portrait=" . $row["Portrait_ID"] . "'>" . $row["Title"] . "</a></h2>";
                    $markup .= "<p class='artist-para'><span>Autor:in: </span><span>" . $row["Artist"] . "</span></p>";
                    $markup .= "<p class='date-para'><span>Datum: </span><span>" . $row["Date"] . "</span></p>";
                    $markup .= "<p class='medium-para'><span>Medium und Technik: </span><span>" . $row["Medium_Technique"] . "</span></p>";
                    $markup .= "<p class='dimensions-para'><span>Bildgröße: </span><span>" . $row["Picture_Size"] . "</span></p>";
                    $markup .= "<p class='place-para'><span><i class='fa fa-map-marker'></i> Bewahrungsort: </span><span><a href=''>" . $row["Museum"] . "</a></span></p>";
                    $markup .= "<p class='tag-para'><span>Kategorie: </span><span>" . $row["Tags"] . "</span></p>";
                    $markup .= "</div>";

                    $markup .= "</div>";

                }

                $markup .= "</div>";

                echo $markup;


            } else {
            echo "Leider kein Ergebnis";
            }


    ?>

    </section>

    <!-- Main content section ends -->

<?php include('partials/footer.php');?>
