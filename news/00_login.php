<?php
session_start();
if(isset($_POST)['mEmail']&& isset($_POST['mPassword'])){
    $_SESSION['login_member']=$_POST['n_name'];
    $_SESSION['login_level']='admin';
    header("location:./member.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>註冊</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" href="source/cdn.jsdelivr.net_npm_bootstrap@5.3.0_dist_css_bootstrap.min.css">
    <script src="source/cdn.jsdelivr.net_npm_bootstrap@5.3.0_dist_js_bootstrap.bundle.min.js"></script>
    <script src="source/cdn.jsdelivr.net_npm_bootstrap@5.3.0_dist_js_bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            padding: 20px;
        }

        h2 {
            color: #333333;

        }

        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            max-width: 500px;
            margin: 0 auto;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #333333;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #cccccc;
            margin-bottom: 15px;
            position: relative;
        }

        input[type="password"] {
            padding-right: 40px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .radio-group {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .radio-group label {
            margin-right: 10px;
        }

        .radio-group label.radio-label {
            display: inline-block;
            margin-right: 5px;
        }

        input[type="radio"] {
            margin-bottom: 10px;
            margin-right: 10px;
        }

        button[id="toggleButton"] {
            border: 0px;
            background-color: #ffffff;
            position: absolute;
            top: 40%;
            right: 10px;
            transform: translateY(-50%);
        }
    </style>
    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("passwordInput");
            var eyeIcon = document.getElementById("eyeIcon");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                eyeIcon.classList.remove("fa-eye");
                eyeIcon.classList.add("fa-eye-slash");
            } else {
                passwordInput.type = "password";
                eyeIcon.classList.remove("fa-eye-slash");
                eyeIcon.classList.add("fa-eye");
            }
        }
    </script>
</head>

<body>
    <div class="container">
        <h2>登入
        </h2>
        <form action="00_login.php" method="GET">
            <label for="email">電子郵件：</label>
            <input type="email" name="mEmail" placeholder="請輸入電子郵件" required>
            <label for="password">密碼：</label>
            <div id="passwordInputGroup" class="input-group">
                <input type="password" name="confirm_password" id="passwordInput" placeholder="請輸入確認密碼" required>
                <button type="button" id="toggleButton" onclick="togglePasswordVisibility()">
                    <i id="eyeIcon" class="fas fa-eye"></i>
                </button>
            </div>

            <div class="radio-group">
                <label class="radio-label">會員類型：</label>
                <label for="student">學生</label>
                <input type="radio" name="m_type" value="s" required>
                <label for="teacher">教師</label>
                <input type="radio" name="m_type" value="t">
            </div>
            <input type="submit" value="登入">
        </form>
    </div>
</body>

</html>