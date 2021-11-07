<?php include_once("connection/db.php"); ?>
<?php
if (isset($_SESSION['admin_name'])) {
    echo "<meta http-equiv=\"refresh\" content=\"0; url=index.php\">";
    exit();
} else {
}
?>
<?php
$error = "";
if (isset($_POST['submit'])) {
    $uid = @$_POST['admin_name'];
    $pwd = @$_POST['admin_password'];
    //Error Handlers
    //Check if inputs are empty
    if (empty($uid) || empty($pwd)) {
        $error = "<br><f style='font-size: 14px; color: #ff2d2d;'>You Cannot Leave The Input Fields Empty!</f><br>";
    } else {
        $sql = "SELECT * FROM admin WHERE admin_name='$uid'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck < 1) {
            $error = "<br><f style='font-size: 14px; color: #ff2d2d;'>Username is incorrect!</f><br>";
        } else {
            if ($row = mysqli_fetch_assoc($result)) {
                $id_login = $row['id'];
                $username_login = $row['admin_name'];
                $password_login = $row['admin_password'];
                //dehashing the password        
                if ($pwd == $password_login) {
                    $_SESSION['id'] = $id_login;
                    $_SESSION['admin_name'] = $username_login;
                    $_SESSION['admin_password'] = $password_login;
                    echo "<meta http-equiv=\"refresh\" content=\"0; url=index.php\">";
                } else {
                    $error = "<br><f style='font-size: 14px; color: #ff2d2d;'>Unknown Credentials. Check Again Your Inputs!</f><br>";
                }
            }
        }
    }
}
?>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome - Login To Vishwavedika</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <div class='seprator'>
        <div style='margin-right: auto; margin-left: auto; width: 80%;'><br><br><br><br>
            <img src='images/logo.png' width="120px"><br><br><br><br><br>
            <p style="font-size: 26px; font-weight: 600; color: #a4133c;">Login</p>
            <br>
            <p style="font-size: 12px; font-weight: 600; color: #333;">Login to your account...</p>
            <br>
            <form action="login.php" method="POST"><br>
                <p style="font-size: 13px; color: #666;">Enter Your Username...</p>
                <input type="text" name="admin_name" placeholder="Username" class="input_styler"><br><br>
                <p style="font-size: 13px; color: #666;">Securely Login to your account...</p>
                <input type="password" name="admin_password" placeholder="Password" class="input_styler">
                <br><?php echo $error ?><br>
                <input type="submit" name="submit" value="Login" style="border:2px solid #a4133c; background-color: #a4133c;" class="submit_styler"><br><br>
            </form>
        </div>
    </div>
    <div class='seprator_2'>
        <div style="width: 100%; height: 100%; background: rgb(3,17,42);
background: linear-gradient(90deg, rgba(3,17,42,0.5270483193277311) 0%, rgba(0,0,0,0.4738270308123249) 100%);"><br>
            <div style='margin-right: auto; margin-left: auto; width: 90%;'>
                <a href='' style="float: right; color: #fff; text-decoration: none; background: #d4a373; padding: 10px; border-radius: 4px;">Contact Us</a>
            </div>
            <div style='margin-right: auto; margin-left: auto; width: 80%; margin-top: 450px;'>
                <f style="font-size: 34px; line-height: 60px; color: #fff;">Matrimony; the high sea for which no compass has yet been invented.... </f><br>
                <f style='font-size: 28px; font-weight: 700; color: #fff;'>app.vishwavedika.net</f><br><br><br><br><br><br><br><br>
                <center>a
                </center>
            </div>
        </div>
    </div>
    <script src="" async defer></script>
</body>

</html>