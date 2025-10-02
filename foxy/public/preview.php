<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES['excel_file'])) {
        // Simulazione: Excel caricato, ma usiamo dati fittizi
        $nome = "Mario";
        $cognome = "Rossi";
        $valore1 = 10;
        $valore2 = 20;
        $fonte = "Excel (simulato)";
    } else {
        $nome = $_POST['nome'] ?? '';
        $cognome = $_POST['cognome'] ?? '';
        $valore1 = $_POST['valore1'] ?? 0;
        $valore2 = $_POST['valore2'] ?? 0;
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
        <li>Nome: <?= htmlspecialchars($nome) ?></li>
        <li>Cognome: <?= htmlspecialchars($cognome) ?></li>
        <li>Valore 1: <?= htmlspecialchars($valore1) ?></li>
        <li>Valore 2: <?= htmlspecialchars($valore2) ?></li>
        <li><strong>Somma: <?= $somma ?></strong></li>
    </ul>

    <form action="save.php" method="post">
        <input type="hidden" name="nome" value="<?= htmlspecialchars($nome) ?>">
        <input type="hidden" name="cognome" value="<?= htmlspecialchars($cognome) ?>">
        <input type="hidden" name="valore1" value="<?= htmlspecialchars($valore1) ?>">
        <input type="hidden" name="valore2" value="<?= htmlspecialchars($valore2) ?>">
        <input type="submit" value="Conferma e salva (simulazione)">
    </form>
</body>
</html>