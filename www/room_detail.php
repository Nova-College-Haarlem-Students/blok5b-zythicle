<?php

require 'database.php';

$stmt = $conn->prepare("SELECT * FROM rooms WHERE id = :id");
$stmt->execute(['id' => $_GET['id']]);
$rooms = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$rooms) {
    header('Location: 404.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kamer detail</title>
</head>
<body>
    
<h1>Kamer detail</h1>

<p>Naam: <?php echo htmlspecialchars($rooms['name']); ?></p>
<p>Thema: <?php echo htmlspecialchars($rooms['theme']); ?></p>
<p>Verhaal: <?php echo htmlspecialchars($rooms['storyline']); ?></p>

<p>Difficulty: <?php echo htmlspecialchars($rooms['difficulty']); ?></p>
<p>Minimum aantal spelers: <?php echo htmlspecialchars($rooms['min_players']); ?></p>
<p>Maximaal aantal spelers: <?php echo htmlspecialchars($rooms['max_players']); ?></p>
<p>Prijs: €<?php echo number_format($rooms['price_per_person'], 2); ?></p>

</body>
</html>