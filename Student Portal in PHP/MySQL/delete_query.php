<?php
require 'database.php';
    // SQL to delete all records
    $sql = "DELETE FROM sem_1";
    
    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "All records deleted successfully";
    } else {
        echo "Error deleting records: " . $conn->error;
    }

    // Close connection
    $conn->close();
