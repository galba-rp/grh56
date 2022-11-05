<?php

$fstudent_number .= $_POST['student_number'];
$fcourse_name =  $_POST['course_name'];
$fcourse_start_date = $_POST['course_start_date'];
$fcourse_end_date = $_POST['course_end_date'];
$fteacher = $_POST['teacher'];
$fprévue_par_entreprise = $_POST['prévue_par_entreprise'];
$frenforcer_vos_compétences = $_POST['renforcer_vos_compétences'];
$facquérir_nouvelles_compétences = $_POST['acquérir_nouvelles_compétences'];
$févolution_professionnelle = $_POST['évolution_professionnelle'];
$fniveau_implication = $_POST['niveau_implication'];
$fcommunication_objectifs = $_POST['communication _objectifs'];
$forganisation_déroulement = $_POST['organisation_déroulement'];
$fprogression_de_la_formation = $_POST['progression_de_la_formation'];
$fadéquation_des_moyens = $_POST['adéquation_des_moyens'];
$fconformité_de_la_formation = $_POST['conformité_de_la_formation'];
$fclarté_du_contenu = $_POST['clarté_du_contenu'];
$fqualité_des_supports = $_POST['qualité_des_supports'];
$fanimation_de_la_formation = $_POST['animation_de_la_formation'];
$fformateur_efficace = $_POST['formateur_efficace'];
// $fstudent_number = $_POST['student_number'];
// $fstudent_number = $_POST['student_number'];

$mpdf = new \Mpdf\Mpdf();

$data = ''; 

$data .= '<h1>Questionnaire </h1>';
$data .= '<strong>Student: </strong>' . $fstudent_number . '<br />';
$data .= '<strong>Intitulé de la formation: </strong>' . $fcourse_name . '<br />';
// $data .= '<strongQui s\'est déroulée du: </strong>' . $fcourse_start_date . ' au ' . $course_end_date . '<br />';
$data .= '<strong>Formateur: </strong>' . $fteacher . '<br /><br />';

$data .= '<strong>Formation prévue par votre entreprise </strong>' . $fprévue_par_entreprise . '<br />';
$data .= '<strong>Utile pour renforcer vos compétences dans votre poste actuel: </strong>' . $frenforcer_vos_compétences . '<br />';
$data .= '<strong>Utile pour acquérir de nouvelles compétences: </strong>' . $facquérir_nouvelles_compétences . '<br />';
$data .= '<strong>Utile pour votre évolution professionnelle: </strong>' . $févolution_professionnelle . '<br />';
$data .= '<strong>Votre niveau dimplication dans la formation: </strong>' . $fniveau_implication . '<br />';

$data .= '<h2>Votre Évaluation de la formation: </h2>';
$data .= '<strong>Communication des objectifs et du programme avant la formation: </strong>' . $fcommunication_objectifs . '<br />';
$data .= '<strong>Organisation et déroulement de la formation: </strong>' . $forganisation_déroulement . '<br />';
$data .= '<strong>Progression de la formation (durée, rythme, alternance théorie/pratique): </strong>' . $fprogression_de_la_formation . '<br />';
$data .= '<strong>Adéquation des moyens matériels mis à disposition: </strong>' . $fadéquation_des_moyens . '<br />';
$data .= '<strong>Conformité de la formation dispensée au programme: </strong>' . $fconformité_de_la_formation . '<br />';
$data .= '<strong>Clarté du contenu: </strong>' . $fclarté_du_contenu . '<br />';
$data .= '<strong>Qualité des supports pédagogiques: </strong>' . $fqualité_des_supports . '<br />';
$data .= '<strong>Animation de la formation par le ou les intervenants: </strong>' . $fanimation_de_la_formation . '<br />';

$data .= '<h2>Niveau d\'Compétences et réactivité du formateur: </h2>';
$data .= '<strong>Le formateur était un enseignant/démonstrateur efficace: </strong>' . $fanimation_de_la_formation . '<br />';



$mpdf->WriteHTML($data);
$mpdf->Output();