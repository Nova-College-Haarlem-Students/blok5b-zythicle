<?php

require 'database.php';


$stmt = $conn->prepare("SELECT * FROM rooms");
$stmt->execute();
$rooms = $stmt->fetchAll(PDO::FETCH_ASSOC);

include 'header.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escape Room</title>
</head>
<body>
    
<h1>Escape Room</h1>

<main>

    <?php foreach ($rooms as $room): ?>
        <div class="room">
            <h2><?php echo htmlspecialchars($room['name']); ?></h2>
            <p><?php echo htmlspecialchars($room['theme']); ?></p>
            <a href="room_detail.php?id=<?php echo $room['id']; ?>">Bekijk Kamer</a>
        </div>
    <?php endforeach; ?>

</body>
</html>