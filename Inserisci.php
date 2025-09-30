<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <title>Inserisci dati</title>
</head>
<body>
  <h2>Inserisci i dati</h2>
  <form action="risultato.php" method="post">
    <label for="x">Valore X:</label>
    <input type="number" id="x" name="x" step="any" required><br><br>

    <label for="y">Valore Y:</label>
    <input type="number" id="y" name="y" step="any" required><br><br>

    <label for="z">Valore Z:</label>
    <input type="number" id="z" name="z" step="any" required><br><br>

    <input type="submit" value="Invia e calcola">
  </form>
</body>
</html>
