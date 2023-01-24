<?php

class HotelController
{
    public function __construct()
    {
        $db = new DatabaseConnection;
        $this->conn = $db->conn;
    }

    public function index()
    {
        $hostelQuery = "SELECT * FROM hotel ORDER BY `namehostel`,`city` ASC";
        $result = $this->conn->query($hostelQuery);
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

        //$hostelQuery = "INSERT INTO hotel (namehostel,city,postalcode,country) VALUES ($data)";
        $hostelQuery = "INSERT INTO hotel (namehostel,city) VALUES ($data)";
        $result = $this->conn->query($hostelQuery);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }


    public function edit($id)
    {
        $hotel_id = validateInput($this->conn, $id);
        $hotelQuery = "SELECT * FROM  hotel WHERE id_hotel='$hotel_id' LIMIT 1";
        $result = $this->conn->query($hotelQuery);
        if ($result->num_rows == 1) {
            $data = $result->fetch_assoc();
            return $data;
        } else {
            return false;
        }
    }

    public function update($inputData, $id)
    {
        $hotel_id = validateInput($this->conn, $id);
        $namehostel = $inputData['namehostel'];
        $city = $inputData['city'];
        $postalcode = $inputData['postalcode'];
        $prix = $inputData['prix'];
        $country = $inputData['country'];

        $volUpdateQuery = "UPDATE hotel SET namehostel='$namehostel',city='$city',country='$country',postalcode='$postalcode',prix='$prix' WHERE id_hotel='$hotel_id' LIMIT 1 ";
        $result = $this->conn->query($volUpdateQuery);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($id)
    {
        $hotel_id = validateInput($this->conn, $id);
        $hotelDeleteQuery = "DELETE FROM hotel WHERE id_hotel='$hotel_id' LIMIT 1 ";
        $result = $this->conn->query($hotelDeleteQuery);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
