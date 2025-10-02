<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES['excel_file'])) {
        // Simulazione: Excel caricato, ma usiamo dati fittizi
        $*** = "***";
        $fonte = "Excel (simulato)";
    } else {
        $*** = $_POST['***'] ?? '';
        $fonte = "Inserimento manuale";
    }

    $somma = $valore1 + $valore2;
} else {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Anteprima</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Anteprima Dati</h2>
    <p><strong>Fonte:</strong> <?= htmlspecialchars($fonte) ?></p>
    <ul>
        <li>***: <?= htmlspecialchars($***) ?></li>
        <li><strong>Somma: <?= $somma ?></strong></li>
    </ul>

    <form action="save.php" method="post">
        <input type="hidden" name="***" value="<?= htmlspecialchars($***) ?>">
    </form>
</body>
</html>