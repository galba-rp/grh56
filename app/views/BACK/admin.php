<?php
include 'app/views/FRONT/layouts/head.php';
include_once 'app/views/FRONT/layouts/header.php';
?>

    <main>
        <section class="section normal_width admin_section">
            <div class= "normal_width errors">
                <div class="form_error"><?= $errors['lesson'] ?></div>
                <div class="form_error"><?= $errors['comment'] ?></div>
                <div class="form_error"><?= $errors['video'] ?></div>
                <div class="form_error"><?= $errors['not uploaded'] ?></div>
            </div>
            <div class="card_admin" id="card1">
                <div class="card cadmin">
                    <div class="card_front">
                        <p class="title_card">LESSON OF THE WEEK</p>
                    </div>
                    <div class="card_back cadmin_back">
                        <form method="post" action="indexAdmin.php?action=lessonWeek"  id="lod" enctype="multipart/form-data" class="flexcolumn">
                            <input type="text" class="newLesson"  id ="lesson_week1" name="title"  placeholder="lesson title" value="<?php if(isset($_POST['title'])) echo$_POST['title'] ?>">
                            <input type="text" class="newLesson" id ="lesson_week2" name="comment" placeholder="lesson comment" value="<?php if(isset($_POST['description'])) echo$_POST['description'] ?>">
                            <span  class="form_error" id="bothRequired"></span>
                            <div class="flex_row" id="browseFile">
                                <input type="file" id="myfile" class="admin_buttons" name="myfile">
                                <span id="showName" class="none"></span>
                            </div>
                            <input type="submit" class="small_button admin_buttons"  id= "publish_button" value="Publish !">
                        </form>             
                    </div>
                </div>
            </div> 
            <div class="card_admin" id="card2">
                <div class="card cadmin">
                        <div class="card_front">
                                <p class="title_card">MANAGE "LESSON OF THE WEEK"</p>
                        </div>
                        <div class="card_back cadmin_back">
                            <input type="button" class="small_button admin_buttons" id="all_lessons" onclick="location.href='indexAdmin.php?action=allLessons';" value="ALL LESSONS">            
                        </div> 
                </div>
            </div>
        </section> 
    </main>

<?php include 'app/views/FRONT/layouts/footer.php' ?>