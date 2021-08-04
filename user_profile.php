<?php include_once("connection/db.php"); ?>
<?php
if (isset($_SESSION['admin_name'])) {
} else {
    echo "<meta http-equiv=\"refresh\" content=\"0; url=login.php\">";
    exit();
}
$user_id = $_GET['id'];
?>
<?php
$query1 = "SELECT * from admin WHERE id = '$admin_id'";
$result1 = mysqli_query($conn, $query1);

while ($rows = mysqli_fetch_assoc($result1)) {
    $admin_name = $rows['admin_name'];
}
?>

<?php
$query2 = "SELECT * from users where id = '$user_id'";
$result2 = mysqli_query($conn, $query2);

while ($rows = mysqli_fetch_assoc($result2)) {
    $id = $rows['id'];
    $name = $rows['name'];
    $surname = $rows['surname'];
    $sex = $rows['sex'];
    $language = $rows['language'];
    $caste = $rows['caste'];
    $sub_caste = $rows['sub_caste'];
    $gothram = $rows['gothram'];
    $zodiac_sign = $rows['zodiac_sign'];
    $star = $rows['star'];
    $dob = $rows['dob'];
    $pob = $rows['pob'];
    $tob = $rows['tob'];
    $city = $rows['city'];
    $district = $rows['district'];
    $state = $rows['state'];
    $height = $rows['height'];
    $color = $rows['color'];
    $eating_habits = $rows['eating_habits'];
    $bad_habbits = $rows['bad_habbits'];
    $education = $rows['education'];
    $job = $rows['job'];
    $job_location = $rows['job_location'];
    $nri = $rows['nri'];
    $annual_income = $rows['annual_income'];
    $parents_details = $rows['parents_details'];
    $requirements = $rows['requirements'];
    $whatsapp_number = $rows['whatsapp_number'];
    $phone_number = $rows['phone_number'];
    $profile_pic = $rows['profile_pic'];
    $status = $rows['status'];
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<div class="sidebar" id="sidebar_toggle" style="background: #a4133c;">
    <br><br><br>
        <p style="font-weight: 600; margin-left: 30px; font-size: 12px; color: #98c1d9;">Dashboard</p><br>
        <a href="index.php"><button class="sidebar_link"><i class="fas fa-home" style="padding-right: 15px;"></i> Dashboard</button></a><br><br>
        <button class="sidebar_link2" onclick="main3()"><i class="fas fa-users" style="padding-right: 15px;"></i> User Profile</button>
</div>
<div class="header" id="header_toggle">
    <div style="padding: 10px;">
        <button id="hide_btn" style="background: #fff; float: left;  border: 1px solid #eee; padding: 10px; margin-top: 5px; color: #888;" onclick="panel1()"><i class="fas fa-bars"></i></button>
        <button id="show_btn" style="display: none; float: left; background: #fff; border: 1px solid #eee; padding: 10px; margin-top: 5px; color: #888;" onclick="panel2()"><i class="fas fa-bars"></i></button>
        <a href='index.php'><button id="Home" style="background: #fff; float: left;  border: 1px solid #eee; padding: 10px; margin-top: 5px; color: #888; margin-left: 10px;"><i class="fas fa-home"></i></button></a>
        <a href='logout.php'><button id="logout" style="float: right; background: #a4133c; border: 1px solid #a4133c; border-radius: 8px; padding: 10px; margin-top: 5px; color: #fff;" onclick="panel2()"><i class="fas fa-sign-out-alt"></i> Logout</button></a>
        <button style="background: #fff; float: right; border: 0 none; padding: 2px; margin-top: 5px; color: #888; margin-right: 20px;">
            <p style="float: right; font-size: 14px; font-weight: 600; margin-top: 5px; color:#001d3d;">Hello,  <?php echo $admin_name;?> <i class="fas fa-smile-wink" style="color: #e8c15f; font-size: 14px;"></i></p>
            <img src='images/logo.png' width="25px" style="float: right; margin-right: 05px; ">
        </button>
        <button style="background: #fff; float: right; border: 0 none; padding: 2px; margin-top: 5px; color: #888; margin-right: 20px;">
            <label id="seconds" style="float: right; font-size: 14px; font-weight: 600; margin-top: 5px; color:#001d3d;">00</label>
            <f style="float: right; font-size: 14px; font-weight: 600; margin-top: 5px; color:#001d3d;">:</f><label id="minutes" style="float: right; font-size: 14px; font-weight: 600; margin-top: 5px; color:#001d3d;">00</label>
            <f style="float: right; font-size: 14px; font-weight: 600; margin-top: 5px; color:#001d3d;">Time : &nbsp;</f>
        </button>
        <script>
            var minutesLabel = document.getElementById("minutes");
            var secondsLabel = document.getElementById("seconds");
            var totalSeconds = 0;
            setInterval(setTime, 1000);

            function setTime() {
                ++totalSeconds;
                secondsLabel.innerHTML = pad(totalSeconds % 60);
                minutesLabel.innerHTML = pad(parseInt(totalSeconds / 60));
            }

            function pad(val) {
                var valString = val + "";
                if (valString.length < 2) {
                    return "0" + valString;
                } else {
                    return valString;
                }
            }
        </script>
    </div>
</div>
<style type="text/css">
    .sidebar {
        width: 20%;
        height: 100%;
        background: #001d3d;
        position: fixed;
    }

    .header {
        width: 80%;
        background: #fff;
        border-bottom: 1px solid #eee;
        height: 65px;
        position: absolute;
        right: 0;
    }

    #body_area {
        width: 80%;
        background: #fff;
        right: 0;
        top: 70;
        position: absolute;
    }
