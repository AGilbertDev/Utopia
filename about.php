<!--------------------------------------------------------------------------------------------
    File: about.php
    Author: Alexandre Gilbert
    Description: Information about the agencie's objectives and core values.
--------------------------------------------------------------------------------------------->

    <!----------------------------------------------------------------------------------------
                                           Navigation bar        
    ----------------------------------------------------------------------------------------->
    <!-- External file -->
    <?php include 'navbar.html'?>
    
    <!----------------------------------------------------------------------------------------
                                              Summary       
    ----------------------------------------------------------------------------------------->
    <div class="section container-fluid bg-blue">
        <div class="section-title row">
            <div class="col">
                <h1 class="display-4 txt-blue">À propos de nous</h1>
            </div>
        </div>
        <div class="section-paragraph row text-justify">
            <p class="lead">
                Découvrez les valeurs qui sont au coeur de notre entreprise et qui nous poussent à nous dépasser.
            </p>
        </div>
    </div>

    <!----------------------------------------------------------------------------------------
                                       Company philosophy       
    ----------------------------------------------------------------------------------------->
    <div class="section container-fluid">
        <div class="slide row row-eq-height">
            <div class="slide-img-small col col-12 col-lg-6">
                <img src="images/handshake.png">
            </div>
            <div class="slide-text col col-12 col-lg-5">
                <div class="jumbotron bg-white">
                    <h1 class="txt-blue">Notre philosophie</h1>
                    <p class="lead">
                        On a compris que les méthodes de recrutement utilisées par les entreprises devenaient 
                        de plus en plus obsolètes et que l’insatisfaction des employés face à leur employeur 
                        ou vice-versa devenait un obstacle au succès de chacun. Nous avons décidé de faire 
                        autrement. Nous voulions rétablir la confiance et l’harmonie entre employeurs et employés. 
                        En s’assurant de la qualité de vie et du succès des employés, ils s’investissent eux-mêmes 
                        dans le succès des entreprises.
                    </p>
                </div>
            </div>
        </div>

        <div class="slide-reverse row row-eq-height">
            <div class="slide-img-small col col-12 col-lg-6">
                <img src="images/presentation.png">
            </div>
            <div class="slide-text col col-12 col-lg-5">
                <div class="jumbotron bg-white">
                    <h1 class="txt-blue">Notre objectif</h1>
                    <p class="lead">
                        Soutenir les professionnels dans leur cheminement de carrière et être à l’écoute de leur 
                        besoin pour leur offrir l’emploi qui leur correspond le plus. Offrir de la formation et 
                        du soutien pour aider chacun à acquérir des compétences supplémentaires. Répondre aux 
                        besoins des entreprises en mettant les mettant en relation avec les meilleurs professionnels 
                        sur le marché.
                    </p>
                </div>
            </div>
        </div>
    </div>

     <!----------------------------------------------------------------------------------------
                                            Contact Section       
    ----------------------------------------------------------------------------------------->
    <div class="container-fluid">
        <div class="jumbotron bg-blue text-center">
            <div class="section-title">
                <h1>Entrez en contact</h1>
            </div>
            <div class="btn-center col">
                <button class="btn btn-blue btn-primary" type="button">Contacter!</button>
            </div>
        </div>
    </div>

    <!----------------------------------------------------------------------------------------
                                               Footer        
    ----------------------------------------------------------------------------------------->
    <?php include 'footer.html'?>