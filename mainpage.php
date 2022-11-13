<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="static/bgimage.css">
<title>โปรแกรมคำนวณเพื่อสุขภาพ</title>
<link rel="icon" type="image/x-icon" href="static/ph05.png" />
<?php
include('data.php');
?>

<body>
    <?php
    session_start();
    if ($_POST["name"] == "" || $_POST["password"] == "") {
        $csvtestFile = fopen('info.csv', 'r') or die('Unable to open File');
        $_SESSION['name'] = fgets($csvtestFile);
        $_SESSION['password'] = fgets($csvtestFile);
        $_SESSION['image'] = fgets($csvtestFile);
        fclose($csvtestFile);
    } else {
        $_SESSION['name'] = $_POST["name"];
        $_SESSION['password'] = $_POST["password"];
        $_SESSION['image'] =  $_POST['uploadimage'];
        create($_SESSION['name'], $_SESSION['password'], $_SESSION['image']);
    }
    session_destroy();
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark dark-overlay fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="mainpage.php">
                <img src="static/ph05.png" width="60" height="60" class="d-inline-block align-text-top" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link me-3 active" href="mainpage.php">หน้าหลัก</a>
                    <a class="nav-link me-3 active" href="index.php">ข้อมูลผู้ใช้</a>
                    <a class="nav-link me-3 active" href="index.php">ความสัมพันธ์ของหมายเลข</a>
                    <a class="nav-link me-3 active" href="index.php">เกี่ยวกับผู้พัฒนา</a>
                </div>
            </div>
            <ul class="nav justify-content-end">
                <li class="nav-item me-3">
                    <img src="uploads/<?php echo $_SESSION['image']; ?>" width="55" height="55" class="rounded d-inline-block align-text-top" />
                </li>
                <li class="nav-item me-3 my-2">
                    <h3 class="text-light"><?php echo $_SESSION["name"]; ?></h3>
                </li>
                <li class="nav-item me-3 my-2">
                    <a href="index.php" type="button" class="btn btn-outline-light">เข้าสู่ระบบสมาชิกอื่น</a>
                </li>
                <li class="nav-item me-3 my-2">
                    <a href="index.php" type="button" class="btn btn-danger">ออกจากระบบ</a>
                </li>
            </ul>
        </div>
    </nav>
</body>
</body>

</html>