<?php
require_once('Config.php');

class UserController{
    public function getUsers() {
        $sql="SELECT * FROM user1";
        $db=config::getConnexion();
        try {
            $query=$db->prepare($sql);
            $query->execute();
            return $query->fetchAll();
        } catch (Exception $e) {
            die('error:' .$e->getMessage());
        }

    }
    //AJOUT
public function addUser($user) {
    $db = Config::getConnexion();
    $sql = "INSERT INTO user1 (First_Name, Last_Name, email, pwd) VALUES (:First_Name, :Last_Name, :email, :pwd)";
    try {
        $query = $db->prepare($sql);
        $query->execute([
            'First_Name' => $user->getFirst_Name(),
            'Last_Name' => $user->getLast_Name(),
            'email' => $user->getEmail(),
            'pwd' => $user->getPwd(),
        ]);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}
public function deleteUser($id) {
    $db = Config::getConnexion();
    $sql = "DELETE FROM user1 WHERE id = :id"; 
    try {
        $query = $db->prepare($sql);
        $query->execute(['id' => $id]);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

public function updateUser($id, $First_Name, $Last_Name, $email) {
    $db = Config::getConnexion();
    $sql = "UPDATE user1 SET First_Name = :First_Name, Last_Name = :Last_Name, email = :email WHERE id = :id";
    try {
        $query = $db->prepare($sql);
        $query->execute([
            'id' => $id,
            'First_Name' => $First_Name,
            'Last_Name' => $Last_Name,
            'email' => $email
        ]);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}
        
}

?>