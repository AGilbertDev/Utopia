<!--------------------------------------------------------------------------------------------
    File: register.php
    Author: Alexandre Gilbert
    Description: User registration page.
--------------------------------------------------------------------------------------------->

    <!----------------------------------------------------------------------------------------
                                           Navigation bar        
    ----------------------------------------------------------------------------------------->
    <!-- External file -->
    <?php include 'navbar.html'?>

    <!----------------------------------------------------------------------------------------
                                          Registration form        
    ----------------------------------------------------------------------------------------->
    <section class="section container-fluid frm profile_frm bg-gray">
        <h2 class="txt-blue">Créer un profil</h2>

        <!-- Sign up form -->
        <form class="section-form" action="server/createUser.php" method="POST">
            <!-- First name -->
            <label for="fName">Prénom: <span style="color: red;">*</span></label>
            <input type="text" name="fName" placeholder="Prénom">
            <!-- Last name -->
            <label for="fName">Nom: <span style="color: red;">*</span></label>
            <input type="text" name="lName" placeholder="Nom">
            <!-- Email -->
            <label for="email">Courriel: <span style="color: red;">*</span></label>
            <input type="text" name="email" placeholder="Courriel">
            <!-- Username -->
            <label for="usr">Nom d'utilisateur: <span style="color: red;">*</span></label>
            <input type="text" name="usr" placeholder="Nom d'utilisateur">
            <!-- Password -->
            <label for="pwd">Mot de passe: <span style="color: red;">*</span></label>
            <input type="password" name="pwd" placeholder="Mot de passe">
            <!-- Last name -->
            <label for="pwdConfirm">Confirmation: <span style="color: red;">*</span></label>
            <input type="password" name="pwdConfirm" placeholder="Confirmer mot de passe">
            <!-- Submit button -->
            <button class="btn btn-primary" type="submit" name="submit">Créer le profil</button>
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