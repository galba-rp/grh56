<?php
include 'app/views/FRONT/layouts/head.php';
include_once 'app/views/FRONT/layouts/header.php';
?>

<main>
    <section class="section normal_width lesson_section">
        <div class= "normal_width errors">
            <div class="form_error"><?= $errors['lesson'] ?></div>
            <div class="form_error"><?= $errors['comment'] ?></div>
        </div>
            <?php foreach($allLessons as $lesson): ?>
                <div class="week_card">
                        <form class="account_form flexcolumn" action="indexAdmin.php?action=updateLesson" method="post">
                            <input type="hidden" value="<?= $lesson['id']?>" name="id"/>
                            <input type="text"  name="update_title" class="log_in_field" value="<?= $lesson['lod_title']?>">
                            <input type="text"  name="update_comment" class="log_in_field"   value="<?= $lesson['lod_comment']?>">
                            <video width="320" height="240" controls class="video_lesson">
                                <source src="<?= $lesson['lod_file']?>" type="video/mp4">
                            </video>
                            <div class="flex_row" >
                                <input type="submit" class="small_button admin_buttons lessons_crud_btn" name="lesson-btn"  value="UPDATE LESSON">
                                <input type="submit" class="small_button  lessons_crud_btn delete_btn" name="lesson-btn" value="DELETE LESSON">
                            </div>    
                        </form>
                </div>
            <?php endforeach ?>
    
    </section>
            </main>
<?php include 'app/views/FRONT/layouts/footer.php' ?>    