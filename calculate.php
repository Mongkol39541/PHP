<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<body class="bg-dark p-3 mb-2">
    <br /><br />
    <?php
    session_start();
    if ($_SESSION['name'] == null) {
        $_SESSION['name'] = $_POST["name"];
        $_SESSION['password'] = $_POST["password"];
    }
    session_destroy();
    ?>
    <div class="container my-3 bg-white rounded w-50">
        <br />
        <h1 class="text-center">ยินดีต้อนรับ <?php echo $_SESSION["name"]; ?></h1><br />
        <img width="500" height="500" src="boss.jpg" class="rounded mx-auto d-block my-3" /><br />
        <p class="text-center">
            <a href="index.php" class="btn btn-danger me-3">ออกจากระบบ</a>
        </p>
        <br />
    </div>
</body>
</body>

</html>