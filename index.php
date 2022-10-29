<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php
include('customer.php');
?>

<body class="bg-dark p-3 mb-2">
<br /><br /><br /><br /><br /><br />
    <div class="container my-3 bg-white rounded w-50">
        <div class="row">
            <div class="col align-self-center my-3">
                <br /><br />
                <h3 class="text-center">สมาชิก</h3>
                <br />
                <form action="calculate.php" method="post" enctype="multipart/form-data">
                    <div class="form-group my-3">
                        <label for="name">ชื่อผู้ใช้งาน</label>
                        <br /><br />
                        <input type="text" name="name" class="form-control text-center col align-self-center" />
                    </div>
                    <br />
                    <div class="form-group my-3">
                        <label for="password">รหัสผ่านของผู้ใช้งาน</label>
                        <br /><br />
                        <input type="text" name="password" class="form-control text-center col align-self-center" />
                    </div>
                    <br />
                    <p class="text-center">
                        <input type="submit" value="เข้าสู่ระบบ" class="btn btn-outline-dark me-3" />
                    </p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>