<?php

class UserController
{
    public function __construct()
    {
        $db = new DatabaseConnection;
        $this->conn = $db->conn;
    }

    public function index()
    {
        $volQuery = "SELECT * FROM  vol";
        $result = $this->conn->query($volQuery);
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function create($inputData)
    {
        $data = "'" . implode("','", $inputData) . "'";
        //echo $data;

        $volQuery = "INSERT INTO vol (depart,arriver,aller,retour) VALUES ($data)";
        $result = $this->conn->query($volQuery);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }


    /*
    changer la date en format UE



    $volQuery = "SELECT * FROM  vol WHERE id_client='$vol_id' LIMIT 1;
        SELECT DATE_FORMAT(aller, '%m-%d-%Y %H:%i')
        FROM vol  WHERE id_vol='30';";
    */


    public function edit($id)
    {
        $vol_id = validateInput($this->conn, $id);
        $volQuery = "SELECT * FROM  vol WHERE id_vol='$vol_id' LIMIT 1";
        $result = $this->conn->query($volQuery);
        if ($result->num_rows == 1) {
            $data = $result->fetch_assoc();
            return $data;
        } else {
            return false;
        }
    }


    public function updateDocument($identityCard, $id)
    {
        $id = validateInput($this->conn, $id);
        $userUpdateQuery = "UPDATE user SET identitycard='$identityCard' WHERE id_client='$id'";

        $result = $this->conn->query($userUpdateQuery);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function updateUserProfile($fname, $lname, $email, $password, $id)
    {
        $id = validateInput($this->conn, $id);
        $userUpdateQuery = "UPDATE user SET fname='$fname',lname='$lname',email='$email',password='$password' WHERE id_client='$id'";
        $result = $this->conn->query($userUpdateQuery);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function registration($fname, $lname, $email, $password)
    {
        $register_query = "INSERT INTO user (fname, lname, email, password) VALUES ('$fname',' $lname', '$email', '$password')";
        $result = $this->conn->query($register_query);
        return $result;
    }


    public function delete($id)
    {
        $user_id = validateInput($this->conn, $id);
        $userDeleteQuery = "DELETE FROM vol WHERE id_user='$user_id' LIMIT 1 ";
        $result = $this->conn->query($userDeleteQuery);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
