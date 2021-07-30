<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BELAJAR PHP | HANIF</title>

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/0b20dfeace.js" crossorigin="anonymous"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap');

        body {
            margin: 0;
            padding: 0;
            font-family: poppins, sans-serif;
        }

        header {
            background-color: skyblue;
            padding: 4px;
            padding-left: 10px;
            position: fixed;
            width: 98%;
            top: 0;
            margin: auto;
            border-radius: 20px;
        }

        .header {
            display: flex;
            justify-content: center;
        }

        .tabel {
            margin: 50px;
            left: 20px;
            margin-top: 190px;
            /*border: 1px solid black;*/
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        td {
            padding: 10px 50px;
            text-align: center;
        }
        
        ul {
            text-align: left;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <div class="header">
        <header>
            <h1>BELAJAR PHP DASAR</h1>
            <p>Sumber : YT Web Programming Unpas</p>
        </header>    
    </div>
    
    <!-- Bagian Kiri -->
    <div class="tabel kiri">
        <table cellpadding="1" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Kegiatan</th>
                <th>Materi</th>
                <th>File</th>
            </tr>

            <tr>
                <td>1.</td>
                <td>Pertemuan 1</td>
                <td>
                    <ul>
                        <li>Persiapan Lingkungan</li>
                    </ul>
                </td>
                <td><a target="_blank" href="pertemuan1/index.php">index.php</a></td>
            </tr>

            <tr>
                <td>2.</td>
                <td>Pertemuan 2</td>
                <td>
                    <ul>
                        <li>Sintaks PHP</li>
                    </ul>
                </td>
                <td><a target="_blank" href="pertemuan2/index.php">index.php</a></td>
            </tr>

            <tr>
                <td>3.</td>
                <td>Pertemuan 3</td>
                <td>
                    <ul>
                        <li>Perluangan</li>
                    </ul>
                </td>
                <td>
                    <a target="_blank" href="pertemuan3/latihan1.php">latihan1.php</a><br>
                    <a target="_blank" href="pertemuan3/latihan2.php">latihan2.php</a>
                </td>
            </tr>

            <tr>
                <td>4.</td>
                <td>Pertemuan 4</td>
                <td>
                    <ul>
                        <li>Date</li>
                        <li>Function</li>
                    </ul>
                </td>
                <td>
                    <a target="_blank" href="pertemuan4/date.php">date.php</a><br>
                    <a target="_blank" href="pertemuan4/function.php">function.php</a>
                </td>
            </tr>

            <tr>
                <td>5.</td>
                <td>Pertemuan 5</td>
                <td>
                    <ul>
                        <li>Array</li>
                        <li>foreach</li>
                    </ul>
                </td>
                <td>
                    <a target="_blank" href="pertemuan5/latihan1.php">latihan1.php</a><br>
                    <a target="_blank" href="pertemuan5/latihan2.php">latihan2.php</a><br>
                    <a target="_blank" href="pertemuan5/latihan3.php">latihan3.php</a>
                </td>
            </tr>

            <tr>
                <td>6.</td>
                <td>Pertemuan 6</td>
                <td>
                    <ul>
                        <li>Array Asosiatif</li>
                    </ul>
                </td>
                <td>
                    <a target="_blank" href="pertemuan6/latihan1.php">latihan1.php</a><br>
                    <a target="_blank" href="pertemuan6/latihan2.php">latihan2.php</a><br>
                </td>
            </tr>

            <tr>
                <td>7.</td>
                <td>Pertemuan 7</td>
                <td>
                    <ul>
                        <li>Request Method</li>
                        <li>$_GET</li>
                        <li>$_POST</li>
                    </ul>
                </td>
                <td>
                    <a target="_blank" href="pertemuan7/latihan1.php">latihan1.php</a><br>
                    <a target="_blank" href="pertemuan7/latihan2.php">latihan2.php</a><br>
                    <a target="_blank" href="pertemuan7/latihan3.php">latihan3.php</a><br>
                    <a target="_blank" href="pertemuan7/latihan4.php">latihan4.php</a><br>
                    <a target="_blank" href="pertemuan7/login/login.php">login.php</a><br>
                    <a target="_blank" href="pertemuan7/login/admin.php">admin.php</a>

                </td>
            </tr>

            <tr>
                <td>8.</td>
                <td>Pertemuan 8</td>
                <td>
                    <ul>
                        <li>Database</li>
                    </ul>
                </td>
                <td>
                    <a target="_blank" href="../phpmyadmin">phpmyadmin</a>
                </td>
            </tr>

            <tr>
                <td>9.</td>
                <td>Pertemuan 9</td>
                <td>
                    <ul>
                        <li>PHP + MySQL</li>
                    </ul>
                </td>
                <td>
                    <a target="_blank" href="pertemuan9/index.php">index.php</a><br>
                    <a target="_blank" href="pertemuan9/latihan2.php">latihan2.php</a><br>
                </td>
            </tr>

        </table>

    </div>

    <!-- Bagian Kanan -->
    <div class="kanan">

    </div>

</body>

</html>