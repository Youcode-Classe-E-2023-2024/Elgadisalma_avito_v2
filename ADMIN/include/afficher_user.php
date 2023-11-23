<?php
function get_user() {
    require_once 'config.php';
        $utilisateur = [];
    
    
        $sql = "SELECT * FROM utilisateur ;";
        $result = $link->query($sql);
        if(mysqli_num_rows($result) > 0){
            while ($row = $result->fetch_assoc()) {
                $utilisateur[] = $row;
            }
        }else {
            echo "Aucun utilisateur trouvée.";
        }
        mysqli_free_result($result);
        mysqli_close($link);

    
    return $utilisateur;

}