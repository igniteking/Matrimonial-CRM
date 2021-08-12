<?php include_once("connection/db.php"); ?>
<?php
$user_id = $_GET['id'];
?>


<?php
$query2 = "SELECT * from users where id = '$user_id'";
$result2 = mysqli_query($conn, $query2);

while ($rows = mysqli_fetch_assoc($result2)) {
    $id = $rows['id'];
    $name = $rows['name'];
    $surname = $rows['surname'];
    $email = $rows['email'];
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
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vishwavedika - Application Form</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>
<style type="text/css">
    @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500;600;400;700;800&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;900&display=swap");

    * {
        padding: 0px;
        margin: 0px;
    }

    body {
        background: #e3eaee;
    }

    .header_main {
        width: 100%;
        height: 64px;
        z-index: 10000;
        background: #fff;
        border-bottom: 1px solid #eee;
        -webkit-box-shadow: 10px 10px 7px -9px rgba(199, 199, 199, 1);
        -moz-box-shadow: 10px 10px 7px -9px rgba(199, 199, 199, 1);
        box-shadow: 10px 10px 7px -9px rgba(199, 199, 199, 1);
    }

    #wrapper {
        margin-right: auto;
        margin-left: auto;
        max-width: 1200px;
    }
</style>

<body>
    <div class="header_main">
        <div id='wrapper'>
            <a href='https://www.vishwavedika.net/'><img src='images/logo.png' width="50px" style="margin-left: 10px; float: left; margin-top: 5px;"></a>
            <a href='' style="margin-right: 10px; float: right; color: #fff; text-decoration: none; font-family: Roboto; background: #d0229d; padding: 10px; border-radius: 4px; margin-top: 12px;">Contact Us</a>
        </div>
    </div>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<div id='body_area'><br><br>
    <div style="margin-right: auto; margin-left: auto; width: 950px; border: 2px solid #eee; border-radius: 8px;">
        <div style="padding: 40px;">
            <form action="user_profile.php?id=<?php echo $user_id; ?>" method="post">
                <h1 style="font-size: 28px; font-weight: 600; color: #444; line-height: 60px;"><i class="fas fa-plus" style="font-size: 28px;"></i> Profile</h1><br>
                <center><img src='images/assign.svg' width="200"></center><br>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputEmail4">Name</label>
            <input type="text" class="form-control" value="<?php echo $name ;?>" name="name" id="inputEmail4" disabled placeholder="Name">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Surname</label>
            <input type="text" class="form-control" value="<?php echo $surname ;?>"  name="surname" id="inputEmail4" disabled placeholder="Surname">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">E-mail</label>
            <input type="text" class="form-control" value="<?php echo $email ;?>"  name="surname" id="inputEmail4" disabled placeholder="Surname">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Gender</label>
            <input type="text" class="form-control" value="<?php echo $sex ;?>" name="sex" id="inputEmail4" disabled placeholder="Gender">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Language</label>
            <input type="text" class="form-control" value="<?php echo $language ;?>" name="language" id="inputEmail4" disabled placeholder="Language">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Caste</label>
            <input type="text" class="form-control" value="<?php echo $caste ;?>" name="caste" id="inputEmail4" disabled placeholder="Caste">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Sub-Caste</label>
            <input type="text" class="form-control" value="<?php echo $sub_caste ;?>" name="sub_caste" id="inputEmail4" disabled placeholder="Sub-Caste">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Gothram</label>
            <input type="text" class="form-control" value="<?php echo $gothram ;?>" name="gothram" id="inputEmail4" disabled placeholder="Gothram">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Zodiac Sign</label>
            <input type="text" class="form-control" value="<?php echo $zodiac_sign ;?>" name="zodiac_sign"  disabled id="inputEmail4" placeholder="Zodiac Sign">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Star</label>
            <input type="text" class="form-control" value="<?php echo $star ;?>" name="star" id="inputEmail4" disabled placeholder="Star">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Date Of Birth</label>
            <input type="text" class="form-control" value="<?php echo $dob ;?>" name="dob" id="inputEmail4" disabled placeholder="Date Of Birth">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Place Of Birth</label>
            <input type="text" class="form-control" value="<?php echo $pob ;?>" name="pob" id="inputEmail4" disabled placeholder="Place Of Birth">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Time Of Birth</label>
            <input type="text" class="form-control" value="<?php echo $tob ;?>" name="tob" id="inputEmail4" disabled placeholder="Time Of Birth">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Height</label>
            <input type="text" class="form-control" value="<?php echo $height ;?>" name="height" id="inputEmail4" disabled placeholder="Height">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Color</label>
            <input type="text" class="form-control" value="<?php echo $color ;?>" name="color" id="inputEmail4" disabled placeholder="Color">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Eating Habits</label>
            <input type="text" class="form-control" value="<?php echo $eating_habits ;?>" name="eating_habits" disabled id="inputEmail4" placeholder="Eating Habits">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Bad Habbits</label>
            <input type="text" class="form-control" value="<?php echo $bad_habbits ;?>" name="bad_habbits"  disabled id="inputEmail4" placeholder="Bad Habbits">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Education</label>
            <input type="text" class="form-control" value="<?php echo $education ;?>" name="education" disabled id="inputEmail4" placeholder="Education">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Job</label>
            <input type="text" class="form-control" value="<?php echo $job ;?>" name="job" id="inputEmail4" disabled placeholder="Job">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Job Location</label>
            <input type="text" class="form-control" value="<?php echo $job_location ;?>" name="job_location" disabled id="inputEmail4" placeholder="Job Location">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">NRI</label>
            <input type="text" class="form-control" value="<?php echo $nri ;?>" name="nri" id="inputEmail4" disabled placeholder="NRI">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Annual Income</label>
            <input type="text" class="form-control" value="<?php echo $annual_income ;?>" name="annual_income" disabled id="inputEmail4" placeholder="Annual Income">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Parents Details</label>
            <input type="text" class="form-control" value="<?php echo $parents_details ;?>" name="parents_details" disabled id="inputEmail4" placeholder="Parents Details">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Requirements</label>
            <input type="text" class="form-control" value="<?php echo $requirements ;?>" name="requirements" disabled id="inputEmail4" placeholder="Requirements">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Whatsapp Number</label>
            <input type="text" class="form-control" value="<?php echo $whatsapp_number ;?>" name="whatsapp_number" disabled id="inputEmail4" placeholder="Whatsapp Number">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Phone Number</label>
            <input type="text" class="form-control" value="<?php echo $phone_number ;?>" name="phone_number" disabled id="inputEmail4" placeholder="Phone Number">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Status</label>
            <input type="text" class="form-control" value="<?php echo $status ;?>" name="status" id="inputEmail4" disabled placeholder="Status">
            </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputEmail4">City</label>
            <input type="text" class="form-control" value="<?php echo $city ;?>" name="city" id="inputEmail4" disabled placeholder="City">
            </div>
            <div class="form-group col-md-4">
            <label for="inputEmail4">District</label>
            <input type="text" class="form-control" value="<?php echo $district ;?>"  name="district" id="inputEmail4" disabled placeholder="District">
            </div>
            <div class="form-group col-md-4">
            <label for="inputEmail4">State</label>
            <input type="text" class="form-control" value="<?php echo $state ;?>" name="state" id="inputEmail4" disabled placeholder="State">
            </div>
            </div>
        </div>
        </form>
                </div>
            </div>
        </div>
</div>
<?php } ?>
</html>