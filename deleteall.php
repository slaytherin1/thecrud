<?php
require_once 'connect.php';

if($deleteAll = $conn->query('DELETE FROM names')){
    header('Location: home.php');
} else {
    echo 'Failed to delete list';
}
?>