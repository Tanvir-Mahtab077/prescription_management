<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>

<body>

    <?php
    include('header.php');
    include('config.php');
    if ($_SESSION['uname'] == null) {
        header('Location:index.php');
    }
    ?>

    <div class="container">

        <div class="text-center">
            <h1>Proifle information</h1>
            <?php
            if (isset($_SESSION['uname'])) {
            ?>
                <?php
                $userName = $_SESSION['uname'];

                $sql = "SELECT * FROM doctor where uname = '$userName'";
                $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <p>
                            <span><b>Username:</b></span> <span><?php echo $row['uname']; ?></span>
                        </p>
                        <p>
                            <span><b>Phone number:</b></span> <span><?php echo $row['phone']; ?></span>
                        </p>
                        <p>
                            <span><b>Degree:</b></span> <span><?php echo $row['degree']; ?></span>
                        </p>
                        <p>
                            <span><b>Age:</b></span> <span><?php echo $row['age']; ?></span>
                        </p>
            <?php
                        $_SESSION['uname'] = $row['uname'];
                        $_SESSION['pswd'] = $row['password'];
                    }
                }
            }
            ?>
        </div>

    </div>


</body>

</html>