<!--------------------------------------------------------------------------------------------
    File: login.php
    Author: Alexandre Gilbert
    Description: User login page.
--------------------------------------------------------------------------------------------->

    <!----------------------------------------------------------------------------------------
                                           Navigation bar        
    ----------------------------------------------------------------------------------------->
    <!-- External file -->
    <?php include 'navbar.html'?>

    <!----------------------------------------------------------------------------------------
                                           Connection form        
    ----------------------------------------------------------------------------------------->
    <section class="section container-fluid frm profile_frm bg-gray">
        <h2 class="txt-blue">Se connecter</h2>

        <!-- Sign up form -->
        <form class="section-form" action="server/loginUser.php" method="POST">
            <!-- Username -->
            <label for="usr">Nom d'utilisateur:</label>
            <input type="text" name="usr" placeholder="Nom d'utilisateur">
            <!-- Password -->
            <label for="pwd">Mot de passe:</label>
            <input type="password" name="pwd" placeholder="Mot de passe">
            <!-- Submit button -->
            <button class="btn btn-primary" type="submit" name="submit">Connexion</button>
        </form>

        <!-- TODO: 
            - Create form validation in php 
            - Create error message 
        -->
        
    </section>

    <!----------------------------------------------------------------------------------------
                                               Footer        
    ----------------------------------------------------------------------------------------->
    <?php include 'footer.html'?>