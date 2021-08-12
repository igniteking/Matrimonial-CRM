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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <link href="dist/cropper.min.css" rel="stylesheet" type="text/css" />
    <link href="dist/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>
<style type="text/css">
    @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500;600;400;700;800&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;900&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");

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

    #cottage_div_divider {
        float: left;
        width: 72%;
    }

    #cottage_div_divider2 {
        float: right;
        width: 28%;
    }

    #cottage_div_divider3 {
        float: right;
        width: 26%;
    }

    h1,
    h2,
    h3,
    h4,
    h5 {
        font-family: Poppins;
        font-weight: 600;
    }

    .slim {
        width: 30%;
        margin: 0 auto;
        background-color: #fff;
        border: 1px solid #000;
    }

    .slim[data-state*=empty]:hover {
        background-color: #fff;
    }

    .slim {
        width: 30%;
        margin: 0 auto;
    }

    .input_btn {
        margin-top: 20px;
        background: #d0229d;
        border: 3px solid #d0229d;
        color: #fff;
        width: 60%;
        padding: 10px;
        font-size: 14px;
        font-family: Poppins;
        font-weight: 600;
        border-radius: 4px;
    }

    #settings_input {
        width: 100%;
        border: 3px solid #eee;
        padding: 10px;
        font-family: Poppins;
    }

    @media screen and (max-width: 800px) {

        #cottage_div_divider,
        #cottage_div_divider2,
        #cottage_div_divider3 {
            width: 100%;
        }
    }

    .slim-status {
        background: #fff;
    }

    .slim .parsley-errors-list {
        position: relative;
        top: 30px;
    }

    @media (max-width: 575px) {
        .slim {
            width: 100%;
        }
    }
</style>

