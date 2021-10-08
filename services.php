<!--------------------------------------------------------------------------------------------
    File: services.php
    Author: Alexandre Gilbert
    Description: Page that contains detailed information about the services offered.
--------------------------------------------------------------------------------------------->

    <!----------------------------------------------------------------------------------------
                                           Navigation bar        
    ----------------------------------------------------------------------------------------->
    <!-- External file -->
    <?php include '../navbar.html'?>

    <!----------------------------------------------------------------------------------------
                                              Summary       
    ----------------------------------------------------------------------------------------->
    <div class="section container-fluid bg-blue">
        <div class="section-title row">
            <div class="col">
                <h1 class="display-4">Nous avons beaucoup à vous offrir!</h1>
            </div>
        </div>
        <div class="section-paragraph row text-justify">
            <p class="lead">
                Que vous soyez un professionel à la recherche d'un emploi ou une entreprise, 
                nous avons toute une panoplie de services pour vous aider! Il nous fera plaisir
                d'être là pour vous.
            </p>
        </div>
    </div>

    <!----------------------------------------------------------------------------------------
                                       Services Information       
    ----------------------------------------------------------------------------------------->
    <div class="section container-fluid">
        <div class="slide-reverse row row-eq-height">
            <div class="slide-img-small col col-12 col-lg-6">
                <img src="images/interview.png">
            </div>
            <div class="slide-text col col-12 col-lg-5">
                <div class="jumbotron bg-white">
                    <h1 class="txt-blue">Placement de professionels</h1>
                    <p class="lead">
                        Nous mettons les candidats en relation avec des entreprises et les aidons 
                        dans leur recherche d’emploi.
                    </p>
                </div>
            </div>
        </div>

        <div class="slide row row-eq-height">
            <div class="slide-img-small col col-12 col-lg-6">
                <img src="images/goals.png">
            </div>
            <div class="slide-text col col-12 col-lg-5">
                <div class="jumbotron bg-white">
                    <h1 class="txt-blue">Coaching personnalisé</h1>
                    <p class="lead">
                        Nous soutenons les candidats en tout temps. Nous les aidons dans la création 
                        de leur CV, leur recherche d’emploi et leur offrons de la formation pour acquérir 
                        des compétences techniques ou interpersonnelles. Suivi régulier pour assurer 
                        l’atteinte des objectifs de carrières et le succès au sein de l’entreprise.
                    </p>
                </div>
            </div>
        </div>

        <div class="slide-reverse row row-eq-height">
            <div class="slide-img-small col col-12 col-lg-6">
                <img src="images/meeting.png">
            </div>
            <div class="slide-text col col-12 col-lg-5">
                <div class="jumbotron bg-white">
                    <h1 class="txt-blue">Marketing RH</h1>
                    <p class="lead">
                        Nous pouvons vous aider à être plus visibles, à attirer des talents et à vous 
                        démarquer en créant une stratégie de marketing sur plusieurs plateformes.
                    </p>
                </div>
            </div>
        </div>

        <div class="slide row row-eq-height">
            <div class="slide-img-small col col-12 col-lg-6">
                <img src="images/conference.png">
            </div>
            <div class="slide-text col col-12 col-lg-5">
                <div class="jumbotron bg-white">
                    <h1 class="txt-blue">Formation aux RH en entreprise</h1>
                    <p class="lead">
                        Nous offrons de la formation aux entreprises dans l’utilisation de stratégies 
                        de marketing et dans l’acquisition de talents. Nous vous aidons à vous démarquer et 
                        vous montrons comment restez visible et pertinents sur plusieurs plateformes et sur 
                        les réseaux sociaux.
                    </p>
                </div>
            </div>
        </div>
    </div>

<!----------------------------------------------------------------------------------------
                                    Call to action        
----------------------------------------------------------------------------------------->
<div class="container-fluid bg-blue">
    <div class="row">
        <div class="jumbotron col-12 col-lg-6 bg-blue text-center">
            <div class="section-title">
                <h1>Pour les professionels</h1>
            </div>
            <div class="btn-center col">
                <button class="btn btn-blue btn-primary" type="button">Créez votre profil</button>
            </div>
        </div>
        <div class="jumbotron col-12 col-lg-6 bg-blue text-center">
            <div class="section-title">
                <h1>Pour les employeurs</h1>
            </div>
            <div class="btn-center col">
                <button class="btn btn-blue btn-primary" type="button">Contactez-nous</button>
            </div>
        </div>
        </div>
    </div>
</div>

    <!----------------------------------------------------------------------------------------
                                               Footer        
    ----------------------------------------------------------------------------------------->
    <?php include 'footer.html'?>