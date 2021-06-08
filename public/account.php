<!doctype html>

<html lang="fr">
<?php include("template/header.html"); ?>
<body>
    <?php include("template/navbar.html"); ?>
    <div class="card text-center mx-auto bg-light mb-3" style="width: 1000px; margin-top:50px">
    <div class="card-header bg-info text-white">
        <h3>Votre profile utilisateur</h3>
    </div>
    <div class="card-body text-center"></div>
    <h3 class="sucessField alertField SuccessInscription" id="SuccessInscription">Bravo, votre inscription a bien été prise en compte !</h3>
    <h6 class="sucessField alertField SuccessInscription">(redirection dans 5s...)</h6>

    <br>
    <h3> Informations personnelles</h3>
    <br>
    <form id="form_info">
        <div class="form-group ">
            <label for="staticUsername" class="col-sm-2 col-form-label">Nom d'utilisateur</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="staticUsername" value="Test">
            </div>
        </div>
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
            </div>
        </div>
  
</form>
    </div>
</div>
</div>































        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">
                <a href="/index.html"><img class="icon-image" src="logo/logo.png" alt="logo.png"></a>
            </span>
            <nav class="mdl-navigation">
                <div class="separator"></div>
                <span class="mdl-navigation__link">Information Section</span>
                <a class="mdl-navigation__link" href="/">Accueil</a>
                <a class="mdl-navigation__link notUser" href="/inscription.html">inscription</a>
                <a class="mdl-navigation__link" href="a_propos.html">A propos</a>
                <div class="separator onlyUser"></div>
                <span class="mdl-navigation__link onlyUser">User Section</span>
                <a class="mdl-navigation__link onlyUser" href="/account.html">Account</a>
                <a class="mdl-navigation__link onlyUser" href="/deconnection.php">Deconnection</a>
                <div class="separator onlyAdmin"></div>
                <span class="mdl-navigation__link onlyAdmin">Section admin</span>
                <a class="mdl-navigation__link onlyAdmin" href="">Validation pages</a>
            </nav>
        </div>
        <div class="mdl-layout__content">
            <div class=" mdl-grid" id="top">
                <div class="mdl-cell--12-col"><h2 style="text-align: center;">Votre profile utilisateur</h2></div>
                <div class="mdl-grid section_account" id='div_inscription'>


                    <div class="mdl-cell--12-col">&nbsp;</div>
                    <div class="mdl-cell--12-col">&nbsp;</div>

                    <div class="mdl-cell--3-col"></div>
                    <div class="mdl-cell--6-col"><h4>Informations personnelles</h4></div>
                    <div class="mdl-cell--3-col"></div>

                    <div class="mdl-cell--12-col">&nbsp;</div>
                    <div class="mdl-cell--3-col"></div>
                    <div class="mdl-cell--6-col"><h5>Nom d'utilisateur : <span id="account_username">Test</span></h5></div>
                    <div class="mdl-cell--3-col"></div>


                    <div class="mdl-cell--3-col"></div>
                    <div class="mdl-cell--6-col"><h5>Email : <span id="account_email">Test@gmail.com</span></h5></div>
                    <div class="mdl-cell--3-col"></div>
                    <div class="mdl-cell--12-col">&nbsp;</div>
                    <div class="mdl-cell--12-col">&nbsp;</div>
                </div>
                <div class="mdl-cell--12-col">&nbsp;</div>
                <div class="mdl-grid section_account" id="form_account">

                    <div class="mdl-cell--3-col"></div>
                    <div class="mdl-cell--6-col"><h5><h4>Changer votre mot de passe</h4></div>
                    <div class="mdl-cell--3-col"></div>
                    <div class="mdl-cell--12-col">&nbsp;</div>
                    <div class="mdl-cell--12-col">&nbsp;</div>

                    <div class="mdl-cell--3-col"></div>
                    <div class="mdl-cell--2-col">Mot de passe actuel<span>*</span> :</div>
                    <div class="mdl-cell--3-col">
                        <input class="mdl-textfield__input passwd_input" type="password" id="currentPassword" name="currentPassword" placeholder="Mot de passe actuelle" maxlength="50" minlength="6"></div>
                    <div class="mdl-cell--4-col"></div>

                    <div class="mdl-cell--12-col">&nbsp;<span class="alertField" id="alertCurrentPassword">Mot de passe incorrect</span></div>

                    <div class="mdl-cell--12-col">&nbsp;</div>
                    <div class="mdl-cell--12-col">&nbsp;</div>
                    <div class="mdl-cell--3-col"></div><div class="mdl-cell--2-col">
                        Nouveau mot de passe<span>*</span> :</div>
                        <div class="mdl-cell--3-col">
                        <input class="mdl-textfield__input passwd_input" type="password" id="passwordAccount" name="passwordAccount" placeholder="Nouveau mot de passe" maxlength="50" minlength="6"></div>
                        <div class="mdl-cell--4-col"></div>


                        <div class="mdl-cell--12-col">&nbsp;<span class="alertField" id="alertPassword_length">Le mot de passe doit faire 6 caractères minimum</span></div>

                    <div class="mdl-cell--12-col">&nbsp;</div>
                    <div class="mdl-cell--3-col"></div><div class="mdl-cell--2-col">
                        Vérification du nouveau mot de passe<span>*</span> :</div>

                        <div class="mdl-cell--3-col">
                                <input class="mdl-textfield__input passwd_input" type="password" id="passwordAccountVerif" name="passwordAccountVerif" placeholder="Vérification du nouveau mot de passe" maxlength="50" minlength="6"></div>
                        <div class="mdl-cell--4-col"></div>

                        <div class="mdl-cell--12-col">&nbsp;<span class="alertField" id="alertPassword">Les mots de passe ne correspondent pas</span></div>

                   <div class="mdl-cell--12-col" id="div_inscription">
                        <button id="btn_change_password" onclick="change_password()" class="mdl-button mdl-js- mdl-button--raised mdl-js-ripple-effect mdl-button--accent btn_insctiption">Changer mon mot de passe</button>
                    </div>
                    <div class="mdl-cell--12-col">&nbsp;<span class="alertField" id="SucessPassword">Les mots a été changé avec succes !</span></div>

                </div>




            </div>
        </div>
    </div>
</body>
</html>
