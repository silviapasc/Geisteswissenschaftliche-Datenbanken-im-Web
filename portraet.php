<?php include('partials/main-menu.php');?>


  <!-- Main content section starts -->
  <section class="main">

    <?php

        // Set an if-condition and a $_GET variable to get the value linked to the "href" attribute
        // within the anchor tag

        if (isset($_GET['portrait'])){
            $portrait = $_GET['portrait'];
        } else {
            $portrait = "";
        }
    ?>


    <?php

            // SQL Query to select all the database records whose "Portrait_ID" value matches with
            // the value of $_GET['portrait']
            $results = mysqli_query($conn, "SELECT * FROM portrait WHERE portrait.Portrait_ID =" . $portrait);

            $row = $results->fetch_assoc();

            $markup = "";
            $markup .= "<div class='results-wrapper-single'>";

                    $img = $row["Portrait_Image_File"];
                    $imgLink = $row["Image_File_URL"];

                    /* OpenSeadragon Viewer Configuration */
                    $digitalisatMarkup .= "<div id='openseadragon-" . $row["Portrait_ID"] . "' class='openseadragon-container'></div>";
                    $digitalisatMarkup .= "<script type='text/javascript'>";
                    $digitalisatMarkup .= "var viewer = OpenSeadragon({
                            id: 'openseadragon-" . $row["Portrait_ID"] . "',
                            prefixUrl: './openseadragon-bin-4.1.0/images/',
                            tileSources: {
                                type: 'image',
                                url: './img/". $img . "'
                            },
                            maxZoomLevel: 3,
                            visibilityRatio: 1,
                            constrainDuringPan: true
                    });";
                    $digitalisatMarkup .= "</script>";
                    /* OpenSeadragon Viewer Configuration ends */

                    $digitalisatMarkup .= "<p class='figcaption'>" . $row['Rights_and_Reproduction'] . "</p>";
                    $digitalisatMarkup .= "<p class='imglink'><span class='sub-heading'>Bildquelle: </span><span><a href='" . $imgLink . "'>" . $imgLink . "</a></span></p>";


                    $markup .= "<div class='row'>";

                    $markup .= "<div class='col portrait-left'>" . $digitalisatMarkup . "</div>";

                    $markup .= "<div class='col portrait-right'>";
                    $markup .= "<h2 class='portrait-title'>" . $row["Title"] . "</h2>";
                    $markup .= "<p class='artist-para'><span>Autor:in: </span><span>" . $row["Artist"] . "</span></p>";
                    $markup .= "<p class='date-para'><span>Datum: </span><span>" . $row["Date"] . "</span></p>";
                    $markup .= "<p class='medium-para'><span>Medium und Technik: </span><span>" . $row["Medium_Technique"] . "</span></p>";
                    $markup .= "<p class='dimensions-para'><span>Bildgröße: </span><span>" . $row["Picture_Size"] . "</span></p>";
                    $markup .= "<p class='place-para'><span><i class='fa fa-map-marker'></i> Bewahrungsort: </span><span><a href='" . $row["Museum_URL"] ."'>" . $row["Museum"] . "</a></span></p>";
                    $markup .= "<p class='rights-para'><span>Copyright: </span><span>" . $row["Rights_and_Reproduction"] . "</span></p>";
                    $markup .= "<p class='tag-para'><span><i class='fa fa-tags'></i> Kategorie: </span><span>" . $row["Tags"] . "</span></p>";
                    $markup .= "<p class='description-para'><span>Beschreibung: </span><span>" . $row["Description"] . "</span></p>";
                    $markup .= "<p class='other-para'><span>Weitere Infos: </span><span>" . $row["Other"] . "</span></p>";
                    $markup .=  "<p class=''><span class='sub-heading'>Eintragsnummer in der Datenbank: </span><span>" . $row["Portrait_ID"] . "</span></p>";
                    $markup .= "</div>";

                    $markup .= "</div>";

                    $markup .= "</div>";

                    echo $markup;

        ?>


</section>

<!-- Main content section ends -->

<?php include('partials/footer.php');?>