<body>
    <div class="header_main">
        <div id='wrapper'>
            <a href='https://www.vishwavedika.net/'><img src='img/logo.png' width="150px" style="margin-left: 10px; float: left; margin-top: 5px;"></a>
            <a href='' style="margin-right: 10px; float: right; color: #fff; text-decoration: none; font-family: Roboto; background: #d0229d; padding: 10px; border-radius: 4px; margin-top: 12px;">Contact Us</a>
        </div>
    </div>
    <br><br>
    <div id='wrapper'>
        <div id='cottage_div_divider'>
            <div class="col-sm-12">
                <div class="panel panel-default" style="background-color: rgb(244, 247, 248);">
                    <?php

                    $dbServername = "localhost";
                    $dbUsername = "root";
                    $dbPassword = "";
                    $dbName = "matrimonial";
                    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName) or die;

                    $success = "";
                    $register = @$_POST['submit'];
                    $name = strip_tags(@$_POST['first_name']);
                    $surname = strip_tags(@$_POST['last_name']);
                    $email = strip_tags(@$_POST['email_address']);
                    $sex = strip_tags(@$_POST['gender']);
                    $language = strip_tags(@$_POST['mother_tongue']);
                    $caste = strip_tags(@$_POST['caste']);
                    $sub_caste = strip_tags(@$_POST['sub_caste']);
                    $gothram = strip_tags(@$_POST['gothram']);
                    $zodiac_sign = strip_tags(@$_POST['astrological_sign']);
                    $star = strip_tags(@$_POST['zodiac_star']);
                    $dob = strip_tags(@$_POST['date_of_birth']);
                    $pob = strip_tags(@$_POST['place_of_birth']);
                    $tob = strip_tags(@$_POST['time_of_birth']);
                    $city = strip_tags(@$_POST['city']);
                    $district = strip_tags(@$_POST['district']);
                    $state = strip_tags(@$_POST['state']);
                    $height = strip_tags(@$_POST['groom_birde_height']);
                    $color = strip_tags(@$_POST['skin_color']);
                    $eating_habits = strip_tags(@$_POST['eating_habits']);
                    $bad_habbits = strip_tags(@$_POST['smoking_drinking_details']);
                    $education = strip_tags(@$_POST['qulification']);
                    $job = strip_tags(@$_POST['job_business']);
                    $job_location = strip_tags(@$_POST['job_current_location']);
                    $nri = strip_tags(@$_POST['nri']);
                    $annual_income = strip_tags(@$_POST['annual_income']);
                    $parents_details = strip_tags(@$_POST['parents_details']);
                    $requirements = strip_tags(@$_POST['requirements']);
                    $whatsapp_number = strip_tags(@$_POST['primary_phone_watsapp_number']);
                    $phone_number = strip_tags(@$_POST['alternative_phone_number']);
                    $status = strip_tags(@$_POST['marital_status']);
                    $picture = strip_tags(@$_POST['echo']);
                    if ($register) {
                        $query = "INSERT INTO `users`(`id`, `name`, `surname`, `email`, `sex`, `language`, `caste`, `sub_caste`, 
            `gothram`, `zodiac_sign`, `star`, `dob`, `pob`, `tob`, `city`, `district`, `state`, `height`, `color`,
             `eating_habits`, `bad_habbits`, `education`, `job`, `job_location`, `nri`, `annual_income`, `parents_details`,
              `requirements`, `whatsapp_number`, `phone_number`, `profile_pic`, `status`)
               VALUES 
               (Null, '$name', '$surname', '$email', '$sex', '$language', '$caste', '$sub_caste', 
            '$gothram', '$zodiac_sign', '$star', '$dob', '$pob', '$tob', '$city', '$district', '$state', '', '$color',
             '$eating_habits', '$bad_habbits', '$education', '$job', '$job_location', '$nri', '$annual_income', '$parents_details',
              '$requirements', '$whatsapp_number', '$phone_number', '$picture', '$status')";
                        $sql = mysqli_query($conn, $query);
                        exit('<div class="panel-heading">Confirm</div>
        <div class="panel-body">
            <div class="form-group">
                <div class="col-xs-6 col-md-12">
                <center><object data="certificate.php?name=' . $name . ' ' . $surname . '&&job=' . $job . '&&parent=' . $parents_details . '&&requirements=' . $requirements . '&&dob=' . $dob . '&&tob=' . $tob . '&&pob=' . $pob . '&&mobile=' . $whatsapp_number . '&&zodiac_sign=' . $zodiac_sign . '&&city=' . $city . '&&district=' . $district . '&&state=' . $state . '&&height=' . $height . '&&picture=' . $picture . '" width="900" height="900"></object></center>
                </div>'.$picture.'
                </div>
                </div>');
                    };
                    ?>
                    <form action="index.php" method="POST" enctype="multipart/form-data">
                        <style type="text/css">
                            img {
                                display: block;
                                max-width: 100%;
                            }

                            .preview {
                                overflow: hidden;
                                width: 160px;
                                height: 160px;
                                margin: 10px;
                                border: 1px solid red;
                            }
                        </style>
                        <div class="panel-heading">Bride/Groom Details (మీ వివరాలు)</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-xs-12 col-md-12">
                                    <style>
                                        h2,
                                        .entry-content h2,
                                        .entry-content h2 a {
                                            font-size: 37px;
                                            font-size: 2.4666666666667rem;
                                            font-weight: 700;
                                            font-family: 'Poppins', sans-serif;
                                            line-height: 1.4;
                                            text-transform: uppercase;
                                            text-align: center;
                                        }

                                        a.elementor-button-link.elementor-button.elementor-size-sm {
                                            width: 200px;
                                            border-color: #ee0979;
                                            border-radius: 54px;
                                            background-color: #ee0979;
                                            padding: 14px 10px;
                                            font-size: 14px;
                                            color: #fff;
                                            text-align: center;
                                        }

                                        .join-btn-container {
                                            text-align: center;
                                            margin-top: 30px;
                                            margin-bottom: 45px;
                                        }

                                        .elementor-widget-container {
                                            text-align: center;
                                        }
                                    </style>

                                    <div class="elementor-element elementor-element-c0fd8e9 elementor-widget elementor-widget-heading" data-id="c0fd8e9" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h5>BEFORE SUBMITTING YOUR PROFILE 🗒️ PLEASE JOIN IN OUR TELEGRAM GROUP TO ACTIVATE YOUR PROFILE</h5>
                                            <!-- <h2 class="elementor-heading-title elementor-size-default">Join in Our Telegram Group</h2> -->
                                        </div>
                                    </div>
                                    <div class="join-btn-container elementor-element elementor-element-fd73cfc elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="fd73cfc" data-element_type="widget" data-widget_type="button.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-button-wrapper ">
                                                <a href="https://t.me/joinchat/AAAAAFjTMzDfDZa5ESLAyg" target="_blank" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                                    <span class="elementor-button-content-wrapper">
                                                        <span class="elementor-button-text">Click here to join</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12 col-md-12" style="margin-top: 15px;">
                                            <label for="qulification">Gender</label>

                                            <select class="form-control" name="gender" id="qulification" required>
                                                <option value="Female">🙎 𝗙𝗘𝗠𝗔𝗟𝗘 (వధువు)</option>
                                                <option value="Male">🤵 𝗠𝗔𝗟𝗘 (వరుడు)</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-md-12" style="margin-top: 15px;">
                                        <label for="qulification">Marital Status</label>

                                        <select class="form-control" name="marital_status" id="qulification" required>
                                            <option value="Un-Married">Un-Married</option>
                                            <option value="Divorced">Divorced</option>
                                            <option value="Widow/Widower">Widow/Widower</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 col-md-12" style="margin-top: 15px;margin-bottom:35px">
                                    <label for="photo">Profile Image</label>

                                    <input type="file" name="image" class="image">
                                    <input type="text" id="output" name="echo" value="" style="display: none;" />

                                    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" style="top: 20%; padding: 10px; border: 0 none !important;">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalLabel">Crop image</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="img-container">
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <!--  default image where we will set the src via jquery-->
                                                                <img id="image">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="preview"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                    <button type="button" class="btn btn-primary" id="crop">Crop</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <!--  <label for="input-file-now"> </label>-->
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 col-md-12" style="margin-top: 15px;">
                                    <label for="first_name">Surname (ఇంటి పేరు)</label>
                                    <input type="text" class="form-control" name="first_name" id="first_name" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 col-md-12" style="margin-top: 15px;">
                                    <label for="last_name">Full Name (పూర్తి పేరు)</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 col-md-12" style="margin-top: 15px;">
                                    <label for="mother_tongue">Mother Tongue (మాతృ భాష)</label>
                                    <select class="form-control" name="mother_tongue" id="mother_tongue">
                                        <option value="Telugu">Telugu (తెలుగు)</option>
                                        <option value="Hindi">Hindi(हिंदी)</option>
                                        <option value="English">English</option>
                                        <option value="Bengali">Bengali (বাংলা)</option>
                                        <option value="Marathi">Marathi (मराठी)</option>
                                        <option value="Tamil">Tamil (தமிழ்)</option>
                                        <option value="Gujarati">Gujarati (ગુજરાતી)</option>
                                        <option value="Urdu">Urdu (اردو)</option>
                                        <option value="Kannada">Kannada (ಕನ್ನಡ)</option>
                                        <option value="Odia">Odia (ଘୃଣା)</option>
                                        <option value="Malayalam">Malayalam (മലയാളം)</option>
                                        <option value="Punjabi">Punjabi (ਪੰਜਾਬੀ)</option>
                                        <option value="Assamese">Assamese</option>
                                        <option value="Maithili">Maithili</option>
                                        <option value="Sanskrit">Sanskrit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 col-md-12" style="margin-top: 15px;">
                                    <label for="email_address">Email</label>
                                    <input type="email" class="form-control checkExistence" id="email_address" name="email_address" />
                                    <div class="addharcardExists"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 col-md-12" style="margin-top: 15px;">
                                    <label for="caste">Caste (కులం)</label>
                                    <select class="form-control" name="caste" id="caste" required>
                                        <option value="">Select One</option>
                                        <option value="Vishwabramin">Vishwabramin</option>
                                        <option value="Viswakarma">Viswakarma</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 col-md-12" style="margin-top: 15px;">
                                    <label for="sub_caste">Sub Caste (ఉప కులం)</label>
                                    <select class="form-control" name="sub_caste" id="sub_caste" required>
                                        <option value="">Select One</option>
                                        <option value="Bronze Smith"> Bronze Smith</option>
                                        <option value="Black Smith"> Black Smith</option>
                                        <option value="Carpentry (Vadrangi, Vadla)"> Carpentry (Vadrangi, Vadla)</option>
                                        <option value="Goldsmiths"> Goldsmiths</option>
                                        <option value="Sculptor (Shilpi)"> Sculptor (Shilpi)</option>
                                        <option value="Others"> Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group" style="margin-top: 15px;">
                                <div class="col-xs-12 col-md-12" style="margin-top: 15px;">
                                    <label for="gothram">Gothram (గోత్రం)</label>
                                    <input type="text" class="form-control" name="gothram" id="gothram" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 col-md-12" style="margin-top: 15px;">
                                    <label for="astrological_sign">Zodiac Sign (రాశి)</label>
                                    <select class="form-control" name="astrological_sign" id="astrological_sign" required>
                                        <option value="">Select Zodiac Sign (రాశి)</option>
                                        <option value="Aries">Aries (మేషము)</option>
                                        <option value="Taurus">Taurus (వృషభము)</option>
                                        <option value="Gemini">Gemini (మిథునము)</option>
                                        <option value="Cancer">Cancer (కర్కాటకము)</option>
                                        <option value="Leo">Leo (సింహము)</option>
                                        <option value="Virgo">Virgo (కన్యా)</option>
                                        <option value="Libra">Libra (తుల)</option>
                                        <option value="Scorpio">Scorpio (వృశ్చికము)</option>
                                        <option value="Sagittarius">Sagittarius (ధనస్సు)</option>
                                        <option value="Capricorn">Capricorn (మకరము)</option>
                                        <option value="Aquarius">Aquarius (కుంభము)</option>
                                        <option value="Pisces">Pisces (మీనము)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group" style="margin-top: 15px;">
                                <div class="col-xs-12 col-md-12" style="margin-top: 15px;">
                                    <label for="zodiac_star"> ⭐Star (పుట్టిన నక్షత్రం)</label>
                                    <input type="text" class="form-control" name="zodiac_star" id="zodiac_star" required />
                                </div>
                            </div>
                            <div class="form-group" style="margin-top: 15px;">
                                <div class="col-xs-12 col-md-12" style="margin-top: 15px;">
                                    <label for="date_of_birth">Date Of Birth (పుట్టిన తేది)</label>
                                    <input type="text" class="form-control datepick" name="date_of_birth" id="date_of_birth" readonly required />
                                </div>
                            </div>
                            <div class="form-group" style="margin-top: 15px;">
                                <div class="col-xs-12 col-md-12" style="margin-top: 15px;">
                                    <label for="place_of_birth">Place Of Birth (పుట్టిన స్థలం)</label>
                                    <input type="text" class="form-control" name="place_of_birth" id="place_of_birth" required />
                                </div>
                            </div>
                            <div class="form-group" style="margin-top: 15px;">
                                <div class="col-xs-12 col-md-12" style="margin-top: 15px;">
                                    <label for="time_of_birth">Time Of Birth (పుట్టిన సమయం)</label>
                                    <input type="text" class="form-control" name="time_of_birth" id="time" placeholder="Enter birth time like (4:45 AM OR 1:00 PM)" value="---" required />
                                    <small>Click on Dashes-- To edit Time or If you don't know your time of birth just use - - -</small>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-12" style="margin-top: 15px;">
                                <label for="city">Village/Mandal/City</label>
                                <input type="text" class="form-control" name="city" id="city" required />
                            </div>
                            <div class="col-xs-12 col-md-12" style="margin-top: 15px;">
                                <label for="district">District</label>
                                <input type="text" class="form-control" name="district" id="district" required />
                            </div>
                            <div class="col-xs-12 col-md-12" style="margin-top: 15px;">
                                <label for="district">State (రాష్ట్రాలు)</label>
                                <select name="state" id="state" class="form-control" required>
                                    <option value="">Select One</option>
                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                    <option value="Assam">Assam</option>
                                    <option value="Bihar">Bihar</option>
                                    <option value="Chandigarh">Chandigarh</option>
                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                    <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                    <option value="Daman and Diu">Daman and Diu</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Lakshadweep">Lakshadweep</option>
                                    <option value="Puducherry">Puducherry</option>
                                    <option value="Goa">Goa</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Haryana">Haryana</option>
                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                    <option value="Jharkhand">Jharkhand</option>
                                    <option value="Karnataka">Karnataka</option>
                                    <option value="Kerala">Kerala</option>
                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Manipur">Manipur</option>
                                    <option value="Meghalaya">Meghalaya</option>
                                    <option value="Mizoram">Mizoram</option>
                                    <option value="Nagaland">Nagaland</option>
                                    <option value="Odisha">Odisha</option>
                                    <option value="Punjab">Punjab</option>
                                    <option value="Rajasthan">Rajasthan</option>
                                    <option value="Sikkim">Sikkim</option>
                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                    <option value="Telangana">Telangana</option>
                                    <option value="Tripura">Tripura</option>
                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                    <option value="Uttarakhand">Uttarakhand</option>
                                    <option value="West Bengal">West Bengal</option>
                                </select>
                            </div>
                            <div class="form-group" style="margin-top: 15px;">
                                <div class="col-xs-12 col-md-12" style="margin-top: 15px;">
                                    <label for="groom_birde_height">Height (ఎత్తు)</label>
                                    <select class="form-control" name="groom_birde_height" id="groom_birde_height" required>
                                        <option value="">Select HEIGHT</option>
                                        <option value="6' 11"> 6' 11" </option>
                                        <option value="6' 10"> 6' 10" </option>
                                        <option value="6' 9"> 6' 9" </option>
                                        <option value="6' 8"> 6' 8" </option>
                                        <option value="6' 7"> 6' 7" </option>
                                        <option value="6' 6"> 6' 6" </option>
                                        <option value="6' 5"> 6' 5" </option>
                                        <option value="6' 4"> 6' 4" </option>
                                        <option value="6' 3"> 6' 3" </option>
                                        <option value="6' 2"> 6' 2" </option>
                                        <option value="6' 1"> 6' 1" </option>
                                        <option value="6' 0"> 6' 0" </option>
                                        <option value="5' 11"> 5' 11" </option>
                                        <option value="5' 10"> 5' 10" </option>
                                        <option value="5' 9"> 5' 9" </option>
                                        <option value="5' 8"> 5' 8" </option>
                                        <option value="5' 7"> 5' 7" </option>
                                        <option value="5' 6"> 5' 6" </option>
                                        <option value="5' 5"> 5' 5" </option>
                                        <option value="5' 4"> 5' 4" </option>
                                        <option value="5' 3"> 5' 3" </option>
                                        <option value="5' 2"> 5' 2" </option>
                                        <option value="5' 1"> 5' 1" </option>
                                        <option value="5' 0"> 4' 0" </option>
                                        <option value="4' 11"> 4' 11" </option>
                                        <option value="4' 10"> 4' 10" </option>
                                        <option value="4' 9"> 4' 9" </option>
                                        <option value="4' 8"> 4' 8" </option>
                                        <option value="4' 7"> 4' 7" </option>
                                        <option value="4' 6"> 4' 6" </option>
                                        <option value="4' 5"> 4' 5" </option>
                                        <option value="4' 4"> 4' 4" </option>
                                        <option value="4' 3"> 4' 3" </option>
                                        <option value="4' 2"> 4' 2" </option>
                                        <option value="4' 1"> 4' 1" </option>
                                        <option value="4' 0"> 4' 0" </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group" style="margin-top: 15px;">
                                <div class="col-xs-12 col-md-12" style="margin-top: 15px;">
                                    <label for="skin_color">Colour</label>
                                    <select class="form-control" name="skin_color" id="skin_color" required>
                                        <option value="">Select Colour</option>
                                        <option value="Light">Light</option>
                                        <option value="Fair">Fair</option>
                                        <option value="Medium">Medium</option>
                                        <option value="Olive">Olive</option>
                                        <option value="Tan">Tan</option>
                                        <option value="Brown">Brown</option>
                                        <option value="Dark Brown">Dark Brown</option>
                                        <option value="Black">Black</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 col-md-12" style="margin-top: 15px;">
                                    <label for="eating_habits">Eating Habits</label>
                                    <select class="form-control" name="eating_habits" id="eating_habits" required>
                                        <option value="">Select One</option>
                                        <option value="Vegetarian">Vegetarian</option>
                                        <option value="Non Vegetarian">Non Vegetarian</option>
                                        <option value="Eggetarian">Eggetarian</option>
                                        <option value="Both VEG/NON VEG">Both VEG/NON VEG</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 col-md-12" style="margin-top: 15px;">
                                    <label for="smoking_drinking_details">Smoking/Drinking Details</label>
                                    <select class="form-control" name="smoking_drinking_details" id="smoking_drinking_details" required>
                                        <option value="">Select One</option>
                                        <option value="Smoker">Smoker</option>
                                        <option value="Non-Smoker">Non-Smoker</option>
                                        <option value="Occassionally Smoker">Occassionally Smoker</option>
                                        <option value="Occassionally Drinker">Occassionally Drinker</option>
                                        <option value="Non Smoker/Non Drinker">Non Smoker/Non Drinker</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">Professional Details</div>
                    <div class="panel-body">
                        <div class="form-group" style="margin-top: 15px;">
                            <div class="col-xs-12 col-md-12" style="margin-top: 15px;">
                                <label for="qulification">Education Qualification (చదువు)</label>
                                <select class="form-control" name="qulification" id="qulification" required>
                                    <option value="">Select Qualification</option>
                                    <option value="10TH SSC">10TH S.S.C</option>
                                    <option value="INTERMEDIATE">INTERMEDIATE</option>
                                    <option value="Aeronautical Engineering">Aeronautical Engineering</option>
                                    <option value="Aviation Degree">Aviation Degree</option>
                                    <option value="B Arch">B Arch</option>
                                    <option value="B Com">B Com</option>
                                    <option value="B Phil">B Phil</option>
                                    <option value="B Plan">B Plan</option>
                                    <option value="B Tech">B Tech E.C.E</option>
                                    <option value="B Tech">B Tech C.S.E</option>
                                    <option value="B Tech">B Tech CIVIL</option>
                                    <option value="B Tech">B Tech E.E.E</option>
                                    <option value="B Tech">B Tech M.E.C</option>
                                    <option value="B.B.M (Business Management)">B.B.M (Business Management)</option>
                                    <option value="B.L.I.S (Library of Information & science)">B.L.I.S (Library of Information &amp; science)</option>
                                    <option value="B.Pharm">B.Pharm</option>
                                    <option value="B.Sc Agricultural Science">B.Sc Agricultural Science</option>
                                    <option value="B.Sc. (Science)">B.Sc. (Science)</option>
                                    <option value="BA">BA</option>
                                    <option value="Bachelor of engineering">Bachelor of engineering</option>
                                    <option value="Bachelor Of Law">Bachelor Of Law</option>
                                    <option value="Bachelor of Science">Bachelor of Science</option>
                                    <option value="Bachelor Of Veterinary Science">Bachelor Of Veterinary Science</option>
                                    <option value="BAMS">BAMS</option>
                                    <option value="BBA">BBA</option>
                                    <option value="BCA">BCA</option>
                                    <option value="BDS">BDS</option>
                                    <option value="BE">BE</option>
                                    <option value="BEd">BEd</option>
                                    <option value="BFA">BFA</option>
                                    <option value="BFM (Financial Management)">BFM (Financial Management)</option>
                                    <option value="BFT">BFT</option>
                                    <option value="BGL">BGL</option>
                                    <option value="BHM">BHM</option>
                                    <option value="BHMS">BHMS</option>
                                    <option value="BLIS">BLIS</option>
                                    <option value="BMM (MASS MEDIA)">BMM (MASS MEDIA)</option>
                                    <option value="BPT">BPT</option>
                                    <option value="BSc Computer Science">BSc Computer Science</option>
                                    <option value="BSc IT">BSc IT</option>
                                    <option value="BSc Nursing">BSc Nursing</option>
                                    <option value="BSMS">BSMS</option>
                                    <option value="BSW">BSW</option>
                                    <option value="BUMS">BUMS</option>
                                    <option value="C.A">C.A</option>
                                    <option value="CA Final">CA Final</option>
                                    <option value="CA Inter">CA Inter</option>
                                    <option value="CFA (Chartered Financial Analyst)">CFA (Chartered Financial Analyst)</option>
                                    <option value="CNC OP">CNC OP</option>
                                    <option value="Company Secretary (CS)">Company Secretary (CS)</option>
                                    <option value="CS">CS</option>
                                    <option value="Ded">Ded</option>
                                    <option value="Degree">Degree</option>
                                    <option value="Degree In Medicine">Degree In Medicine</option>
                                    <option value="Diploma">Diploma</option>
                                    <option value="Diploma In Nursing">Diploma In Nursing</option>
                                    <option value="DM - Doctorate Of Medicine">DM - Doctorate Of Medicine</option>
                                    <option value="Doctor of Pharmacy">Doctor of Pharmacy</option>
                                    <option value="General-Help">General-Help</option>
                                    <option value="High School">High School</option>
                                    <option value="I.T.I">I.T.I</option>
                                    <option value="IAS">IAS</option>
                                    <option value="ICWA">ICWA</option>
                                    <option value="IES">IES</option>
                                    <option value="IFS">IFS</option>
                                    <option value="IPS">IPS</option>
                                    <option value="IRS">IRS</option>
                                    <option value="Less Than High School">Less Than High School</option>
                                    <option value="LLB">LLB</option>
                                    <option value="LLM">LLM</option>
                                    <option value="MArch">MArch</option>
                                    <option value="MCom">MCom</option>
                                    <option value="MPhil">MPhil</option>
                                    <option value="MSc">MSc</option>
                                    <option value="M Tech">M Tech</option>
                                    <option value="M.Pharm">M.Pharm</option>
                                    <option value="M.Sc Maths">M.Sc Maths</option>
                                    <option value="M.Sc Microbiology">M.Sc Microbiology</option>
                                    <option value="MA">MA</option>
                                    <option value="MAMS">MAMS</option>
                                    <option value="Master In Medicine">Master In Medicine</option>
                                    <option value="Master of Arts (M.A)">Master of Arts (M.A)</option>
                                    <option value="Master Of Law">Master Of Law</option>
                                    <option value="Master Of Veterinary Science">Master Of Veterinary Science</option>
                                    <option value="MBA">MBA</option>
                                    <option value="MBBS">MBBS</option>
                                    <option value="MCA">MCA</option>
                                    <option value="MCh - Master Of Chirurgiae">MCh - Master Of Chirurgiae</option>
                                    <option value="MD/MS (Medical)">MD/MS (Medical)</option>
                                    <option value="MDS">MDS</option>
                                    <option value="ME">ME</option>
                                    <option value="Mechanical engineering technology">Mechanical engineering technology</option>
                                    <option value="MEd">MEd</option>
                                    <option value="Medical Laboratory Technology">Medical Laboratory Technology</option>
                                    <option value="MFA">MFA</option>
                                    <option value="MFM (Financial Management)">MFM (Financial Management)</option>
                                    <option value="MHM">MHM</option>
                                    <option value="MHMS">MHMS</option>
                                    <option value="MHRM">MHRM</option>
                                    <option value="MLIS">MLIS</option>
                                    <option value="MPT">MPT</option>
                                    <option value="MS(Engg.)">MS(Engg.)</option>
                                    <option value="MSc  Organic Chemistry">MSc Organic Chemistry</option>
                                    <option value="MSc Computer Science">MSc Computer Science</option>
                                    <option value="MSc IT">MSc IT</option>
                                    <option value="MSc Nursing">MSc Nursing</option>
                                    <option value="MSW">MSW</option>
                                    <option value="MVSc">MVSc</option>
                                    <option value="Other Bachelor Degree">Other Bachelor Degree</option>
                                    <option value="Other Bachelor Degree in Legal">Other Bachelor Degree in Legal</option>
                                    <option value="Other Bachelor Degree in Medicine">Other Bachelor Degree in Medicine</option>
                                    <option value="Other Bachelor Degree Mgnt">Other Bachelor Degree Mgnt</option>
                                    <option value="Other Degree in Finance">Other Degree in Finance</option>
                                    <option value="Other Degree in Service">Other Degree in Service</option>
                                    <option value="Other Education">Other Education</option>
                                    <option value="Other Master Degree">Other Master Degree</option>
                                    <option value="Other Master Degree in Legal">Other Master Degree in Legal</option>
                                    <option value="Other Master Degree in Medicine">Other Master Degree in Medicine</option>
                                    <option value="Other Master Degree in Mgnt">Other Master Degree in Mgnt</option>
                                    <option value="Others">Others</option>
                                    <option value="Others in Diploma">Others in Diploma</option>
                                    <option value="PG">PG</option>
                                    <option value="PGDCA">PGDCA</option>
                                    <option value="PGDM">PGDM</option>
                                    <option value="PhD">PhD</option>
                                    <option value="Pharm.D">Pharm.D</option>
                                    <option value="Polytechnic">Polytechnic</option>
                                    <option value="Registered Nurse">Registered Nurse</option>
                                    <option value="Registered Practical Nurse">Registered Practical Nurse</option>
                                    <option value="T.T.C">T.T.C</option>
                                    <option value="Trade School">Trade School</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12 col-md-12" style="margin-top: 15px;">
                                <label for="job_business">Job/Business (ఉద్యోగం/వ్యాపారం)</label>
                                <input type="text" class="form-control" id="job_business" name="job_business" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12 col-md-12" style="margin-top: 15px;">
                                <label for="job_current_location">Job/Current Location</label>
                                <input type="text" class="form-control" id="job_current_location" name="job_current_location" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12 col-md-12" style="margin-top: 15px;">
                                <label for="job_business">✈ NRI Details/Visa Validity</label>
                                <input type="text" class="form-control" id="nri_visa_details" name="nri_visa_details" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12 col-md-12" style="margin-top: 15px;">
                                <label for="annual_income">Annual Income (Per annum) (ఆదాయం)</label>
                                <input type="text" class="form-control" id="annual_income" name="annual_income" required />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">Family/Other Details</div>
                    <div class="panel-body">
                        <div class="form-group" style="margin-top: 15px;">
                            <div class="col-xs-12" style="margin-top: 15px;">
                                <label for="parents_details">Parents Details (తల్లిదండ్రుల వివరాలు)</label>
                                <textarea class="form-control" id="parents_details" name="parents_details" maxlength="150" required></textarea>
                                <small style="color:#00F;"><span id="pdrchars">150</span> Character(s) Remaining</small>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12" style="margin-top: 15px;">
                                <label for="job_business">Requirements</label>
                                <textarea class="form-control" id="requirements" name="requirements" maxlength="150" required></textarea>
                                <small style="color:#00F;"><span id="pdrrchars">150</span> Character(s) Remaining</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">Contact Details</div>
                    <div class="panel-body">


                        <div class="form-group" style="margin-top: 15px;">
                            <div class="col-xs-12" style="margin-top: 15px;">
                                <label for="primary_phone_watsapp_number">Primary Phone/WhatsApp Number</label>
                                <input type="text" class="form-control checkExistence" id="primary_phone_watsapp_number" name="primary_phone_watsapp_number" required />
                                <div class="phoneExists"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12" style="margin-top: 15px;">
                                <label for="alternative_phone_number">Alternative Phone Number</label>
                                <input type="text" class="form-control" id="alternative_phone_number" name="alternative_phone_number" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12 col-md-12" style="margin-top: 15px;">
                                <table width="100%">



                                    <tr>
                                        <td><input type="checkbox" class="jaycheckboxes3" id="Terms-And-Conditions" value="Terms-And-Conditions" name="Terms-And-Conditions" required>
                                            <label for="marital_status" style="font-weight:bold;">I have read and agree to the <a target="_blank" href="https://vishwavedika.net/tc">Terms And Conditions </a></label>
                                        </td>
                                    </tr>

                                </table>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12"> <br>
                                <input type="hidden" name="fpathofImageID" id="fpathofImageID" />
                                <input type="submit" name="submit" id="submit" />

                                <button class="btn btn-sm  btn-warning" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--/tab-content-->

        </div>
        <!--/col-9-->

        <!-- Modal -->
        </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div id='cottage_div_divider2'>
        <div class="col-sm-9">
            <div class="panel panel-default" style="background-color: rgb(244, 247, 248);">
                <div class="panel-heading">Advertisements</div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="col-xs-12 col-md-12">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>


    </form>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="dist/cropper.min.js" type="text/javascript"></script>
