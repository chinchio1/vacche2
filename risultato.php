<?php
// verifica che la richiesta sia POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    // se qualcuno accede direttamente con GET, puoi bloccare o redirigere
    echo "Accesso diretto non permesso.";
    exit;
}

// Recupera i valori inviati — con validazione minima
$x = isset($_POST['x']) ? floatval($_POST['x']) : 0;
$y = isset($_POST['y']) ? floatval($_POST['y']) : 0;
$z = isset($_POST['z']) ? floatval($_POST['z']) : 0;

// Esempio di calcoli “nascosti”
// Puoi aggiungerne quanti vuoi

$somma = $x + $y + $z;
$media = ($x + $y + $z) / 3;
$prodotto = $x * $y * $z;

// Un calcolo condizionale: (x + y) / z, se z ≠ 0
if ($z != 0) {
    $calcolo = ($x + $y) / $z;
} else {
    $calcolo = null;
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <title>Risultati</title>
</head>
<body>
  <h2>Risultati dei calcoli</h2>

  <p>Valore X: <?php echo htmlspecialchars($x); ?></p>
  <p>Valore Y: <?php echo htmlspecialchars($y); ?></p>
  <p>Valore Z: <?php echo htmlspecialchars($z); ?></p>

  <hr>

  <p>Somma (X + Y + Z): <?php echo $somma; ?></p>
  <p>Media: <?php echo $media; ?></p>
  <p>Prodotto (X × Y × Z): <?php echo $prodotto; ?></p>

  <?php if ($calcolo !== null): ?>
    <p>Calcolo (X + Y) / Z = <?php echo $calcolo; ?></p>
  <?php else: ?>
    <p>Calcolo (X + Y) / Z non possibile (Z = 0)</p>
  <?php endif; ?>

  <p><a href="inserisci.php">Torna indietro per inserire altri valori</a></p>
</body>
</html>
