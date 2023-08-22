<?php
session_start();
include("./conn/conn_obj.php");

//查詢資料
$sql_query = "SELECT * FROM member";
$result = mysqli_query($db_link, $sql_query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>表格編輯練習</title>
    <link href="source/cdn.jsdelivr.net_npm_bootstrap@5.3.0_dist_css_bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/body.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />

    <style>
        /* .container {
            max-width: 1000px;
        } */

        th {
            font-size: 1rem;
        }

        tbody,
        td,
        tfoot,
        th,
        thead,
        tr {
            border-color: inherit;
            border-style: solid;
            border-width: initial;
        }

        .center {
            text-align: center;
        }

        .center a {
            text-decoration: none;
            color: black;
        }

        ;
    </style>
</head>







<body>
    <div id="nav" style="width: 100%;">
        <?php include('./php/nav.php'); ?>

    </div>
    <!-- nav stop -->
    <br><br>

    <div class="container p-3 bg-white shadow rounded-4">

        <h2 class="text-center">會員資料管理系統</h2>

        <?php if (isset($_SESSION['login_member'])) {
            echo '<div class="center">' . $_SESSION['login_member'] . '您好，</div>';
        }  ?><p class="text-center">目前資料筆數：<?php echo $result->num_rows ?> 筆，<a style="text-decoration: none;" href="./member_add.php">新增資料</a> <?php
                                                                                                                                                if (isset($_SESSION['login_member'])) {
                                                                                                                                                    echo  '<a style="text-decoration: none;" href="off.php">登出</a>';
                                                                                                                                                } else {
                                                                                                                                                    echo '<a style="text-decoration: none;" href="login.php">登入</a>';
                                                                                                                                                }
                                                                                                                                                ?>
        </p>

        <table class="table-sm table-striped table table-hover text-center">

            <thead>

                <tr>
                    <th class="col">NO</th>
                    <th class="col">姓名</th>
                    <th class="col">Email</th>
                    <th class="col">密碼</th>
                    <th class="col">會員身分</th>
                    <th class="col">點數餘額</th>
                    <th class="col" style="width: 120px;">編輯</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $num = 1;
                while ($row_result = $result->fetch_assoc()) {
                ?>
                    <tr>

                        <td class="align-middle "><?php echo $num;
                                                    $num++ ?></td>
                        <td class="align-middle"><?php echo $row_result['mName']; ?></td>
                        <td class="align-middle"><?php echo $row_result['mEmail']; ?></td>
                        <td class="align-middle"><?php echo $row_result['mPassword']; ?></td>
                        <td class="align-middle"><?php echo $row_result['mType']; ?></td>
                        <td class="align-middle"><?php echo $row_result['mPoints']; ?></td>
                        <td class="align-middle">
                            <a class="btn btn-sm btn-secondary my-0 text-nowrap" href="member_edit.php?new_id=<?php echo $row_result['mID']; ?>"> 編輯</a>
                            |
                            <a class="btn btn-sm btn-danger my-0 text-nowrap" href="./member_delete.php?new_id=<?php echo $row_result['mID']; ?>">刪除</a>
                        </td>
                    </tr>

                <?php } ?>
            </tbody>
        </table>
    </div>
    <br><br>
    <!-- footer start -->
    <?php include('./php/footer.php'); ?>
    <!-- footer stop -->






    <script src="source/cdn.jsdelivr.net_npm_bootstrap@5.3.0_dist_js_bootstrap.bundle.min.js"></script>
</body>

</html>