</style>
<script>
    function panel1() {
        document.getElementById("sidebar_toggle").style.width = '0%';
        document.getElementById("sidebar_toggle").style.display = 'none';
        document.getElementById("header_toggle").style.width = '100%';
        document.getElementById("body_area").style.width = '100%';
        document.getElementById("show_btn").style.display = 'block';
        document.getElementById("hide_btn").style.display = 'none';
    }

    function panel2() {
        document.getElementById("sidebar_toggle").style.width = '20%';
        document.getElementById("sidebar_toggle").style.display = 'block';
        document.getElementById("header_toggle").style.width = '80%';
        document.getElementById("body_area").style.width = '80%';
        document.getElementById("show_btn").style.display = 'none';
        document.getElementById("hide_btn").style.display = 'block';
    }
</script>
<?php 
        $reg = @$_POST['reg'];
        if ($reg) {
        $name = strip_tags(@$_POST['name']);
        $surname = strip_tags(@$_POST['surname']);
        $sex = strip_tags(@$_POST['sex']);
        $language = strip_tags(@$_POST['language']);
        $caste = strip_tags(@$_POST['caste']);
        $sub_caste = strip_tags(@$_POST['sub_caste']);
        $gothram = strip_tags(@$_POST['gothram']);
        $zodiac_sign = strip_tags(@$_POST['zodiac_sign']);
        $star = strip_tags(@$_POST['star']);
        $dob = strip_tags(@$_POST['dob']);
        $pob = strip_tags(@$_POST['pob']);
        $tob = strip_tags(@$_POST['tob']);
        $city = strip_tags(@$_POST['city']);
        $district = strip_tags(@$_POST['district']);
        $state = strip_tags(@$_POST['state']);
        $height = strip_tags(@$_POST['height']);
        $color = strip_tags(@$_POST['color']);
        $eating_habits = strip_tags(@$_POST['eating_habits']);
        $bad_habbits = strip_tags(@$_POST['bad_habbits']);
        $education = strip_tags(@$_POST['education']);
        $job = strip_tags(@$_POST['job']);
        $job_location = strip_tags(@$_POST['job_location']);
        $nri = strip_tags(@$_POST['nri']);
        $annual_income = strip_tags(@$_POST['annual_income']);
        $parents_details = strip_tags(@$_POST['parents_details']);
        $requirements = strip_tags(@$_POST['requirements']);
        $whatsapp_number = strip_tags(@$_POST['whatsapp_number']);
        $phone_number = strip_tags(@$_POST['phone_number']);
        $status = strip_tags(@$_POST['status']);
            $sql3 = "UPDATE `users` SET `name`='$name',`surname`='$surname',`sex`='$sex',`language`='$language',
            `caste`='$caste',`sub_caste`='$sub_caste',`gothram`='$gothram',`zodiac_sign`='$zodiac_sign',`star`='$star',
            `dob`='$dob',`pob`='$pob',`tob`='$tob',`city`='$city',`district`='$district',
            `state`='$state',`height`='$height',`color`='$color',`eating_habits`='$eating_habits',
            `bad_habbits`='$bad_habbits',`education`='$education',`job`='$job',`job_location` = '$job_location',
            `nri`='$nri',`annual_income`='$annual_income',`parents_details`='$parents_details',`requirements`='$requirements',
            `whatsapp_number`='$whatsapp_number',`phone_number`='$phone_number', `status`='$status'
            WHERE id= '$user_id'";
            $rt = mysqli_query($conn, $sql3);

            if ($rt) {
                echo "<meta http-equiv=\"refresh\" content=\"0; url=index.php\">";
            } else {
                echo "<h1> ERROR!</h1> " . $sql3;
            }
        }

    ?>
