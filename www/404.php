<?php
session_start();
http_response_code(404); // Zet de HTTP status code naar 404
require 'header.php';
?>
<main style="text-align: center; padding: 60px 20px;">
    <h1 style="font-size: 120px; color: #3498db; margin: 0;">404</h1>
    <h2 style="color: #333;">Pagina Niet Gevonden</h2>
    <p style="color: #666; font-size: 18px;">
        De pagina die je zoekt bestaat niet (meer).
    </p>
    <p style="color: #999; margin-top: 20px;">
        Mogelijk is de link verouderd of is de pagina verwijderd.
    </p>
    <div style="margin-top: 40px;">
        <a href="index.php" class="btn">Terug naar Home</a>
    </div>
</main>
<?php require 'footer.php'; ?>