<?php
session_start();
if (!isset($_SESSION['login_member'])) {
    //如果login_member session變數不存在
    //導到00_login.php
    // header("Location: login.php");
}

if (isset($_POST['action']) && ($_POST['action'] == 'add')) {
    // echo '------------'.$_POST['action']; 
    include('./conn/conn_obj.php');

    //方法1--插入資料，使用query
    $mName = $_POST['mName'];
    $mEmail = $_POST['mEmail'];
    $mPassword = password_hash($_POST['mPassword'], PASSWORD_DEFAULT);
    $mType = $_POST['mType'];
    $mPoints = $_POST['mPoints'];

    $sql_query = "INSERT INTO `member` (`mName`, `mEmail`, `mPassword`, `mType`, `mPoints`) 
    VALUES ('$mName','$mEmail','$mPassword','$mType','$mPoints')";
    $result = $db_link->query($sql_query);


    //方法2--插入資料，使用prepare
    // $sql_query = "INSERT INTO `students` (`cName`, `cSex`, `cBirthday`, `cEmail`, `cPhone`, `cAddr`) 
    // VALUES (?,?,?,?,?,?);";
    // $stmt = $db_link->prepare($sql_query);
    // $stmt->bind_param(
    //     'ssssss',
    //     $_POST['cName'],
    //     $_POST['cSex'],
    //     $_POST['cBirthday'],
    //     $_POST['cEmail'],
    //     $_POST['cPhone'],
    //     $_POST['cAddr'],
    // );
    // $stmt->execute();
    // $stmt->close();
    // $db_link->close();
    header('location:./member.php');
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>資料新增系統</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>




<body>
    <br><br><br><br><br>
    <div class="container">

        <h2>資料新增系統<a href="./member.php" class="btn btn-success" style="margin-left: 3rem;">回主畫面</a></h2>
        <hr><br>


        <form action="./member_add.php" method="get">
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>欄位</th>
                        <th>資料</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>姓名</td>
                        <td><input type="text" class="form-control" name="mName" id="mName"></td>
                    </tr>

                    <tr>
                        <td>電子郵件</td>
                        <td><input type="text" class="form-control" name="mEmail" id="mEmail"></td>
                    </tr>
                    <tr>
                        <td>密碼</td>
                        <td><input type="password" class="form-control" name="mPassword" id="mPassword" required></td>
                    </tr>
                    <tr>
                        <td>驗證密碼</td>
                        <td><input type="password" class="form-control" name="mPassword2" id="mPassword2" onkeyup="checkpassword()" required>
                            <br><span id="info"></span>
                        </td>
                    </tr>


                    <!-- 範例 -->
                    <!-- <div class="mb-3 row">
                        <label for="n_password" class="offset-md-3 col-md-1 col-form-label">密碼</label>
                        <div class="col-md-5">
                            <input type="password" class="form-control" id="n_password" name="n_password" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="n_password2" class="offset-md-3 col-md-1 col-form-label">驗證密碼</label>
                        <div class="col-md-5">
                            <input type="password" class="form-control" id="n_password2" name="n_password2" onkeyup="checkpassword()" required><br>
                            <span id="info"></span>
                        </div>
                    </div> -->


                    <tr>
                        <td>會員類型</td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="mType" id="radio1" value="s" checked>
                                <label class="form-check-label" for="radio1">學員</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="mType" id="radio2" value="t">
                                <label class="form-check-label" for="radio2">教師</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>點數餘額</td>
                        <td><input type="number" class="form-control" id="mPoints" name="mPoints" size="40" placeholder="0"></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input name="action" type="hidden" value="add">
                            <input type="submit" id="ok" class="btn btn-primary" name="button" value="新增資料">&emsp;&emsp;&emsp;
                            <input type="reset" class="btn btn-secondary" name="button2" value="重新填寫">
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
        <script>
            function checkpassword() {
                var password = document.getElementById('mPassword').value;
                var password2 = document.getElementById('mPassword2').value;
                if (password == password2) {
                    document.getElementById('info').innerHTML = "雙重密碼相同";
                    document.getElementById('ok').disabled = false;
                } else {
                    document.getElementById('info').innerHTML = "雙重密碼不相同";
                    document.getElementById('ok').disabled = true;
                }
            }
        </script>























    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>