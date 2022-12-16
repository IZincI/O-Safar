

<?php

class SearchCode
{
    public function __construct()
    {
        $db = new DatabaseConnection;
        $this->conn = $db->conn;
    }


    public function detailSearch()
    {

        if (isset($_GET['search_btn']) and !empty($_GET['search_btn'])) {
            $depart_input = $_GET['depart'];
            $arriver_input = $_GET['arriver'];
            $searchQuery = "SELECT * FROM `vol` WHERE `depart` LIKE '%" . $depart_input . "%' AND `arriver` LIKE '%" . $arriver_input . "%';";
            // $searchQuery = "SELECT * FROM vol WHERE depart  LIKE '%" . $depart_input . "%' ";
            $result = $this->conn->query($searchQuery);

            if ($result) {
                return $result;
            } else {
                return false;
            }
        }
    }
}

?>