<div id='body_area'>
<div style="padding: 120px;">
    <div style="margin-right: auto; margin-left: auto; width: 950px; border: 2px solid #eee; border-radius: 8px;">
        <div style="padding: 40px;">
            <form action="user_profile.php?id=<?php echo $user_id; ?>" method="post">
                <h1 style="font-size: 28px; font-weight: 600; color: #444; line-height: 60px;"><i class="fas fa-plus" style="font-size: 28px;"></i> Edit Profile</h1><br>
                <center><img src='images/assign.svg' width="200"></center><br>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputEmail4">Name</label>
            <input type="text" class="form-control" value="<?php echo $name ;?>" name="name" id="inputEmail4" placeholder="Name">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Surname</label>
            <input type="text" class="form-control" value="<?php echo $surname ;?>"  name="surname" id="inputEmail4" placeholder="Surname">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Gender</label>
            <input type="text" class="form-control" value="<?php echo $sex ;?>" name="sex" id="inputEmail4" placeholder="Gender">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Language</label>
            <input type="text" class="form-control" value="<?php echo $language ;?>" name="language" id="inputEmail4" placeholder="Language">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Caste</label>
            <input type="text" class="form-control" value="<?php echo $caste ;?>" name="caste" id="inputEmail4" placeholder="Caste">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Sub-Caste</label>
            <input type="text" class="form-control" value="<?php echo $sub_caste ;?>" name="sub_caste" id="inputEmail4" placeholder="Sub-Caste">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Gothram</label>
            <input type="text" class="form-control" value="<?php echo $gothram ;?>" name="gothram" id="inputEmail4" placeholder="Gothram">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Zodiac Sign</label>
            <input type="text" class="form-control" value="<?php echo $zodiac_sign ;?>" name="zodiac_sign" id="inputEmail4" placeholder="Zodiac Sign">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Star</label>
            <input type="text" class="form-control" value="<?php echo $star ;?>" name="star" id="inputEmail4" placeholder="Star">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Date Of Birth</label>
            <input type="text" class="form-control" value="<?php echo $dob ;?>" name="dob" id="inputEmail4" placeholder="Date Of Birth">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Place Of Birth</label>
            <input type="text" class="form-control" value="<?php echo $pob ;?>" name="pob" id="inputEmail4" placeholder="Place Of Birth">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Time Of Birth</label>
            <input type="text" class="form-control" value="<?php echo $tob ;?>" name="tob" id="inputEmail4" placeholder="Time Of Birth">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Height</label>
            <input type="text" class="form-control" value="<?php echo $height ;?>" name="height" id="inputEmail4" placeholder="Height">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Color</label>
            <input type="text" class="form-control" value="<?php echo $color ;?>" name="color" id="inputEmail4" placeholder="Color">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Eating Habits</label>
            <input type="text" class="form-control" value="<?php echo $eating_habits ;?>" name="eating_habits" id="inputEmail4" placeholder="Eating Habits">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Bad Habbits</label>
            <input type="text" class="form-control" value="<?php echo $bad_habbits ;?>" name="bad_habbits" id="inputEmail4" placeholder="Bad Habbits">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Education</label>
            <input type="text" class="form-control" value="<?php echo $education ;?>" name="education" id="inputEmail4" placeholder="Education">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Job</label>
            <input type="text" class="form-control" value="<?php echo $job ;?>" name="job" id="inputEmail4" placeholder="Job">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Job Location</label>
            <input type="text" class="form-control" value="<?php echo $job_location ;?>" name="job_location" id="inputEmail4" placeholder="Job Location">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">NRI</label>
            <input type="text" class="form-control" value="<?php echo $nri ;?>" name="nri" id="inputEmail4" placeholder="NRI">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Annual Income</label>
            <input type="text" class="form-control" value="<?php echo $annual_income ;?>" name="annual_income" id="inputEmail4" placeholder="Annual Income">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Parents Details</label>
            <input type="text" class="form-control" value="<?php echo $parents_details ;?>" name="parents_details" id="inputEmail4" placeholder="Parents Details">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Requirements</label>
            <input type="text" class="form-control" value="<?php echo $requirements ;?>" name="requirements" id="inputEmail4" placeholder="Requirements">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Whatsapp Number</label>
            <input type="text" class="form-control" value="<?php echo $whatsapp_number ;?>" name="whatsapp_number" id="inputEmail4" placeholder="Whatsapp Number">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Phone Number</label>
            <input type="text" class="form-control" value="<?php echo $phone_number ;?>" name="phone_number" id="inputEmail4" placeholder="Phone Number">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Status</label>
            <input type="text" class="form-control" value="<?php echo $status ;?>" name="status" id="inputEmail4" placeholder="Status">
            </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputEmail4">City</label>
            <input type="text" class="form-control" value="<?php echo $city ;?>" name="city" id="inputEmail4" placeholder="City">
            </div>
            <div class="form-group col-md-4">
            <label for="inputEmail4">District</label>
            <input type="text" class="form-control" value="<?php echo $district ;?>"  name="district" id="inputEmail4" placeholder="District">
            </div>
            <div class="form-group col-md-4">
            <label for="inputEmail4">State</label>
            <input type="text" class="form-control" value="<?php echo $state ;?>" name="state" id="inputEmail4" placeholder="State">
            </div>
            </div>
        </div>
        <input type="submit" name="reg" value="Update" class="submit_styler">
        </form>
                </div>
            </div>
        </div>
</div>
<?php } ?>
</html>