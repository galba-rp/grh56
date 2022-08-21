<?php
include 'app/views/FRONT/layouts/head.php';
include_once 'app/views/FRONT/layouts/header.php';
?>
<section  class="section" id="account_section">
    <div class="account_card">
        <form class="account_form flexcolumn"  id="personal_form" action="accountUpdate" method="post">
            <label for="update_name">PRENOM :</label>
            <input type="text"  name="update_name" class="log_in_field" id="update_name" value="<?php echo($_SESSION['name'])?>">
            <span class="form_error"><?= $errors['name'] ?></span>
            <label for="update_surname">NOM :</label>
            <input type="text"  name="update_surname" class="log_in_field"  id="update_surname" value="<?php echo($_SESSION['surname'])?>">
            <span class="form_error"><?= $errors['surname'] ?></span>
            <label for="update_email">EMAIL :</label>
            <input type="email"  name="update_email" class="log_in_field" id="update_email" value="<?php echo($_SESSION['email'])?>">
            <span class="form_error"><?= $errors['email'] ?></span>
            <button type="submit" class="button">Modifier</button>
        </form>
    </div>
    <div class="account_card">
        <form class="account_form flexcolumn"  id="password_form" action="passwordUpdate" method="post">
            <label for="old_password">ANCIEN MOT DE PASSE :</label>
            <input type="text"  name="old_password" class="log_in_field" id="old_password" placeholder="Ancien mot de passe ...">
            <span class="form_error"><?= $errorsPass['old_pass'] ?></span>
            <label for="new_password">NOUVEAU MOT DE PASSE :</label>
            <input type="text"  name="new_password" class="log_in_field" id="new_password" placeholder="Votre nouveau mot de passe ...">
            <span class="form_error"><?= $errorsPass['new_pass'] ?></span>
            <button type="submit" class="button">Modifier</button>
        </form>
    </div>
    <div class="account_card ">
        <form class="account_form flexcolumn" action="index.php?action=delete" id="delete_form" method="post"> 
            <p id="delete_account_text">En appuyant sur ce bouton, vous comprenez que toutes vos données seront effacées et que si vous
voulez vous connecter à nouveau, il vous faudra créer un nouveau compte.</p>
            <div>  
                <input type="radio" name="delete_account" value="delete_radio">
                <span class="red_text">Cocher ici pour confirmer </span>
                <p class="red_text"><?=$checkHere?></p>
            </div> 
            <button type="submit" id="delete_button"> Fermer mon compte</button>
        </form>
    </div> 
</section>
<?php include 'app/views/FRONT/layouts/footer.php' ?>   

