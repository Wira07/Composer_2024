<?php

require_once 'vendor/fzaninotto/Faker/src/autoload.php';
$faker = Faker\Factory::create('id_ID');

// Generate 10 users
// for ($i = 0; $i < 115; $i++) {
//     echo $faker->name;
//     echo "<br>";
// }

// echo $faker->name . "\n";
// echo $faker->address . "\n";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Penduduk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        table th {
            padding: 12px 15px;
            color: white;
            background-color: #333;
        }

        th,
        td {
            padding: 12px 15px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
            color: #333;
            text-transform: uppercase;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>

<body>
    <h1>Daftar Penduduk</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 0; $i < 10; $i++) : ?>
                <tr>
                    <td><?= $i + 1 ?></td>
                    <td><?= $faker->name ?></td>
                    <td><?= $faker->address ?></td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>
</body>

</html>