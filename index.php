<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon Register</title>
    <link href="css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script type="text/javascript" src="js/scripts.js"></script>
</head>

<body>
    <div class="container">
        <h2>Pokemon Register</h2>
        <form method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="code">Code:</label>
                <input type="text" id="code" name="code" required>
            </div>

            <div class="form-group">
                <label for="power">Combat Power:</label>
                <input type="text" id="power" name="power" required>
            </div>

            <div class="form-group" id="typeCheckbox">
                <label for="types">Types (max 3):</label>
                <div class="column">
                    <label><input type="checkbox" name="types[]" value="normal"> Normal</label>
                    <label><input type="checkbox" name="types[]" value="fire"> Fire</label>
                    <label><input type="checkbox" name="types[]" value="water"> Water</label>
                    <label><input type="checkbox" name="types[]" value="electric"> Electric</label>
                    <label><input type="checkbox" name="types[]" value="grass"> Grass</label>
                    <label><input type="checkbox" name="types[]" value="ice"> Ice</label>
                    <label><input type="checkbox" name="types[]" value="fighting"> Fighting</label>
                    <label><input type="checkbox" name="types[]" value="poison"> Poison</label>
                    <label><input type="checkbox" name="types[]" value="ground"> Ground</label>
                    <label><input type="checkbox" name="types[]" value="flying"> Flying</label>
                    <label><input type="checkbox" name="types[]" value="psychic"> Psychic</label>
                    <label><input type="checkbox" name="types[]" value="bug"> Bug</label>
                    <label><input type="checkbox" name="types[]" value="rock"> Rock</label>
                    <label><input type="checkbox" name="types[]" value="ghost"> Ghost</label>
                    <label><input type="checkbox" name="types[]" value="dragon"> Dragon</label>
                    <label><input type="checkbox" name="types[]" value="dark"> Dark</label>
                    <label><input type="checkbox" name="types[]" value="steel"> Steel</label>
                    <label><input type="checkbox" name="types[]" value="fairy"> Fairy</label>
                </div>
            </div>

            <div class="form-group">
                <button class="btn btn-success btn-block" type="submit">Register</button>
                <button class="btn btn-success btn-block" onclick="navigateToList()">List</button>
            </div>
        </form>
    </div>
    <script>
        verifyCheckbox();
    </script>
</body>

</html>