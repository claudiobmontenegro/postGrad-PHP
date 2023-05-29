<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon List</title>
    <link href="css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script type="text/javascript" src="js/scripts.js"></script>
</head>

<body>
    <div class="container">
        <h2>Pokemon List</h2>
        <form>
            <?php
            require 'vendor/autoload.php';
            use Hashids\Hashids;
            $hashids = new Hashids();
            $database = new PDO('mysql:host=localhost;dbname=postgrad', 'root', '');
            $query = "SELECT * FROM pokemon";
            $dataset = $database->query($query);
            ?>
            <table class="table table-hover">
                <tr>
                    <td>Name:</td>
                    <td>Combat Power:</td>
                    <td>Types:</td>
                    <td>Codes:</td>
                    <td>Hash:</td>
                </tr>
                <?php
                while ($row = $dataset->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['power'] . "</td>";
                    echo "<td>" . $row['type'] . "</td>";
                    echo "<td>" . $row['code'] . "</td>";
                    echo "<td>" . $hashids->encode($row['id']) . "</td>";
                }
                ?>
            </table>
            <div class="form-group">
                <a href="index.php">
                    <button class="btn btn-success" type="button">Register new Pokemon</button>
                </a>
            </div>
        </form>
    </div>
</body>

</html>