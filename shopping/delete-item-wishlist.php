<?php
require "../includes/header.php";
require "../config/config.php";

if (isset($_POST['delete'])) {
    $id = $_POST['id'];

    // Use prepared statement to prevent SQL injection
    $delete = $conn->prepare("DELETE FROM wishlist WHERE id = :id");
    
    // Bind the ID parameter and execute the query
    $delete->bindParam(':id', $id, PDO::PARAM_INT);
    if ($delete->execute()) {
        // Item deleted successfully
        echo "Item deleted successfully.";
    } else {
        // Handle the case where the deletion failed
        echo "Error deleting item.";
    }
}

// Rest of your code...

require "../config/footer.php";