<script type="text/javascript">
    var bs_modal = $('#modal');
    var image = document.getElementById('image');
    var cropper, reader, file;


    $("body").on("change", ".image", function(e) {
        var files = e.target.files;
        var done = function(url) {
            image.src = url;
            bs_modal.modal('show');
        };


        if (files && files.length > 0) {
            file = files[0];

            if (URL) {
                done(URL.createObjectURL(file));
            } else if (FileReader) {
                reader = new FileReader();
                reader.onload = function(e) {
                    done(reader.result);
                };
                reader.readAsDataURL(file);
            }
        }
    });

    bs_modal.on('shown.bs.modal', function() {
        cropper = new Cropper(image, {
            aspectRatio: 2 / 3,
            viewMode: 3,
            preview: '.preview'
        });
    }).on('hidden.bs.modal', function() {
        cropper.destroy();
        cropper = null;
    });

    $("#crop").click(function() {
        canvas = cropper.getCroppedCanvas({
            width: 200,
            height: 270,
        });

        canvas.toBlob(function(blob) {
            url = URL.createObjectURL(blob);
            var reader = new FileReader();
            reader.readAsDataURL(blob);
            reader.onloadend = function() {
                var base64data = reader.result;

                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: "upload.php",
                    data: {
                        image: base64data
                    },
                    success: function(data) {
                        bs_modal.modal('hide');
                        $('#output').val(data);
                        alert(data);
                    }
                });
            };
        });
    });
</script>
<!-- Latest compiled and minified JavaScript -->

</html>