<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Upload Excel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Carica un file Excel</h2>
    <form action="preview.php" method="post" enctype="multipart/form-data">
        <input type="file" name="excel_file" accept=".xls,.xlsx" required><br><br>
        <input type="submit" value="Carica e mostra anteprima (simulata)">
    </form>
</body>
</html>