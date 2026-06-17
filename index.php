<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Pendaftaran</title>
</head>
<body>

    <h2>Form Pendaftaran</h2>
    
    <form action="proses.php" method="POST">
        <label>Nama Lengkap:</label><br>
        <input type="text" name="nama" required><br><br>
        
        <label>Alamat Email:</label><br>
        <input type="email" name="email" required><br><br>
        
        <button type="submit">Daftar Sekarang</button>
    </form>

</body>
</html>