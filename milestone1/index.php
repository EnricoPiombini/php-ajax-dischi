<?php
require_once "../api/db.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Php Albums</title>
</head>

<body>


    <div class="container ">

        <div class="row row-cols-5">

            <?php foreach ($dbDiscs as $disc) { ?>
                <div class="col">
                    <div class="card text-center mt-3">
                        <img src="<?php echo $disc['poster'] ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $disc["title"] ?></h5>
                            <p class="card-text">
                                <?php echo $disc["author"] ?>
                            </p>
                            <p class="card-text">
                                <?php echo $disc["year"] ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>