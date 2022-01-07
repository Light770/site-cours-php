<?php
                    
function retournerMenuButton($params, $password) 
    {
        return '<li>
                    <a href="?password=' . $password . '&page='. $params['href'] .'">
                        <div class="list-element">
                            ' . $params['name'] . ' 
                        </div>
                    </a>
                </li>';
    }

    function addExperienceForm()
    {
        $formTemplate = '<form id="formulaire" class="form spacer-container" action="#" method="POST">
        <div>
            <label for="date">Date :</label></br>
            <input type="date" name="date" id="date" class="form-control"></br>
            <label for="titre">Titre :</label></br>
            <input type="text" name="titre" id="titre" class="form-control"></br>
            <label for="description">Description :</label></br>
            <textarea name="description" id="description" class="form-control"></textarea></br>
            <input  class="form-control" type="submit" value="Envoyer">
        </div>
        </form>';

        return $formTemplate;
    }

 function sqlNew($table,$columns)
 {

 }