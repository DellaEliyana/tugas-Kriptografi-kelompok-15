<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encryption App</title>
    <link rel="stylesheet" href="Public/Style.css">
</head>
<body>
    <div class="container">
    <h1>Tugas 1 Kriptografi Kelompok 15 </h1>
    <form action="process.php" method="POST" enctype="multipart/form-data">
        <label for="cipher-method">Choose Cipher Method:</label>
        <select name="cipher-method" id="cipher-method" class="">
            <option value="vigenere">Vigenere Cipher</option>
            <option value="auto-key-vigenere">Auto-Key Vigenere Cipher</option>
            <option value="playfair">Playfair Cipher</option>
            <option value="hill">Hill Cipher</option>
            <option value="super-encryption">Super Encryption</option>
        </select><br>

        <label for="key">Key:</label>
        <input type="text" id="key" name="key" required>

        <label for="input-text">Input Text:</label>
        <textarea id="input-text" name="input-text"></textarea>

        <label for="input-file">Upload a File:</label>
        <input type="file" id="input-file" name="input-file"><br>

        <button type="submit" name="action" value="encrypt">Encrypt</button>
        <button type="submit" name="action" value="decrypt">Decrypt</button>
    </form>
    </div>
</body>
</html>