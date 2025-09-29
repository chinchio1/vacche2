<?php
// (Opzionale) attiva il reporting di errori per sviluppo
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Controlla che il form sia stato inviato via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Preleva i valori dal form (con validazione minima)
    $a = isset($_POST['a']) ? floatval($_POST['a']) : 0;
    $b = isset($_POST['b']) ? floatval($_POST['b']) : 0;
    $c = isset($_POST['c']) ? floatval($_POST['c']) : 0;

    // Esempio di calcoli “nascosti”
    // Ad esempio: somma, prodotto, e una formula arbitraria
    $somma = $a + $b + $c;
    $prodotto = $a * $b * $c;

    // Formula arbitraria: ad esempio (a + b) / c (con controllo su c ≠ 0)
    if ($c != 0) {
        $formula = ($a + $b) / $c;
    } else {
        $formula = null;  // o impostare un messaggio di errore
    }

    // Puoi aggiungere altri calcoli che non vuoi far vedere all’utente direttamente

} else {
    // Se accesso diretto via GET, puoi ridirigere o mostrare errore
    echo "Accesso non consentito.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <title>Risultati calcolo</title>
</head>
<body>
  <h2>Risultati</h2>

  <p>Valore A = <?php echo htmlspecialchars($a); ?></p>
  <p>Valore B = <?php echo htmlspecialchars($b); ?></p>
  <p>Valore C = <?php echo htmlspecialchars($c); ?></p>

  <hr>

  <p>Somma (A + B + C) = <?php echo $somma; ?></p>
  <p>Prodotto (A × B × C) = <?php echo $prodotto; ?></p>

  <?php if ($formula !== null): ?>
    <p>Formula (A + B) / C = <?php echo $formula; ?></p>
  <?php else: ?>
    <p>Formula (A + B) / C non calcolabile (C = 0)</p>
  <?php endif; ?>

  <p><a href="index.html">Torna indietro</a></p>
</body>
</html>

