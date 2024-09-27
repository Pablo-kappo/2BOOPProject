<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Days of the Week</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <form method="POST" action="">
            <div class="btn-group btn-group-toggle w-100" data-toggle="buttons">
                <label class="btn btn-primary">
                    <input type="radio" name="day" value="Monday" autocomplete="off"> Monday
                </label>
                <label class="btn btn-primary">
                    <input type="radio" name="day" value="Tuesday" autocomplete="off"> Tuesday
                </label>
                <label class="btn btn-primary">
                    <input type="radio" name="day" value="Wednesday" autocomplete="off"> Wednesday
                </label>
                <label class="btn btn-primary">
                    <input type="radio" name="day" value="Thursday" autocomplete="off"> Thursday
                </label>
                <label class="btn btn-primary">
                    <input type="radio" name="day" value="Friday" autocomplete="off"> Friday
                </label>
            </div>
            <button type="submit" class="btn btn-success mt-3 w-100">Submit</button>
        </form>

        <?php
        if (isset($_POST['day'])) {
            $selectedDay = htmlspecialchars($_POST['day']);
            echo "<h3 class='mt-4 text-center'>You selected: <strong>$selectedDay</strong></h3>";
        }
        ?>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
