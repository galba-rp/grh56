<header>
    <div class="header_main" id="header">
        <a href="home" title="Retour à l'accueil"><img class="logo fade_in" src="app/public/images/logo_s.png" alt="GRH formation logo"></a>
        <div role="button" id='burger_button' onclick="hamburgerBtn()"> 
            <div>MENU</div>
            <div id='burger_icon'>
                <div id='bar1'></div>
                <div id='bar2'></div>
                <div id='bar3'></div>
            </div>
       </div>
        <nav id="top_menu" aria-label="top menu">
            <ul id="top_men_ul">
                
            <?php //  conditions to  show or hide navigation menu tabs depending on if user or admin is logged in or not.
                if(isset($_SESSION['user']) && $_SESSION['status'] == '1' && $_GET['action'] !== 'home'):
                    $show3 = $show6 = $show5 = 'main_menu_link';
                    $show1 = $show4 =  $show2 =  'main_menu_link_connected';

                elseif(isset($_SESSION['user']) && $_SESSION['status'] == '1'):
                    $show1 = $show3 = $show4 = $show5 ='main_menu_link';
                    $show2 = $show6 = 'main_menu_link_connected';

                elseif(isset($_SESSION['user']) && $_SESSION['status'] == '0'):

                    if($_GET['action'] != 'student' && $_GET['action'] != 'account'):
                        $show2 = $show6 ='main_menu_link_connected';
                        $show1 = $show3 = $show4 = $show5 =  'main_menu_link';

                    elseif($_GET['action'] == 'student'):
                        $show1 = $show3 = $show4 =  $show6 = 'main_menu_link';
                        $show5 = $show2 = 'main_menu_link_connected';  

                    else:
                        $show1 = $show3 = $show4 =  $show5= $show6 = 'main_menu_link';
                        $show6 =  $show2 = 'main_menu_link_connected';  
                    endif;

                else:
                    $show1 = $show2 = 'main_menu_link fade_menu';
                    $show3 = $show4 =  $show5 = $show6 ='main_menu_link_connected ';

                endif;
                    ?>
                <li class="<?php echo($show1)?>"><a href="home" class="menu_item" id="home">ACCUEIL</a></li>
                <li class="<?php echo($show1)?>"><a href="about" class="menu_item" id="about">&#192; PROPOS</a></li>
                <li class="<?php echo($show1)?> dropdown">
                    <div class="menu_item" id="courses">LES COURS</div> 
                        <div class="dropdown-content" id="drop">
                            <a href="generalEnglish">Anglais général</a>
                            <a href="bussinesEnglish">Anglais professionel</a>
                            <a href="horeca">Anglais de la restauration</a>
                        </div>
                </li>
                <li class="<?php echo($show1)?>"><a href="contact" class="menu_item" id="contact">CONTACT</a></li>
                <li class="<?php echo($show5)?>"><a href="student" class="menu_item" id="student"><?php echo(strtoupper($_SESSION['name'])) ?></a></li>
                <li class="<?php echo($show6)?>"><a href="account" class="menu_item" id="account">MON COMPTE</a></li>
                <li class="<?php echo($show3)?>" ><a href="logout" class="menu_item" id="logout">SE DECONNECTER</a></li>
                <li class="<?php echo($show2)?>"><a class="menu_item" id="connect">SE CONNECTER</a></li>
            </ul>
        </nav>
    </div>
    <div class="fade_in" id="top_separator"></div>
    <div id="modal_box" class="modal_box modal_animate">
        <i class="fa fa-remove"></i>
        <div id="login_title">SE CONNECTER</div>
        <form class="flexcolumn" id="login_form" action="login" method="post">
            <input type="email" name='email' class="log_in_field" id="log_in_email" placeholder="Votre adresse mail...">
            <span  class="form_error" id="emailRequired"></span>
            <input type="password" class="log_in_field"   name="password" id="log_in_password" placeholder="Mot de passe...">
            <span class="form_error" id="passwordRequired"></span>
            <span class="form_error" id="wrongEmailPass"></span>
            <button type="button" class="button"  id="login_button">Se connecter</button>
        </form>
    </div>
    <div id="signin_box" class="modal_box modal_animate">
        <i class="fa fa-remove"></i>
        <div id="signin_title"></div>
        <form class="flexcolumn"  id="signup_form"  method="post">
            <label for="sign_up_name">PRENOM :</label>
            <input type="text"  name="name" class="log_in_field" id="sign_up_name" placeholder="Votre prénom ...">
            <span class="form_error" id="nameRequired"></span>
            <label for="sign_up_surname">NOM :</label>
            <input type="text"  name="surname" class="log_in_field" id="sign_up_surname" placeholder="Votre nom ...">
            <span class="form_error" id="surnameRequired"></span>
            <label for="sign_up_email">ADRESSE MAIL :</label>
            <input type="email"  name="email" class="log_in_field" id="sign_up_email" placeholder="Votre email ...">
            <span class="form_error" id="upEmailRequired"></span>
            <label for="sign_up_password">MOT DE PASSE :</label>
            <input type="text"  name="password" class="log_in_field" id="sign_up_password" placeholder="Mot de passe ...">
            <span class="form_error" id="upPasswordRequired"></span>
            <label for="sign_up_password_confirm">CONFIRMER LE MOT DE PASSE :</label>
            <input type="text"  name="confirm_password" class="log_in_field" id="sign_up_password_confirm" placeholder="Confirmer le mot de passe ...">
            <span  class="form_error" id="upPasswordConfirmRequired"></span>
            <button type="button" id="signup_button" class="button">Créer mon compter</button>
        </form>
    </div>
    <div id="message_modal" class="modal_box modal_animate message <?=$show?>">
        <p id="success_message"><?=$message?></p>
        <button type="button" id="messsage_ok" class="button">OK</button>
    </div>
</header>   