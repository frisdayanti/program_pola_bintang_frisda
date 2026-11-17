
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Pola Bintang</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 30px 15px;
            font-family: Arial, sans-serif;
            background-color: #f4f1e8;
            color: #343d35;
        }

        .container {
            max-width: 900px;
            margin: auto;
        }

        .header {
            background-color: #637d68;
            color: white;
            padding: 28px;
            border-radius: 8px;
            margin-bottom: 22px;
        }

        .header h1 {
            margin: 0 0 8px;
            font-size: 25px;
        }

        .header p {
            margin: 0;
            font-size: 14px;
            color: #e6eee5;
        }

        .form-box {
            background-color: #fff;
            padding: 25px;
            border-radius: 8px;
            border: 1px solid #e3e0d6;
            margin-bottom: 25px;
        }

        .form-box h3 {
            margin-top: 0;
            color: #526b57;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            font-size: 14px;
        }

        input[type="number"] {
            width: 100%;
            max-width: 300px;
            padding: 11px;
            border: 1px solid #c9d1c5;
            border-radius: 5px;
            font-size: 15px;
            margin-bottom: 15px;
            outline: none;
        }

        input[type="number"]:focus {
            border-color: #637d68;
        }

        button {
            display: block;
            background-color: #637d68;
            color: white;
            border: none;
            padding: 11px 22px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }

        button:hover {
            background-color: #4e6653;
        }

        .hasil-title {
            font-size: 20px;
            color: #526b57;
            margin-bottom: 15px;
        }

        .hasil-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 16px;
        }

        .pattern-box {
            background-color: #fff;
            border: 1px solid #e2e2d9;
            border-radius: 8px;
            padding: 20px;
        }

        .pattern-box h4 {
            margin: 0 0 15px;
            color: #526b57;
            font-size: 15px;
        }

        pre {
            background-color: #f1f4ed;
            color: #526b57;
            padding: 15px;
            border-radius: 5px;
            font-family: Consolas, monospace;
            font-size: 15px;
            line-height: 1.4;
            overflow-x: auto;
            margin: 0;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            color: #858b7e;
            font-size: 13px;
        }

        @media (max-width: 600px) {
            .hasil-grid {
                grid-template-columns: 1fr;
            }

            .header h1 {
                font-size: 21px;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <div class="header">
        <h1>Program Generator Pola Bintang</h1>
        <p>Masukkan jumlah baris untuk menghasilkan empat bentuk pola bintang.</p>
    </div>

    <div class="form-box">
        <h3>Pengaturan Pola</h3>

        <form method="POST">
            <label for="nilai">Jumlah Baris (1 - 20)</label>

            <input
                type="number"
                name="nilai"
                id="nilai"
                min="1"
                max="20"
                value="<?php echo isset($_POST['nilai']) ? intval($_POST['nilai']) : 5; ?>"
                required
            >

            <button type="submit" name="submit">
                Buat Pola Bintang
            </button>
        </form>
    </div>

    <?php
    if (isset($_POST['submit'])) {

        $n = intval($_POST['nilai']);

        if ($n < 1) $n = 1;
        if ($n > 20) $n = 20;

        echo "<h3 class='hasil-title'>Hasil Pola Bintang - N = $n</h3>";
        echo "<div class='hasil-grid'>";

        // Pola 1: Piramida ke Atas
        echo "<div class='pattern-box'>";
        echo "<h4>01. Piramida ke Atas</h4>";
        echo "<pre>";

        for ($i = 1; $i <= $n; $i++) {
            echo str_repeat("  ", $n - $i);
            echo str_repeat("* ", (2 * $i) - 1);
            echo "\n";
        }

        echo "</pre>";
        echo "</div>";

        // Pola 2: Piramida ke Bawah
        echo "<div class='pattern-box'>";
        echo "<h4>02. Piramida ke Bawah</h4>";
        echo "<pre>";

        for ($i = $n; $i >= 1; $i--) {
            echo str_repeat("  ", $n - $i);
            echo str_repeat("* ", (2 * $i) - 1);
            echo "\n";
        }

        echo "</pre>";
        echo "</div>";

        // Pola 3: Segitiga Kiri
        echo "<div class='pattern-box'>";
        echo "<h4>03. Segitiga Samping Kiri</h4>";
        echo "<pre>";

        for ($i = 1; $i <= $n; $i++) {
            echo str_repeat("* ", $i);
            echo "\n";
        }

        echo "</pre>";
        echo "</div>";

        // Pola 4: Segitiga Kanan
        echo "<div class='pattern-box'>";
        echo "<h4>04. Segitiga Samping Kanan</h4>";
        echo "<pre>";

        for ($i = 1; $i <= $n; $i++) {
            echo str_repeat("  ", $n - $i);
            echo str_repeat("* ", $i);
            echo "\n";
        }

        echo "</pre>";
        echo "</div>";

        echo "</div>";
    }
    ?>

    <div class="footer">
        Program Generator Pola Bintang | PHP
    </div>

</div>

</body>
</html>
