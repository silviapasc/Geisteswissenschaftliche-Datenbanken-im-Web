<?php include('partials/main-menu.php');?>

  <!-- Main content section starts -->
  <section class="main">

    <div class="col">
      <h1>Fayumporträts – Porträts aus dem alten Ägypten</h1>
        <p>Digitale Bildgalerie mit wertvollen Bildwerken der antiken römischen Malerei</p>
    </div>

    <div class='gallery-wrap'>
        <i id="backBtn" class="fa fa-chevron-circle-left"></i>

        <div class='gallery'>

        <?php

             // Select all the records contained within the "portrait" table, sorting them randomly
             $result = mysqli_query($conn, "SELECT * FROM portrait ORDER BY rand()");

             // The while-loop is repeating itself as long as there is data to be fetched
             while ($row =  mysqli_fetch_assoc($result)) {

                $markup .= "<div><a href='portraet.php?portrait=" . urlencode($row["Portrait_ID"]) . "'>
                <img src='img/". $row["Portrait_Image_File"] . "' alt='Image of ". $row['Title'] . "'> </a></div>";
                }

             echo $markup;

        ?>

        </div>

        <i id="nextBtn" class="fa fa-chevron-circle-right"></i>
    </div>

    </section>

    <!-- Main content section ends -->

    <!-- "portrait-info" section starts -->
    <section id="portrait-info" class="portrait-info">

        <div class="row">
           <div class="col">
            <img class="home-img" src='img/Egypt_Faiyum_locator_map.svg' alt='Geographical Map of Egypt_Faiyum'>
                <span id="sub-heading-home" class='sub-heading'>Bildquelle: </span><span><a class="img-source" href='https://commons.wikimedia.org/wiki/File:Egypt_Faiyum_locator_map.svg'>
                https://commons.wikimedia.org/wiki/File:Egypt_Faiyum_locator_map.svg</a></span>
           </div>
           <div class="col">
            <h1>Die Porträts</h1>
                <p class="home">Die <i>Fayumporträts</i>, auch bekannt als <i>Mumienporträts</i>, sind Porträts, die auf Holztafeln
                mit der Tempera- oder Enkaustik-Technik, mit impressionistischem Stil und Blick für das Detail, gemalt
                und in die Mumienumhüllung eingewickelt wurden. Von den etwa 900 bekannten Exemplaren zeigen die meisten
                eine Person im Brust- oder Kopfbildnis in Frontalansicht, die dem/der einbalsamierten Verstorbenen tatsächlich entspricht.
                Die Fayumporträts werden heute in den wichtigsten Museen der Welt aufbewahrt und bleiben trotz der Lücken
                und unbeantworteten Fragen zu ihrem Zustand und Kontext ein unbestrittenes und einzigartiges Zeugnis der antiken römischen Malerei.</p>
           </div>

        </div>

        <div class="row">
            <div class="col">
            <h1>Die Geschichte</h1>
                <p class="home">Die Geschichte der Fayumporträts ist eine fesselnde Geschichte, die nicht nur mit der Faszination
                zu tun hat, die solche Meisterwerke an sich und aufgrund ihres antiken Ursprungs ausüben,
                sondern auch, weil sie selbst von unvorhersehbaren Aspekten, Verlusten und Entdeckungen geprägt ist,
                die in den fernen 1600er Jahren begannen und in wechselnden Phasen auftraten.</br>
                Die Fayumporträts stammen aus der Zeit, als Ägypten eine Provinz des Römischen Reiches war, indem
                ihre weitverbreitete Herstellung am Ende des letzten vorchristlichen Jahrhunderts oder zu Beginn
                des ersten nachchristlichen Jahrhunderts anscheinend begann und im 3. Jahrhundert wahrscheinlich endete.
                Die Porträts wurden hauptsächlich in den Nekropolen des Fayyum-Beckens und in Städten wie Antinoopolis und
                Hawara gefunden, wobei sie dank des ägyptischen Klimas gut erhalten blieben.
                Trotz möglicher Einflüsse aus und Vermischung mit der ägyptischen, griechischen, byzantinischen und christlichen Kultur,
                sind die Fayumorträts künstlerisch römischen Ursprungs.</p>
           </div>
           <div class="col">
                <img class="home-img" src='img/Engraving_of_finding_mummies_in_Sakkara_by_Pietro_Della_Valle.gif' alt='Image of Engraving_of_finding_mummies_in_Sakkara_by_Pietro_Della_Valle'>
                <span id="sub-heading-home" class='sub-heading'>Bildquelle: </span><span><a class="img-source" href='https://commons.wikimedia.org/wiki/File:Engraving_of_finding_mummies_in_Sakkara_by_Pietro_Della_Valle.gif?uselang=de#Lizenz'>
                https://commons.wikimedia.org/wiki/File:Engraving_of_finding_mummies_in_Sakkara_by_Pietro_Della_Valle.gif?uselang=de#Lizenz</a></span>
           </div>
        </div>

        <div class="row">
           <div class="col">
            <h1>Das Webprojekt</h1>
                <p class="home">Das vorliegende Webprojekt basiert auf einer Datenbank, in der die Bilder und entsprechenden Informationen
                 von 9 Fayumporträts gesammelt wurden. Durch die Verwendung der Programmiersprachen PHP, HTML, CSS und Javascript
                 wurde ein digitaler und minimal interaktiver Katalog realisiert, dank dessen die Benutzer zunächst die Bilder
                 betrachten, die wichtigsten Daten zu ihnen suchen und auswählen und von diesen aus auf externe Quellen zurückgreifen
                 können, die jedenfalls mit den gesammelten Bildern in Verbindung stehen. Die Programmierung basierte insbesondere auf den
                 grafischen und dynamischen Aspekten des Webprojekts.</p>
           </div>

        </div>

    </section>

    <!-- "portrait-info" section ends -->



    <script type='text/javascript'>

        /* Scroll Container */
        let scrollContainer = document.querySelector(".gallery");
        let backBtn = document.getElementById("backBtn");
        let nextBtn = document.getElementById("nextBtn");

        scrollContainer.addEventListener("wheel", (evt) => {
            evt.preventDefault();
            scrollContainer.scrollLeft += evt.deltaY;
            scrollContainer.style.scrollBehavior = "auto";
        });

        nextBtn.addEventListener("click", () => {
            scrollContainer.style.scrollBehavior = "smooth";
            scrollContainer.scrollLeft += 900;
        });

        backBtn.addEventListener("click", () => {
            scrollContainer.style.scrollBehavior = "smooth";
            scrollContainer.scrollLeft -= 900;
        });

    </script>



<?php include('partials/footer.php');?>