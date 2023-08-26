<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

</head>

<style>
    .container {
        display: flex;
        justify-content: center;
        /* Horizontally center */
        align-items: center;
        padding: 30px;
    }
</style>

<body><br>
    <div class='container'>
        <?php if (isset($table)) {
            foreach ($table as $row) {

                ?>
                <form action='http://localhost/ci3/index.php/student/updatedata/<?php echo $row->id ?>' method='POST'>



                    <input type='text' name='name' class='form-control' value=<?php echo $row->name ?>><br>
                    <input type='text' name='mobile' class='form-control' value=<?php echo $row->mobile ?>><br>
                    <input type='text' name='city' class='form-control' value=<?php echo $row->city ?>><br>
                    <input type='submit' class='btn btn-primary' name='update' value='update'><br>
                    <input type='hidden' name='sid' value=<?php $row->id ?> </form>
                    <?php
            }
        }
        ?>
    </div>
</body>

</html>