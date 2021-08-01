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
$query = "SELECT * from admin WHERE id = '$admin_id'";
$result = mysqli_query($conn, $query);

while ($rows = mysqli_fetch_assoc($result)) {
    $admin_name = $rows['admin_name'];
}
?>

<?php
$query = "SELECT * from users where id = '$user_id'";
$result = mysqli_query($conn, $query);

while ($rows = mysqli_fetch_assoc($result)) {
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
<div id='body_area'>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile" style="border: 1px solid black">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="images/user.png" style="width: 250px; height: 250px;"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        <?php echo $name?> <?php echo $surname?>
                                    </h5>
                                    <h6>
                                    <?php echo $job?>
                                    </h6>
                                    <p class="proile-rating">Gender : <span><?php echo $sex?></span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Other</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work"><br><br>
                            <a href="">Zodiac Sign : <?php echo $zodiac_sign?></a><br/>
                            <a href="">Caste : <?php echo $caste?></a><br/>
                            <a href="">Sub-Caste : <?php echo $sub_caste?></a><br/>
                            <a href="">Start : <?php echo $star ?></a><br/>
                            <a href="">Height : <?php echo $height ?></a><br/>
                            <a href="">Color : <?php echo $color ?></a><br/>
                            <a href="">Personal Number : <?php echo $phone_number ?></a><br/>
                            <a href="">Whatsapp Number : <?php echo $whatsapp_number ?></a><br/>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Date Of Birth</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php echo $dob ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Place of Birth</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php echo $pob ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>City</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php echo $city ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>District</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php echo $district ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Eating Habits</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php echo $eating_habits ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Bad Habits</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php echo $bad_habbits ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Education</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php echo $education ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Job Location</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php echo $job_location ?></p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                        <div class="col-md-6">
                                            <label>NRI</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p> <?php echo $nri ?></p>
                                        </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Annual Income</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php echo $annual_income ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Parents Details</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php echo $parents_details ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Requirements</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php echo $requirements ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Status</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php echo $status ?></p>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
        <style> 

.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
</style>
<?php } ?>
</html>