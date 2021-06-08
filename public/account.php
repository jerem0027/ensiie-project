<!doctype html>

<html lang="fr">
<?php include("template/header.html"); ?>
<body>
    <?php include("template/navbar.html"); ?>
    <div class="card text-center mx-auto bg-light mb-3" style="width: 1000px; margin-top:50px">
        <div class="card-header bg-info text-white">
            <h3>Mon profile utilisateur</h3>
        </div>
        <div class="card-body text-center">
            <br>
            <form id="form_account" class="col-sm-12" method="POST" onsubmit="return false;">
                <div class="d-flex h-100">
                    <div class="m-auto">
                        <h3 class="text-info"> Informations personnelles</h3>
                        <br>
                        <div class="form-group">
                            <div>
                                <h7 class="col-sm-2">Nom d'utilisateur : </h7>
                                <span class="col-sm-10" id="account_username">ERROR</span>
                            </div>
                            <div>
                                <h7 class="col-sm-2">Email : </h7>
                                <span class="col-sm-10" id="account_email">ERROR</span>
                            </div>
                            <br>
                            <br>
                            <div class="form-group" id="div_inscription">
                                <button id="btn_remove_account" class="btn btn-info text-white" onclick="delete_account()">Supprimer mon compte</button>
                            </div>
                            <br>
                            <br>
                        </div>
                        <h3 class="text-info"> Changer mon mot de passe</h3>
                        <br>
                        <div class="form-group">
                            <label for="email_form" class="form-label">Mot de passe actuel :</label>
                            <div class="input-group">
                                <input type="password" class="form-control passwd_input" type="password" id="currentPassword" name="currentPassword" placeholder="Mot de passe actuel" maxlength="50" minlength="6">
                            </div>
                            <br>
                            <span class="alertField" id="alertCurrentPassword">Mot de passe incorrect</span>
                        </div>
                        <div class="form-group">
                            <label for="email_form" class="form-label">Nouveau mot de passe :</label>
                            <div class="input-group">
                                <input type="password" class="form-control passwd_input" type="password" id="passwordAccount" name="passwordAccount" placeholder="Nouveau mot de passe" maxlength="50" minlength="6">
                            </div>
                            <br>
                            <span class="alertField" id="alertPassword_length">Le mot de passe doit faire 6 caractères minimum</span>
                        </div>
                        <div class="form-group">
                            <label for="email_form" class="form-label">Confirmation du nouveau mot de passe :</label>
                            <div class="input-group">
                                <input type="password" class="form-control passwd_input " type="password" id="passwordAccountVerif" name="passwordAccountVerif" placeholder="Confirmation du nouveau mot de passe" maxlength="50" minlength="6">
                            </div>
                            <br>
                            <span class="alertField" id="alertPassword">Les mots de passe ne correspondent pas</span>
                            <span class="alertField sucessField" id="SucessPassword">Votre mot de passe a été changé avec succes !</span>
                        </div>
                        <div class="form-group" id="div_inscription">
                            <button id="btn_change_password" class="btn btn-info text-white" onclick="send_new_password()">Changer mon mot de passe</button>
                        </div>
                        <br>
                        <br>
                        <h3 class="text-info"> Changer mon adresse email</h3>
                        <br>
                        <div class="form-group">
                            <label for="email_form" class="form-label">Email :</label>
                            <div class="input-group">
                                <input type="text" class="form-control" type="text" id="emailAccount" name="emailAccount" placeholder="Nouvelle adresse email" maxlength="50" minlength="3">
                            </div>
                            <br>
                            <span class="alertField" id="alertMail">L'adresse email n'est pas valide</span><span class="alertField" id="alertMailUse">L'adresse email est déjà utilisée</span>
                            <span class="alertField sucessField" id="sucessEmail">Votre adresse email a été changé avec succes !<br></span>
                        </div>
                        <div class="form-group" id="div_inscription">
                            <button id="btn_change_password" class="btn btn-info text-white" onclick="send_new_email()">Changer mon adresse email</button>
                        </div>
            </form>
        </div>
    </div>
    </div>
    </div>
    <script>affichage_info_user();</script>
</body>

</html>