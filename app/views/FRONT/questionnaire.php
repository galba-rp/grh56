<?php
if (isset($_POST['submit'])) {
    echo 'Hello World';
}
?>

<?php
include 'app/views/FRONT/layouts/head.php';
include_once 'app/views/FRONT/layouts/header.php';
?>

<main>
    <section class="normal_width main_container">
        <div id="question_section">
            <h1 class="center mb-5">GRILLE D’ÉVALUATION À CHAUD </h1>
            <form class="flexcolumn form_q" id="submit" action="sendQuestion" method="post">
                <div class="w-50">
                <div class="d-flex justify-content-between mb-4">
                    <label for="student_number" class="label">Student number :</label>
                    <div>
                    <input type="text" name="student_number" class="contact_field" id="student_number" value=<?php if (isset($_POST['student_number'])) echo $_POST['student_number'] ?>>
                    <span class="form_error"><?= $errorsContact[0] ?></span>
                    </div>
                </div>
                <div class="d-flex justify-content-between mb-4">
                    <label for="course_name" class="label">Intitulé de la formation :</label>
                    <div>
                    <input type="text" name="course_name" class="contact_field" id="course_name" value=<?php if (isset($_POST['course_name'])) echo $_POST['course_name'] ?>>
                    <span class="form_error"><?= $errorsContact[1] ?></span>
                    </div>
                </div>
                <div class="d-flex justify-content-between mb-4">
                        <label for="course_start_date" class="label">Qui s’est déroulée du :</label>
                    <div>    
                        <input type="date" name="course_start_date" class="contact_field" id="course_start_date" value=<?php if (isset($_POST['course_start_date'])) echo $_POST['course_start_date'] ?>>
                        <span class="form_error"><?= $errorsContact[2] ?></span>
                        <label for="course_end_date" class="label">au: </label>
                        <input type="date" name="course_end_date" class="contact_field" id="course_end_date" value=<?php if (isset($_POST['course_end_date'])) echo $_POST['course_end_date'] ?>>
                        <span class="form_error"><?= $errorsContact[2] ?></span>
                    </div>
                </div>
                <div class="d-flex justify-content-between mb-4">
                    <label for="teacher" class="label">Formateur  :</label>
                    <div>
                    <input type="text" name="teacher" class="contact_field" id="teacher" value=<?php if (isset($_POST['teacher'])) echo $_POST['teacher'] ?>>
                    <span class="form_error"><?= $errorsContact[3] ?></span>
                    </div>
                </div>
                </div>

                <div class="mt-lg">
                    <h2>Pour quelle(s) raison(s) avez-vous suivi cette formation ? </h2>
                    <p>(Plusieurs réponses possibles)</p>
                    <div>
                        <table id="question" class="w-full">
                            <tr class='row-darkblue'>
                                    <td class="mr-lg">
                                        Formation prévue par votre entreprise
                                    </td>
                                    <td class="flex_row items-center">
                                        <div class="flex_row">
                                            <input type="radio" id="prévue_par_entreprise_oui" name="prévue_par_entreprise" value="Oui">
                                              <label for="prévue_par_entreprise_oui" class="mr-lg">Oui</label>
                                        </div>
                                        <div class="flex_row">
                                            <input type="radio" id="prévue_par_entreprise_no" name="prévue_par_entreprise" value="no">
                                              <label for="prévue_par_entreprise_no" class="mr-lg">No</label>
                                        </div>
                                    </td>
                            </tr>
                            <tr class='row-lightblue'>
                                <td class="mr-lg">
                                    Utile pour renforcer vos compétences dans votre poste actuel
                                </td>
                                <td class="flex_row items-center">
                                    <div class="flex_row">
                                        <input type="radio" id="renforcer_vos_compétences_oui" name="renforcer_vos_compétences" value="Oui">
                                          <label for="renforcer_vos_compétences_oui" class="mr-lg">Oui</label>
                                    </div>
                                    <div class="flex_row">
                                        <input type="radio" id="renforcer_vos_compétences_no" name="renforcer_vos_compétences" value="no">
                                          <label for="renforcer_vos_compétences_no" class="mr-lg">No</label>
                                    </div>
                                </td>

                            </tr>
                            <tr class='row-darkblue'>
                                <td class="mr-lg">
                                    Utile pour acquérir de nouvelles compétences
                                </td>
                                <td class="flex_row">
                                    <div class="flex_row items-center">
                                        <input type="radio" id="acquérir_nouvelles_compétences_oui" name="acquérir_nouvelles_compétences" value="Oui">
                                          <label for="acquérir_nouvelles_compétences_oui" class="mr-lg">Oui</label>
                                    </div>
                                    <div class="flex_row">
                                        <input type="radio" id="acquérir_nouvelles_compétences_no" name="acquérir_nouvelles_compétences" value="no">
                                          <label for="acquérir_nouvelles_compétences_no" class="mr-lg">No</label>
                                    </div>
                                </td>

                            </tr>
                            <tr class='row-lightblue'>
                                <td class="mr-lg">
                                    Utile pour votre évolution professionnelle
                                </td>
                                <td class="flex_row items-center">
                                    <div class="flex_row">
                                        <input type="radio" id="évolution_professionnelle_oui" name="évolution_professionnelle" value="Oui">
                                          <label for="évolution_professionnelle_oui" class="mr-lg">Oui</label>
                                    </div>
                                    <div class="flex_row">
                                        <input type="radio" id="évolution_professionnelle_no" name="évolution_professionnelle" value="no">
                                          <label for="évolution_professionnelle_no" class="mr-lg">No</label>
                                    </div>
                                </td>

                            </tr>
                        </table>
                    </div>


                    <div class="mt-lg">
                        <h2>Niveau d'implication</h2>
                        <table class="table_b w-full">
                            <tr class="table2">
                                <th></th>
                                <th>Médiocre</th>
                                <th>Moyen</th>
                                <th>Satisfaisant</th>
                                <th>Très bon</th>
                                <th>Excellent</th>
                            </tr>

                            <tr class="table2">
                                <td>Votre niveau d'implication dans la formation</td>
                                <td> <input type="radio" id="niveau_implication_1" name="niveau_implication" value="Médiocre"></td>
                                <td> <input type="radio" id="niveau_implication_2" name="niveau_implication" value="Moyen"></td>
                                <td> <input type="radio" id="niveau_implication_3" name="niveau_implication" value="Satisfaisant"></td>
                                <td> <input type="radio" id="niveau_implication_4" name="niveau_implication" value="Très bon"></td>
                                <td> <input type="radio" id="niveau_implication_5" name="niveau_implication" value="Excellent"></td>
                            </tr>

                        </table>
                    </div>

                    <div class="mt-lg">
                        <h2>Votre Évaluation de la formation </h2>
                        <p>(Cochez une valeur en fonction de votre appréciation de l’organisation et du contenu de la formation)</p>
                        <table>
                            <thead>
                                <tr class="table2">
                                    <th></th>
                                    <th>Insatisfaisant</th>
                                    <th class="text-center">Peu satisfaisant</th>
                                    <th>Satisfaisant</th>
                                    <th class="text-center">Très satisfaisant</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table2 row-darkblue">
                                    <td>Communication des objectifs et du programme avant la formation</td>
                                    <td> <input type="radio" id="Communication_des_objectifs_1" name="communication_objectifs" value="1"></td>
                                    <td> <input type="radio" id="Communication_des_objectifs_2" name="communication_objectifs" value="2"></td>
                                    <td> <input type="radio" id="Communication_des_objectifs_3" name="communication_objectifs" value="3"></td>
                                    <td> <input type="radio" id="Communication_des_objectifs_4" name="communication_objectifs" value="4"></td>
                                </tr>
                                <tr class="table2 row-lightblue">
                                    <td>Organisation et déroulement de la formation</td>
                                    <td> <input type="radio" id="Organisation_1" name="organisation_déroulement" value="1"></td>
                                    <td> <input type="radio" id="Organisation_2" name="organisation_déroulement" value="2"></td>
                                    <td> <input type="radio" id="Organisation_3" name="organisation_déroulement" value="3"></td>
                                    <td> <input type="radio" id="Organisation_4" name="organisation_déroulement" value="4"></td>
                                </tr>
                                <tr class="table2 row-darkblue">
                                    <td>Progression de la formation (durée, rythme, alternance théorie/pratique) </td>
                                    <td> <input type="radio" id="progression_1" name="progression_de_la_formation" value="1"></td>
                                    <td> <input type="radio" id="progression_2" name="progression_de_la_formation" value="2"></td>
                                    <td> <input type="radio" id="progression_3" name="progression_de_la_formation" value="3"></td>
                                    <td> <input type="radio" id="progression_4" name="progression_de_la_formation" value="4"></td>
                                </tr>
                                <tr class="table2 row-lightblue">
                                    <td>Adéquation des moyens matériels mis à disposition</td>
                                    <td> <input type="radio" id="matériels_1" name="matériels" value="1"></td>
                                    <td> <input type="radio" id="matériels_2" name="matériels" value="2"></td>
                                    <td> <input type="radio" id="matériels_3" name="matériels" value="3"></td>
                                    <td> <input type="radio" id="matériels_4" name="matériels" value="4"></td>
                                </tr>
                                <tr class="table2 row-darkblue">
                                    <td>Conformité de la formation dispensée au programme</td>
                                    <td> <input type="radio" id="Conformité_1" name="Conformité" value="1"></td>
                                    <td> <input type="radio" id="Conformité_2" name="Conformité" value="2"></td>
                                    <td> <input type="radio" id="Conformité_3" name="Conformité" value="3"></td>
                                    <td> <input type="radio" id="Conformité_4" name="Conformité" value="4"></td>
                                </tr>
                                <tr class="table2 row-lightblue">
                                    <td>Clarté du contenu</td>
                                    <td> <input type="radio" id="Clarté_1" name="Clarté" value="1"></td>
                                    <td> <input type="radio" id="Clarté_2" name="Clarté" value="2"></td>
                                    <td> <input type="radio" id="Clarté_3" name="Clarté" value="3"></td>
                                    <td> <input type="radio" id="Clarté_4" name="Clarté" value="4"></td>
                                </tr>
                                <tr class="table2 row-darkblue">
                                    <td>Qualité des supports pédagogiques</td>
                                    <td> <input type="radio" id="Qualité_1" name="Qualité" value="1"></td>
                                    <td> <input type="radio" id="Qualité_2" name="Qualité" value="2"></td>
                                    <td> <input type="radio" id="Qualité_3" name="Qualité" value="3"></td>
                                    <td> <input type="radio" id="Qualité_4" name="Qualité" value="4"></td>
                                </tr>
                                <tr class="table2 row-lightblue">
                                    <td>Animation de la formation par le ou les intervenants</td>
                                    <td> <input type="radio" id="Animation_1" name="Animation" value="1"></td>
                                    <td> <input type="radio" id="Animation_2" name="Animation" value="2"></td>
                                    <td> <input type="radio" id="Animation_3" name="Animation" value="3"></td>
                                    <td> <input type="radio" id="Animation_4" name="Animation" value="4"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-lg">
                        <h2>Niveau d'Compétences et réactivité du formateur</h2>
                        <table class="table_b">
                            <tr class="table2">
                                <th></th>
                                <th class="text-center">Pas du tout d'accord</th>
                                <th class="text-center">Pas d'accord</th>
                                <th class="text-center">Neutre</th>
                                <th class="text-center">D'accord</th>
                                <th class="text-center">Tout à fait d'accord</th>
                            </tr>

                            <tr class="table2">
                                <td>Le formateur était un enseignant/démonstrateur efficace.</td>
                                <td> <input type="radio" id="efficace_1" name="formateur_efficace" value="1"></td>
                                <td> <input type="radio" id="efficace_2" name="formateur_efficace" value="2"></td>
                                <td> <input type="radio" id="efficace_3" name="formateur_efficace" value="3"></td>
                                <td> <input type="radio" id="efficace_4" name="formateur_efficace" value="4"></td>
                                <td> <input type="radio" id="efficace_5" name="formateur_efficace" value="5"></td>

                            </tr>
                            <tr class="table2">
                                <td>Le formateur a su temps les élèves.</td>
                                <td> <input type="radio" id="motiver_1" name="motiver" value="1"></td>
                                <td> <input type="radio" id="motiver_2" name="motiver" value="2"></td>
                                <td> <input type="radio" id="motiver_3" name="motiver" value="3"></td>
                                <td> <input type="radio" id="motiver_4" name="motiver" value="4"></td>
                                <td> <input type="radio" id="motiver_5" name="motiver" value="5"></td>

                            </tr>
                            <tr class="table2">
                                <td>Le formateur a utilisé efficacement le temps dont il disposait.</td>
                                <td> <input type="radio" id="temps_1" name="temps" value="1"></td>
                                <td> <input type="radio" id="temps_2" name="temps" value="2"></td>
                                <td> <input type="radio" id="temps_3" name="temps" value="3"></td>
                                <td> <input type="radio" id="temps_4" name="temps" value="4"></td>
                                <td> <input type="radio" id="temps_5" name="temps" value="5"></td>

                            </tr>
                            <tr class="table2">
                                <td>Le formateur était à l'écoute des élèves et disponible.</td>
                                <td> <input type="radio" id="écoute_1" name="écoute" value="1"></td>
                                <td> <input type="radio" id="écoute_2" name="écoute" value="2"></td>
                                <td> <input type="radio" id="écoute_3" name="écoute" value="3"></td>
                                <td> <input type="radio" id="écoute_4" name="écoute" value="4"></td>
                                <td> <input type="radio" id="écoute_5" name="écoute" value="5"></td>

                            </tr>
                        </table>
                    </div>

                    <div class="mt-lg flex_row">
                        <h2>La qualité globale de la formation </h2>
                        <div>
                            <input type="number" id="note_qualite" min="1" max="10" placeholder="Sélectioner une note ..." />
                        </div>

                    </div>

                    <div class="mt-sm">
                        <label for="elements_utiles" class="title_question">Quels éléments de la formation ont été les plus utiles ou intéressants, selon vous ?</label>
                        <textarea id="elements_utiles" name="elements_utiles" rows="10" cols="100" class="mt-xs"></textarea>
                    </div>

                    <div class="mt-sm">
                        <label for="amélioreriez" class="title_question">Comment amélioreriez-vous cette formation ?</label>
                        <textarea id="amélioreriez" name="amélioreriez" rows="10" cols="100" class="mt-xs"></textarea>
                    </div>

                    <div class="mt-lg">
                        <h2>Votre satisfaction</h2>
                        <p>(Cochez une valeur en fonction de votre degré de satisfaction)</p>
                        <table>
                            <thead>
                                <tr class="table2">
                                    <th></th>
                                    <th>Insatisfaisant</th>
                                    <th class="text-center">Peu satisfaisant</th>
                                    <th>Satisfaisant</th>
                                    <th class="text-center">Très satisfaisant</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table2 row-darkblue">
                                    <td>La formation a-t-elle répondu à vos attentes initiales ? </td>
                                    <td> <input type="radio" id="répondu_à_vos_attentes_1" name="répondu_à_vos_attentes" value="1"></td>
                                    <td> <input type="radio" id="répondu_à_vos_attentes_2" name="répondu_à_vos_attentes" value="2"></td>
                                    <td> <input type="radio" id="répondu_à_vos_attentes_3" name="répondu_à_vos_attentes" value="3"></td>
                                    <td> <input type="radio" id="répondu_à_vos_attentes_4" name="répondu_à_vos_attentes" value="4"></td>
                                </tr>
                                <tr class="table2 row-lightblue">
                                    <td>Pensez-vous avoir atteint les objectifs pédagogiques prévus lors de la formation ?</td>
                                    <td> <input type="radio" id="atteint les objectifs_1" name="atteint les objectifs" value="1"></td>
                                    <td> <input type="radio" id="atteint les objectifs_2" name="atteint les objectifs" value="2"></td>
                                    <td> <input type="radio" id="atteint les objectifs_3" name="atteint les objectifs" value="3"></td>
                                    <td> <input type="radio" id="atteint les objectifs_4" name="atteint les objectifs" value="4"></td>
                                </tr>
                                <tr class="table2 row-darkblue">
                                    <td>PEstimez-vous que la formation était en adéquation avec le métier ou les réalités du secteur ? </td>
                                    <td> <input type="radio" id="adéquation_avec_le_métier_1" name="adéquation_avec_le_métier" value="1"></td>
                                    <td> <input type="radio" id="adéquation_avec_le_métier_2" name="adéquation_avec_le_métier" value="2"></td>
                                    <td> <input type="radio" id="adéquation_avec_le_métier_3" name="adéquation_avec_le_métier" value="3"></td>
                                    <td> <input type="radio" id="adéquation_avec_le_métier_4" name="adéquation_avec_le_métier" value="4"></td>
                                </tr>
                                <tr class="table2 row-lightblue">
                                    <td>Recommanderiez-vous ce stage à une personne exerçant le même métier que vous ?</td>
                                    <td> <input type="radio" id="Recommanderiez-vous_1" name="Recommanderiez-vous" value="1"></td>
                                    <td> <input type="radio" id="Recommanderiez-vous_2" name="Recommanderiez-vous" value="2"></td>
                                    <td> <input type="radio" id="Recommanderiez-vous_3" name="Recommanderiez-vous" value="3"></td>
                                    <td> <input type="radio" id="Recommanderiez-vous_4" name="Recommanderiez-vous" value="4"></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="mt-sm">
                                    <label for="commentaires" class="title_question">Commentaires:</label>
                                    <textarea id="commentaires" name="commentaires" rows="5" cols="100" class="mt-xs"></textarea>
                                </div>
                    </div>

                    <div class="mt-lg flex_row date title_question">
                        <label for="date" class="pr-sm">Le: </label>
                        <input type="date" name="date" id="date">
                    </div>
                    <button type="submit" id="send_message" class="button">Envoyer</button>
            </form>
        </div>
    </section>
</main>
<?php include 'app/views/FRONT/layouts/footer.php' ?>