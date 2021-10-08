<!--------------------------------------------------------------------------------------------
    File: index.php
    Author: Alexandre Gilbert
    Description: Homepage for a (fictional) recruitment agency.
--------------------------------------------------------------------------------------------->

    <!----------------------------------------------------------------------------------------
                                        Navigation bar        
    ----------------------------------------------------------------------------------------->
    <!-- External file -->
    <?php include 'navbar.html'?>

    <!----------------------------------------------------------------------------------------
                                            Banner        
    ----------------------------------------------------------------------------------------->
    <div class="container-fluid">
        <div class="banner row row-eq-height">
            <div class="slide-img col col-12 col-lg-7">
                <img src="images/banner.jpg">
            </div>
            <div class="slide-text col col-12 col-lg-5">
                <div class="intro-slide jumbotron bg-blue">
                    <h1 class="display-4">L'humain au centre de nos préoccupations</h1>
                    <p class="lead">Nous travaillons POUR les professionels et les aidons à établir des 
                        liens de qualité avec des employeurs qui répondent à LEURS besoins.
                    </p>
                    <button class="btn btn-primary" type="button">Envoyez-nous votre CV!</button>
                </div>
            </div>
        </div>
    </div>
    
    <!----------------------------------------------------------------------------------------
                                         Intro Section        
    ----------------------------------------------------------------------------------------->
    <!-- Présentation de l'agence -->
        <div class="section container-fluid bg-white">
            <!-- Titre -->
            <div class="section-title row txt-blue">
                <div class="col">
                    <h1>Pas une agence de placement, mais un allié pour votre carrière</h1>
                </div>
            </div>
            <!-- Citation -->
            <div class="section-quote row">
                <blockquote class="blockquote col text-justify">
                    <p>« Nous avons compris qu'en s'assurant du bien-être de nos employés, ils brillent chaque fois qu'ils visitent nos clients. La réputation se bâtit sur l'entraide et la confiance! »</p>
                    <p class="quote-source text-right">- Michal Bartlomiej, fondateur</p>
                </blockquote>
            </div>
            <div class="section-cards row row-eq-height">
                <div class="card col col-12 col-md-6 col-xl-4 mw-400">
                    <div class="card-body">
                        <div class="card-title txt-blue">
                            <h3>Aucune commission sur le placement de personnel</h3>
                        </div>
                        <div class="card-text text-justify">
                            <p>
                                Cela signifie que nous sommes réellement à l’écoute de vos besoins et que nous trouvons exactement ce qu’il vous faut. Nos services 
                                incluent un coaching personnalisé pour vous aider dans l'atteinte de vos objectifs. De plus, nous offrons des emplois permanents chez nous
                                ou la possibilité d'être embauché chez le client. Nos employés bénéficient d'une gamme complète d'avantages et des salaires avantageux.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card col col-12 col-md-6 col-xl-4 mw-400">
                    <div class="card-body">
                        <div class="card-title txt-blue">
                            <h3>Prêt à relever n'importe quel défi de votre entreprise</h3>
                        </div>
                        <div class="card-text text-justify">
                            <p>
                                Si vous êtes un employeur et que vous faites face à des obstacles, nous voulons vous aider. Que vous soyiez confronté à une pénurie 
                                de main d'oeuvre, à un trop grand roulement d'employés, ou que votre entreprise soit en pleine croissance et nécéssite un recrutement 
                                massif d'employés, notre équipe saura trouver la solution. 
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card col col-12 col-md-6 col-xl-4 mw-400">
                    <div class="card-body">
                        <div class="card-title txt-blue">
                            <h3>Beaucoup de services pour vous aider dans vos projets</h3>
                        </div>
                        <div class="card-text text-justify">
                            <p>
                                Nous offrons de la formation dans plusieurs domaines aux professionels. Nous trouverons pour vous la formation technique qu'il vous faut ou 
                                nous vous aiderons à acquérir des compétences générales pour vous démarquer. Si vous êtes un employeur, nos spécialistes élaboreront pour 
                                vous une stratégie de marketing adaptée à votre situation. Nous allons aussi dans les entreprises pour former les équipes de RH aux techniques 
                                récentes de marketing. 
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="btn-center col">
                    <button class="btn btn-primary" type="button">En savoir plus</button>
                </div>
            </div>
        </div>
    
    <!----------------------------------------------------------------------------------------
                                        Stats Section        
    ----------------------------------------------------------------------------------------->
    <div class="chiffres section container-fluid bg-image-homepage-green text-center">
        <div class="section-title row">
            <div class="col">
                <h1>Utopia en chiffres</h1>
            </div>
        </div>
        <div class="section-cards row">
            <div class="card col col-12 col-md-6 col-lg-3 bg-image-homepage-green mw-400">
                <div class="circle-border">
                    <h3>0%</h3>
                </div>
                <p>Commission</p>
            </div>
            <div class="card col col-12 col-md-6 col-lg-3 bg-image-homepage-green mw-400">
                <div class="circle-border">
                    <h3>91%</h3>
                </div>
                <p>Rétention des postes</p>
            </div>
            <div class="card col col-12 col-md-6 col-lg-3 bg-image-homepage-green mw-400">
                <div class="circle-border">
                    <h3>3 192</h3>
                </div>
                <p>Entreprises clientes</p>
                
            </div>
            <div class="card col col-12 col-md-6 col-lg-3 bg-image-homepage-green mw-400">
                <div class="circle-border">
                    <h3>9 476</h3>
                </div>
                <p>Professionnels employés</p>
            </div>
        </div>
    </div>

    <!----------------------------------------------------------------------------------------
                                        Call to action        
    ----------------------------------------------------------------------------------------->
    <div class="container-fluid">
        <div class="row">
            <div class="jumbotron bg-white col-12 col-lg-6 text-center">
                <div class="section-title">
                    <h1 class="txt-blue">Vous êtes un professionel?</h1>
                </div>
                <p>Vous cherchez un emploi?</p>
                <div class="btn-center col">
                    <button class="btn btn-primary" type="button">Créez votre profil</button>
                </div>
            </div>
            <div class="jumbotron bg-white col-12 col-lg-6 text-center">
                <div class="section-title">
                    <h1 class="txt-blue">Vous êtes un employeur?</h1>
                </div>
                <p>Vous cherchez des employés?</p>
                <div class="btn-center col">
                    <button class="btn btn-primary" type="button">Contactez-nous</button>
                </div>
            </div>
        </div>
    </div>
    
    <!----------------------------------------------------------------------------------------
                                            Footer        
    ----------------------------------------------------------------------------------------->
    <?php include 'footer.html'?>