<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="static/bgimage.css">
<title>โปรแกรมคำนวณเพื่อสุขภาพ</title>
<link rel="icon" type="image/x-icon" href="static/ph05.png" />
<style>
    .error {
        color: #FF0000;
    }

    .inerror {
        color: seagreen;
    }
</style>

<body>
    <?php
    $nameErr = $passwordErr = $comp = $mes = "";
    $name = $password = $name_file = "";
    $valu = "ตรวจสอบข้อมูล";
    $color = "outline-danger";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "* กรุณาใส่ชื่อตัวละคร";
        } elseif (empty($_POST["password"])) {
            $passwordErr = "* กรุณาใส่รหัสผ่านตัวละคร";
        } else {
            $name = $_POST["name"];
            $password = $_POST["password"];
            $mes = "ข้อมูลครบถ้วน";
            $comp = "mainpage.php";
            $valu = "เข้าสู่ระบบ";
            $color = "success";
            $name_file =  $_FILES['upload']['name'];
            $tmp_name =  $_FILES['upload']['tmp_name'];
            $locate_img = "uploads/";
            move_uploaded_file($tmp_name, $locate_img . $name_file);
        }
    }
    ?>
    <div class="my-3 p-3">
        <div class="bg-white rounded-3 w-50 text-dark my-3 p-3">
            <form action="<?php echo $comp; ?>" method="post" enctype="multipart/form-data">
                <h1 class="container text-center my-3 p-3"><strong>สร้างตัวละคร</strong></h1>
                <div class="container form-group my-3 p-3">
                    <h4 class="my-3 p-3" for="name">ชื่อตัวละคร</h4>
                    <input type="text" name="name" class="form-control text-center col align-self-center" value="<?php echo $name; ?>" />
                    <span class="error my-3 p-3"><?php echo $nameErr; ?></span>
                </div>
                <div class="container form-group my-3 p-3">
                    <h4 class="my-3 p-3" for="password">รหัสผ่านของตัวละคร</h4>
                    <input type="text" name="password" class="form-control text-center col align-self-center" value="<?php echo $password; ?>" />
                    <span class="error my-3 p-3"><?php echo $passwordErr; ?></span>
                </div>
                <div class="container form-group my-3 p-3">
                    <h4 class="my-3 p-3" for="password">อัพโหลดโปรไฟล์ตัวละคร</h4>
                    <input type="file" class="form-control text-center col align-self-center" aria-label="Upload" name="upload">
                    <span class="my-3 p-3"><?php echo $name_file; ?></span>
                    <input type="hidden" value="<?php echo $name_file; ?>" name="uploadimage" />
                </div>
                <h4 class="container text-center my-3 p-3">
                    <span class="inerror my-3 p-3"><?php echo $mes; ?></span>
                    <button type="submit" class="btn btn-<?php echo $color; ?>"><?php echo $valu; ?></button>
                </h4>
            </form>
        </div>
    </div>
</body>

</html>