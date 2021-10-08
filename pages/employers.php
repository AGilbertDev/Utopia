<!--------------------------------------------------------------------------------------------
    File: employers.php
    Author: Alexandre Gilbert
    Description: Page that contains information for employers.
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
                <h1 class="display-4">Notre équipe est là pour vous</h1>
            </div>
        </div>
        <div class="section-paragraph row text-justify">
            <p class="lead">
                Répondre à vos besoins est notre priorité. Nous pouvons créer pour vous une campagne 
                de recrutement ou former vos équipe aux nouvelles techniques de marketing. Nous pouvons
                trouver des solutions aux défis de votre entreprise et nous avons les meilleurs candidats
                à vous présenter.
            </p>
        </div>
        <div class="btn-center col">
                <button class="btn btn-blue btn-primary" type="button">Voir nos services</button>
        </div>
    </div>

    <!----------------------------------------------------------------------------------------
                                     Challenges Section       
    ----------------------------------------------------------------------------------------->
    <div class="section container-fluid bg-gray text-center">
        <div class="section-title row">
            <div class="col txt-blue">
                <h1>Défis auxquels nous avons l'habitude de faire face</h1>
            </div>
        </div>
        <div class="section-list text-justify">
            <ul class="list-group">
                <li class="list-group-item bg-gray">
                    <img src="../images/binoculars.svg" alt="">
                    <p class='lead'>Pénurie de talents</p>
                </li>
                <li class="list-group-item bg-gray">
                    <img src="../images/refresh.svg" alt="">
                    <p class='lead'>Rétention d'employés</p>
                </li>
                <li class="list-group-item bg-gray">
                    <img src="../images/profits.svg" alt="">
                    <p class='lead'>Forte croissance</p>
                </li>
                <li class="list-group-item bg-gray">
                    <img src="../images/question.svg" alt="">
                    <p class='lead'>Insérez un défi</p>
                </li>
            </ul>
        </div>
    </div>

    <!----------------------------------------------------------------------------------------
                                     Offer Section       
    ----------------------------------------------------------------------------------------->
    <div class="section container-fluid text-center">

        <div class="section-cards row">

            <div class="card col-10 col-md-6 col-lg-4">
                <div class="card-body">
                    <div class="card-title txt-blue">
                        <h1>La qualité avant la quantité</h1>
                    </div>
                    <div class="card-text text-justify">
                        <p>
                            Aucune commission sur le placement de nos employés, ça veut dire que nous ne 
                            vous donnerons pas n’importe quelle offre d'emploi! Nous sommes réellement à 
                            l’écoute de vos besoins et nous vous aideront tout au long de vos recherches. 
                            Notre succès repose sur la qualité de nos mises en relation entre candidats 
                            et employeurs. Nous nous occupons de trouver l'entreprise parfaite pour 
                            vous, et nous vous faisons confiance!
                        </p>
                    </div>
                </div>
            </div>

            <div class="card col-10 col-md-6 col-lg-4">
                <div class="card-body">
                    <div class="card-title txt-blue">
                        <h1>Une multitude de services</h1>
                    </div>
                    <div class="card-text text-justify">
                        <p>
                            Tous nos candidats ont droit à un accompagnement personnalisé. Dès le début de
                            vos démarches, nous discuterons avec vous de vos objectifs et nous vous offrirons
                            des formations techniques pour parfaire vos compétences, comme la gestion de projets.
                            Nous offrons aussi des formation visant à entrainer vos compétences générales, comme 
                            le leadership, la communication et le travail d'équipe.
                        </p>
                    </div>
                </div>
            </div>

            <div class="card col-10 col-md-6 col-lg-4">
                <div class="card-body">
                    <div class="card-title txt-blue">
                        <h1>Gamme complète d'avantages</h1>
                    </div>
                    <div class="card-text text-justify">
                        <p>
                            Lorsque vous envoyez votre candidature, vous avez la possibilité d'être employé par 
                            nous, ou alors par l'entreprise avec qui vous faites affaires. Lorsque vous travaillez
                            avec nous, nous vous offrons plusieurs avantages, comme les assurances et un programme
                            pour votre retraite. Mais ce n'est que la base! Nous offrons plus que ça!
                        </p>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="row">
            <div class="btn-center col">
                <button class="btn btn-primary" type="button">Voir nos services</button>
            </div>
        </div>

    </div>

    <!----------------------------------------------------------------------------------------
                                        Contact Section       
    ----------------------------------------------------------------------------------------->
    <div class="container-fluid">
        <div class="jumbotron bg-blue text-center">
            <div class="section-title">
                <h1>Donnez-vous la chance d'être vu</h1>
            </div>
            <div class="section-paragraph">
                <p class="lead">
                    Nous élaborerons avec vous une stratégie marketing pour vous rendre visible auprès 
                    des professionels qui cherchent un emploi sur plusieurs plateformes.
                </p>
            </div>
            <div class="btn-center col">
                <button class="btn btn-blue btn-primary" type="button">Entrer en contact</button>
            </div>
        </div>
    </div>

    <!----------------------------------------------------------------------------------------
                                            Footer        
    ----------------------------------------------------------------------------------------->
    <?php include '../footer.html'?>