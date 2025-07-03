<?php
    include '../config/config.php';

    //create model part

    function create($name, $age, $address) {
        global $conn;

        $stmt = mysqli_prepare($conn, "INSERT INTO crud_method(name, age, address) VALUES(?, ?, ?)");
        mysqli_stmt_bind_param($stmt, 'sis', $name, $age, $address);
        return mysqli_stmt_execute($stmt);
    }

    //read model part

    function read() {
        global $conn;

        $stmt = mysqli_prepare($conn, "SELECT * FROM crud_method");
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        $read = [];

        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $read[] = $row;
            }
        }

        return $read;
    }

    //update model part

    function update($id, $name, $age, $address) {
        global $conn;

        $stmt = mysqli_prepare($conn, "UPDATE crud_method SET name = ?, age = ?, address = ? WHERE id = ?");
        mysqli_stmt_bind_param($stmt, 'sisi', $name, $age, $address, $id);
        return mysqli_stmt_execute($stmt);
    }

    function updateRead() {
        global $conn;
        $readUpdate = [];

        if(isset($_GET['id'])) {
            $id = $_GET['id'];

            $stmt = mysqli_prepare($conn, "SELECT * FROM crud_method WHERE id = ?");
            mysqli_stmt_bind_param($stmt, 'i', $id);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if(mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $readUpdate[] = $row;
                }
            }
        }


        return $readUpdate;
    }

    //delete model part

    function delete($id) {
        global $conn;
        $stmt = mysqli_prepare($conn, "DELETE FROM crud_method WHERE id = ?");
        mysqli_stmt_bind_param($stmt, 'i', $id);
        
        return mysqli_stmt_execute($stmt);
    }
?>