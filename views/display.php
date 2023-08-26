<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

</head>

<body>
    <div class=container>
        <table class="table">
            <br>
            <h1>Student details</h1>
            <a href="http://localhost/ci3/index.php/student/add" button type="button" class="btn btn-primary">Add
                student</button></a><br>

            <thead>
                <tr>
                    <th scope="col">S.no</th>
                    <th scope="col">Name</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">City</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $i = 1;
                if (isset($table)) {
                    foreach ($table as $row) {

                        ?>
                        <tr>
                            <th scope="row">
                                <?php echo $i ?>
                            </th>
                            <td>
                                <?php echo $row->name ?>
                            </td>
                            <td>
                                <?php echo $row->mobile ?>
                            </td>
                            <td>
                                <?php echo $row->city ?>
                            </td>
                            <td><a href="http://localhost/ci3/index.php/student/editdata/<?php echo $row->id ?>"
                                    class="btn btn-primary">Edit</a></td>
                            <td><a href="http://localhost/ci3/index.php/student/delete/<?php echo $row->id ?>"
                                    class="btn btn-danger">Delete</a></td>


                        </tr>

                        <?php $i++;
                    }
                } ?>
            </tbody>
        </table>
</body>

</html>