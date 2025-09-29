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

  <p><a href="index.html">Torna indietro</a></p>
</body>
</html>

