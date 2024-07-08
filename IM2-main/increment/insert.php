<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "increment_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$projectName = $_POST['project-name'] ?? '';
$projectOwner = $_POST['project-owner'] ?? '';
$startDate = $_POST['start-date'] ?? '';
$endDate = $_POST['end-date'] ?? '';


$sql = "INSERT INTO projects (project_name, project_owner, start_date, end_date)
        VALUES (?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $projectName, $projectOwner, $startDate, $endDate);

if ($stmt->execute()) {
    $projectId = $conn->insert_id;

    
    if (isset($_POST['task-name'])) {
        $taskNames = $_POST['task-name'];
        $featureTypes = $_POST['feature-type'];
        $responsibles = $_POST['responsible'];
        $statuses = $_POST['status'];
        $risks = $_POST['risk'];
        $comments = $_POST['comments'];

        
        $stmtTasks = $conn->prepare("INSERT INTO tasks (project_id, task_name, feature_type, responsible, status, risk, comments)
                                    VALUES (?, ?, ?, ?, ?, ?, ?)");

        $stmtTasks->bind_param("issssss", $projectId, $taskName, $featureType, $responsible, $status, $risk, $comment);

        foreach ($taskNames as $key => $taskName) {
            $featureType = $featureTypes[$key];
            $responsible = $responsibles[$key];
            $status = $statuses[$key];
            $risk = $risks[$key];
            $comment = $comments[$key];

            $stmtTasks->execute();
        }

        $stmtTasks->close();
    }

    echo "New project and tasks created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$stmt->close();
$conn->close();
?>