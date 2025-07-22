<?php include('partials/main-menu.php');?>

  <!-- Main content section starts -->
  <section class="main">

    <?php

        // Set an if-condition and $_GET variable to get the value sent over the fulltext search form
        if (isset($_GET['query'])){
                    $query = $_GET['query'];
                } else {
                    $query = "";
            }


        // Select the matching text value from the following table fields if the query is not empty
        if(strlen($query) != 0){

            // changes characters used in html to their equivalents, for example: < to &gt;
            $query = htmlspecialchars($query);

            // SQL query selecting '%$query%', i.e. any text value corresponding to the string associated with the $_GET variable,
            // excluding with that any exact match.
            // The text value is taken from the selected "portrait" table fields

            // Special characters like ' and " should be escaped!
            // Moreover forms like 'ae' for 'ä', for example, are not detected!
            $raw_results = mysqli_query($conn, "SELECT * FROM portrait
                WHERE portrait.Title LIKE '%". $query . "%' OR portrait.Description LIKE '%". $query . "%'
                 OR portrait.Date LIKE '%". $query . "%' OR portrait.Museum LIKE '%". $query . "%'
                  OR portrait.Medium_Technique LIKE '%". $query . "%' OR portrait.Artist LIKE '%". $query . "%'
                   OR portrait.Other LIKE '%". $query . "%' OR portrait.Picture_Size LIKE '%". $query . "%'
                   OR portrait.Tags LIKE '%". $query . "%' OR portrait.Portrait_ID LIKE '%". $query . "%'");


            // If one or more rows are returned, output the results and set a counter to scan the records
            // within the results sequence
            if(mysqli_num_rows($raw_results) > 0){



                $markup = "<div class='col'>";
                $markup .= "<h2>Sie haben nach Einträgen zu &quot;" . $query . "&quot; gesucht.<br/></h2>";
                $counter = 0;
                $markupResults = "";

                // With "mysql_fetch_array()" data from the database are assigned to an array
                // The while-loop is repeating itself as long as there is data to be fetched
                while($results = mysqli_fetch_array($raw_results)){

                    $markupResults .= "<div>";

                    // The "mb_stristr()" function finds the first occurrence of a string within another string and is case insensitive
                    if (mb_stristr($results['Title'], $query) != false) {
                        $markupResults .= "<p><h4>#" . ++$counter . "</h4><a href='portraet.php?portrait=" . urlencode($results["Portrait_ID"]) . "'><h3 id='header-underlined'>Aus dem Abschnitt \"Titel\": </h3></a><h4>".$results['Title']."</h4></p><br/>";
                        }

                    if (mb_stristr($results['Description'], $query) != false) {
                        $markupResults .= "<p><h4>#" . ++$counter . "</h4><a href='portraet.php?portrait=" . urlencode($results["Portrait_ID"]) . "'><h3 id='header-underlined'>Aus dem Abschnitt \"Beschreibung\": </h3></a><h4>".$results['Description']."</h4></p><br/>";
                        }

                    if (mb_stristr($results['Date'], $query) != false) {
                        $markupResults .= "<p><h4>#" . ++$counter . "</h4><a href='portraet.php?portrait=" . urlencode($results["Portrait_ID"]) . "'><h3 id='header-underlined'>Aus dem Abschnitt \"Datum\": </h3></a><h4>".$results['Date']."</h4></p><br/>";
                        }

                    if (mb_stristr($results['Museum'], $query) != false) {
                        $markupResults .= "<p><h4>#" . ++$counter . "</h4><a href='portraet.php?portrait=" . urlencode($results["Portrait_ID"]) . "'><h3 id='header-underlined'>Aus dem Abschnitt \"Bewahrungsort\": </h3></a><h4>".$results['Museum']."</h4></p><br/>";
                        }

                    if (mb_stristr($results['Picture_Size'], $query) != false) {
                        $markupResults .= "<p><h4>#" . ++$counter . "</h4><a href='portraet.php?portrait=" . urlencode($results["Portrait_ID"]) . "'><h3 id='header-underlined'>Aus dem Abschnitt \"Bildgröße\": </h3></a><h4>".$results['Picture_Size']."</h4></p><br/>";
                        }

                    if (mb_stristr($results['Artist'], $query) != false) {
                        $markupResults .= "<p><h4>#" . ++$counter . "</h4><a href='portraet.php?portrait=" . urlencode($results["Portrait_ID"]) . "'><h3 id='header-underlined'>Aus dem Abschnitt \"Autor:in\": </h3></a><h4>".$results['Artist']."</h4></p><br/>";
                        }

                    if (mb_stristr($results['Other'], $query) != false) {
                        $markupResults .= "<p><h4>#" . ++$counter . "</h4><a href='portraet.php?portrait=" . urlencode($results["Portrait_ID"]) . "'><h3 id='header-underlined'>Aus dem Abschnitt \"Weitere Infos\": </h3></a><h4>".$results['Other']."</h4></p><br/>";
                        }

                    if (mb_stristr($results['Medium_Technique'], $query) != false) {
                        $markupResults .= "<p><h4>#" . ++$counter . "</h4><a href='portraet.php?portrait=" . urlencode($results["Portrait_ID"]) . "'><h3 id='header-underlined'>Aus dem Abschnitt \"Medium und Technik\": </h3></a><h4>".$results['Medium_Technique']."</h4></p><br/>";
                    }

                    if (mb_stristr($results['Tags'], $query) != false) {
                        $markupResults .= "<p><h4>#" . ++$counter . "</h4><a href='portraet.php?portrait=" . urlencode($results["Portrait_ID"]) . "'><h3 id='header-underlined'>Aus dem Abschnitt \"Kategorie\": </h3></a><h4>".$results['Tags']."</h4></p><br/>";
                    }

                    if (mb_stristr($results['Portrait_ID'], $query) != false) {
                        $markupResults .= "<p><h4>#" . ++$counter . "</h4><a href='portraet.php?portrait=" . urlencode($results["Portrait_ID"]) . "'><h3 id='header-underlined'>Aus dem Abschnitt \"Eintragsnummer in der Datenbank\": </h3></a><h4>".$results['Portrait_ID']."</h4></p><br/>";
                    }
            }


                $markupResults .= "</div>";

                $markup .= "<h2>Ihre Suche ergab " . $counter . " Treffer</h2>";

                echo $markup;
                echo $markupResults;



            } else {
                // Output the following message if there is no matching rows
                echo "<div class='col'><h2>Ihre Suche ergab leider keine Treffer!</h2></div>";
            }


        } else {
            // Output the following message if query is empty
            echo "<div class='col'><h2>Vorsicht, leere Suchanfrage!</h2></div>";
        }
?>









  </section>

   <!-- Main content section ends -->

<?php include('partials/footer.php');?>
