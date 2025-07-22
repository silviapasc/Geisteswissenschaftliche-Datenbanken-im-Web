<?php include('partials/main-menu.php');?>


  <!-- Main content section starts -->
  <section class="main">

    <!-- Page Title -->
    <div class="row-count">
        <h1>Die Sammlung</h1>
    </div>

        <?php
                // SQL Query to select all the database records, sorting them in ascending order by "Portrait_ID"
                $result = mysqli_query($conn, "SELECT * FROM portrait ORDER BY portrait.Portrait_ID");

                $markup = "";
                $markup .= "<div class='results-wrapper'>";

                while ($row =  mysqli_fetch_assoc($result)) {

                    // Image Tag containing the JPEG File
                    $digitalisatMarkup = "<img id='img-form' src='img/" . $row["Portrait_Image_File"] . "' alt='Bild von " . $row["Title"] . "'>";

                    $markup .= "<div class='row'>";
                    // Portrait Image Section on the Left
                    $markup .= "<div id='portrait-left' class='col portrait-left'>" . $digitalisatMarkup . "</div>";

                    // Portrait Description Part on the Right
                    $markup .= "<div id='portrait-right' class='col portrait-right'>";
                    $markup .= "<h2 class='portrait-title'><a href='portraet.php?portrait=" . $row["Portrait_ID"] . "'>" . $row["Title"] . "</a></h2>";
                    $markup .= "<p class='artist-para'><span>Autor:in: </span><span>" . $row["Artist"] . "</span></p>";
                    $markup .= "<p class='date-para'><span>Datum: </span><span>" . $row["Date"] . "</span></p>";
                    $markup .= "<p class='dimensions-para'><span>Bildgröße: </span><span>" . $row["Picture_Size"] . "</span></p>";

                    $markup .= "</div>";

                    $markup .= "</div>";

                }

                $markup .= "</div>";

                echo $markup;

        ?>

</section>

<!-- Main content section ends -->

<?php include('partials/footer.php');?>
