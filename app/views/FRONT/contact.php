<?php 
include 'app/views/FRONT/layouts/head.php';
include_once 'app/views/FRONT/layouts/header.php';
?>
<main>
<section class="normal_width main_container">
    <div id="contact_section">
        <h1 class="center">Contactez nous </h1>
        <form class="flexcolumn" id="contact_form" action="send"  method="post">
            <label for="contact_name" class="label" id="first_line">Prénom :</label>
            <input type="text" name="contact_name" class="contact_field" id="contact_name" placeholder="Votre prénom ..." value = <?php if(isset($_POST['contact_name'])) echo $_POST['contact_name'] ?>>
            <span class="form_error"><?= $errorsContact[0] ?></span>
            <label for="contact_surname" class="label">Nom :</label>
            <input type="text" name="contact_surname" class="contact_field" id="contact_surname" placeholder="Votre nom ..." value = <?php if(isset($_POST['contact_surname'])) echo $_POST['contact_surname'] ?>>
            <span class="form_error"><?= $errorsContact[1] ?></span>
            <label for="contact_email" class="label">Adresse mail :</label>
            <input type="email" name="contact_email" class="contact_field" id="contact_email" placeholder="Votre adresse mail ..." value = <?php if(isset($_POST['contact_email'])) echo $_POST['contact_email'] ?>>
            <span class="form_error"><?= $errorsContact[2] ?></span>
            <label for="contact_subject" class="label">Objet :</label>
            <input type="text" name="contact_subject" class="contact_field" id="contact_subject" placeholder="Objet..." value = <?php if(isset($_POST['contact_subject'])) echo $_POST['contact_subject'] ?>>
            <span class="form_error" ><?= $errorsContact[3] ?></span>
            <label for="contact_message" class="label">Votre message ici :</label>
            <textarea name="contact_message" class="contact_field" id="contact_message"><?php if(isset($_POST['contact_message'])) echo $_POST['contact_message'] ?></textarea>
            <span class="form_error" ><?= $errorsContact[4] ?></span>
            <button type="submit" id="send_message" class="button">Envoyer</button>
        </form>
    </div>
</section>
</main>
<?php include 'app/views/FRONT/layouts/footer.php' ?>   