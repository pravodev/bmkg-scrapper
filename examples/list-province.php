<?php

include "../vendor/autoload.php";

use PravoDev\BMKGScrapper\Bmkg;

$bmkg = new Bmkg();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>List Provinsi</h1>
    <table>
        <thead>
            <tr>
                <td>No.</td>
                <td>Image</td>
                <td>Name</td>
            </tr>
        </thead>
        <tbody>
            <?php
                $provinces = $bmkg->provinces()->all();

                foreach($provinces as $index => $province){
                    echo '<tr>';
                    echo '<td>' . ($index + 1) . '</td>';
                    echo '<td><img src="' . $province->image . '"/></td>';
                    echo '<td>' . $province->name . '</td>';
                    echo '</tr>';
                }
            ?>
        </tbody>
    </table>
</body>
</html>