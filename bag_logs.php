<?php
include_once('connection.php'); // Include database connection file

try {
    // SQL query to insert matching data into user_bag_log
    $sqlInsert = "
        INSERT INTO user_bag_log (name, number, log_timestamp, bag_tag_number, id_number, tag_timestamp, status)
        SELECT
            sl.name,
            sl.number,
            sl.timestamp AS log_timestamp,
            rt.bag_tag_id,
            rt.id_number,
            rt.timestamp AS tag_timestamp,
            sl.status
        FROM
            students_logs sl
        JOIN
            registered_tags rt ON ABS(TIMESTAMPDIFF(SECOND, sl.timestamp, rt.timestamp)) <= 60
        WHERE
            NOT EXISTS (
                SELECT 1
                FROM user_bag_log ubl
                WHERE ubl.log_timestamp = sl.timestamp
                    AND ubl.tag_timestamp = rt.timestamp
            )
    ";

    // Execute the SQL query to insert data
    $stmtInsert = $conn->prepare($sqlInsert);
    $stmtInsert->execute();

    // Get the number of rows affected (inserted)
    $rowsInserted = $stmtInsert->affected_rows;

    if ($rowsInserted > 0) {
        echo "Inserted $rowsInserted row(s) into user_bag_log.<br>";
    } else {
        echo "No new records inserted.<br>";
    }

    // SQL query to fetch data from user_bag_log for display
    $sqlSelect = "
        SELECT
            name,
            number,
            bag_tag_number AS bag_tag_id,
            id_number,
            tag_timestamp AS registered_time,
            log_timestamp AS log_time,
            status
        FROM
            user_bag_log
    ";

    // Execute the SELECT query to fetch data
    $result = $conn->query($sqlSelect);

    if ($result->num_rows > 0) {
        echo '<table>';
        echo '<thead><tr><th>Name</th><th>Number</th><th>Bag Tag ID Number</th><th>ID Number</th><th>Registered Time</th><th>Log Time</th><th>status</th></tr></thead>';
        echo '<tbody>';
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($row['name']) . '</td>';
            echo '<td>' . htmlspecialchars($row['number']) . '</td>';
            echo '<td>' . htmlspecialchars($row['bag_tag_id']) . '</td>';
            echo '<td>' . htmlspecialchars($row['id_number']) . '</td>';
            echo '<td>' . htmlspecialchars($row['registered_time']) . '</td>';
            echo '<td>' . htmlspecialchars($row['log_time']) . '</td>';
            echo '<td>' . htmlspecialchars($row['status']) . '</td>';
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
    } else {
        echo '<p>No records found</p>';
    }

} catch (Exception $e) {
    // Display an error message if an exception occurred
    echo "Error: " . $e->getMessage();
}

// Close the database connection
$conn->close();
?>
