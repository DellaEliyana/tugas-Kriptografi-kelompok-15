<?php
require_once 'cipher/VigenereCipher.php';
require_once 'cipher/AutoKeyVigenere.php'; // Pastikan AutoKeyVigenere di-load
require_once 'cipher/PlayfairCipher.php'; // Tambahkan PlayfairCipher di sini

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cipherMethod = $_POST['cipher-method'];
    $key = $_POST['key'];
    $inputText = isset($_POST['input-text']) ? $_POST['input-text'] : '';
    $action = $_POST['action'];

    switch ($cipherMethod) {
        case 'vigenere':
            $cipher = new VigenereCipher();
            break;
        case 'auto-key-vigenere':
            $cipher = new AutoKeyVigenere();
            break;
        case 'playfair': // Menambahkan Playfair Cipher
            $cipher = new PlayfairCipher($key); // Pastikan untuk memberikan kunci
            break;
        default:
            echo "Invalid cipher method selected.";
            exit;
    }

    if ($action === 'encrypt') {
        // Pastikan untuk memanggil metode encrypt dengan parameter yang benar
        $cipherText = $cipher->encrypt($inputText, $key); 
        echo "Encrypted Text: " . $cipherText; // Tanpa base64_encode
    } elseif ($action === 'decrypt') {
        // Pastikan untuk memanggil metode decrypt dengan parameter yang benar
        $plainText = $cipher->decrypt($inputText, $key); 
        echo "Decrypted Text: " . $plainText; // Tanpa base64_encode
    }
}
?>
