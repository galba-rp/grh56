<?php 
include 'layouts/head.php';
include_once 'layouts/header.php';
?>
<main>
    <article class="normal_width">
        <div class="top_article fade">
            <p class="pagedivider"></p> 
            <div id="plugin" > The secret of getting ahead is getting started</div>
            <p class="pagedivider"></p> 
        </div>
    </article>
    <section id="lessons_section" class="normal_width fade">
        <div class="lessons">
            <?php foreach($lessons as $lesson): ?>
            <div class="lesson">
                <div class="card">
                    <div class="card_front">
                        <img class="img_lesson" src="<?= $lesson['image_path']?>" alt="general english lesson">
                        <div class="lesson_card_text">
                            <h2><?= $lesson['title']?></h2>
                        </div>
                    </div>
                    <div class="card_back">
                        <p><?= $lesson['description']?></p>
                        <a href="<?= $lesson['page']?>" title="Découvrez nos cours">EN SAVOIR PLUS</a>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
            </div>
            <h3 class="trasparent-dark"><a href="https://www.moncompteformation.gouv.fr/espace-prive/html/#/">Formation en anglais éligible au CPF</a></h3>
            
    </section>
    <section  class="separator fade">
        <div class='normal_width overview'>
        <div >
            <h1>Types de formations</h1>
            <p>Cours particuliers d'anglais pour tout public, à tout niveau, comprenant l’accompagnement pour passer un examen (TOEFL, TOEIC, IELTS/FCE-CPE, Linguaskill (anciennement BULATS) et autres), anglais des affaires, de la restauration, de l’hôtellerie, ou possibilité d’une autre spécialité (à discuter) aussi bien pour devenir à l'aise à l'orale que pour savoir lire et s'exprimer à l'écrit. </p>
                <p>Les formations peuvent être suivies en groupe ou être individualisées. 
                Possibilité de personnaliser les formations de groupe également (au sein d’une société, si les personnes ont un thème commun) à partir de 4 participants.</p> 
                <h2>Plusieurs choix possibles :</h2>
                <ul>
                    <li> en présentiel (je me déplace en entreprise sous réserve d’une salle disponible)</li>
                    <li> à distance (visioconférence, sous réserve d’une bonne connexion Internet)</li>
                    <li> mixte </li>
                </ul>
        </div>
        <div>
            <h1>Pourquoi choisir notre formation :</h1>
            <ul>
                <li> Formatrice <b>qualifiée</b> et <b>expérimentée</b> (plus de 10 ans d’expérience avec des publics très variés) ;</li>
                <li> <b></b>Personnalisation</b> des cours et <b>adaptabilité</b> du contenu à vos besoins ;</li>
                <li> Accent mis sur la communication orale (prononciation, phonétique, intonation) ; </li>
                <li> Cours effectués dans la <b>bonne humeur</b> (si, si, on peut sérieusement améliorer son anglais dans la bonne humeur :D) ; </li>
                <li> <b>Plateforme d’apprentissage en e-learning</b> disponible pour s’entraîner en dehors des cours (grammaire, vocabulaire, anglais spécifique (des <b>affaires</b>, de la <b>restauration</b> (salle et cuisine), de <b>l’hôtellerie</b>, anglais <b>technique</b>, pour <b>l’office du tourisme, préparation aux examens</b>, etc.), vidéos avec préparations et questions après visionnage, le tout élaboré avec différents accents de personnes <b>anglaises natives</b>).</li>
            </ul>
        </div>
    </div>
    </section>
    <section class="normal_width fade" id="clients">
      
        <h2 id="companies">Les entreprises qui m’ont fait confiance</h2>
        <div class="flex_row" id="comp_base">
            <a href="https://www.opcalia.com/" target="_blank" title="Cliquez-ici pour visiter la site web de Opcalia"><img src="app/public/images/akto_s.png" alt="AKTO logo"></a>
            <a href="http://aflviv.com.ua/fr/" target="_blank" title="Cliquez-ici pour visiter la site web de Alliance française"><img src="app/public/images/af_s.png" alt="Alinace francaise logo"></a>
            <a href="https://www.limelight.com/" target="_blank" title="Cliquez-ici pour visiter la site web de Limelight networks"><img src="app/public/images/llnw_s.jpeg" alt="Limelight networks logo"></a>
            <a href="https://www.morbihan.cci.fr/" target="_blank" title="Cliquez-ici pour visiter la site web de CCI de Morbihan"><img src="app/public/images/cci_s.jpg" alt="CCI Morbihan logo"></a>
            <a href="https://www.maven.co/" target="_blank" title="Cliquez-ici pour visiter la site web de Maven Research"><img src="app/public/images/maven_s.png" alt="Maven Research logo"></a>
            <a href="https://ua.ambafrance.org/" target="_blank" title="Cliquez-ici pour visiter la site web de Ambassade de France"><img src="app/public/images/ambassade_s.jpg" alt="Ambassade de France en Ukraine logo"></a>
            <a href="https://www.afdas.com" target="_blank" title="Cliquez-ici pour visiter la site web de Afdas"><img src="app/public/images/afdas_s.jpg" alt="Afdas logo"></a>

        </div>
        <div class="pagedivider"></div>
        <div id="testimonies" class="normal_width ">
            <?php foreach($testimonials as $testimonial): ?>
            <div class="testimonial_container container_small" id=container<?= $testimonial['id']?>>
                <div class="testimony normal_width" id=<?= $testimonial['id']?>>
                    <p class="testimony_text"><?= $testimonial['short']?></p>
                    <p class="written_by"><?= $testimonial['author'] ?></p>
                </div>
                <div class="normal_width hidden_testimonies" id=testimonial<?= $testimonial['id']?>>
                    <p class="testimony_text "><?= $testimonial['testimonial'] ?></p>
                    <p class="written_by "><?= $testimonial['author'] ?></p>
                </div>
            </div>
            <?php endforeach ?>
        </div>
        <div class="pagedivider"></div>
        <div class="charts">
        <canvas  id="evaluationChart" style="width:100%;max-width:500px; max-height:250px;margin-top: 100px;"></canvas>
        <canvas  id="resultsChart" style="width:100%;max-width:500px; max-height:250px;margin-top: 100px;"></canvas>
        <p class="center">Taux de retour des questionnaires: 100%. Nombre de questionnaires envoyés: 1</p>
        </div>    
    </section>
</main>
<?php include 'layouts/footer.php' ?>