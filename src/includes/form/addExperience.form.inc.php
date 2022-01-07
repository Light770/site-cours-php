<?php 
   

    if(isset($_POST) && !empty($_POST)){
        debug($_POST);
        sqlNew('')
    } else {
        echo addExperienceForm();
    }

 