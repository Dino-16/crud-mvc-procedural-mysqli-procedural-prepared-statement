<?php
    include '../model/crud.model.php';

    //create

    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create'])) {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $address = $_POST['address']; 

        if(create($name, $age, $address)) {
            echo "<script>
                    alert('Created Successfully!');
                    window.location.href = '../view/read.view.php';
                  </script>";
        } else {
            echo 'Error';
        }
    }

    //read

    $rows = read();

    //update

    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $address = $_POST['address']; 

        if(update($id, $name, $age, $address)) {
            echo "<script>
                    alert('Updated Successfully!');
                    window.location.href = '../view/read.view.php';
                  </script>";
        } else {
            echo 'Error';
        }
    }

    $rowsUpdate = updateRead();

    //delete

    if(isset($_GET['delete_id'])) {
        $id = $_GET['delete_id'];

        if(delete($id)) {
            echo "<script>
                    alert('Deleted Successfully!');
                    window.location.href = '../view/read.view.php';
                  </script>";
        } else {
            echo 'Error';
        }
    }
?>