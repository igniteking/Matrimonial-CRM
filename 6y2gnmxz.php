<?php
$dbServername = "localhost";
$dbUsername = "ujreqity6nrzd";
$dbPassword = "*3d#5kc^5t]%";
$dbName = "dbwjcfizozwqac";
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName) or die;
?>
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

    .flex-container {
        display: flex;
        flex-direction: row;
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

        .flex-container {
            flex-direction: column;
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
    </div>
    <br><br>
    <div id='wrapper'>
        <div style='padding: 20px;'>
            <div style='width: 100%; background: #fff; border: 1px solid #eee; background: #fff; border-radius: 8px;'>
                <div style='padding: 10px;'>
                    <form action="#" method="GET">
                        <div style='padding: 10px;'>
                            <h5>
                                <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#ee66aa,secondary:#e8308c" stroke="51" style="width:50px;height:50px">
                                </lord-icon> Bride / Groom Search
                            </h5>
                            <hr style='height: 1px; background: #eee; border: 0 none;'>
                        </div>
                        <div class='flex-container'>

                            <div style='flex-grow: 3;'>
                                <div style='padding: 20px;'>
                                    Gender<select class="form-control" name="Gender">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select></div>
                            </div>
                            <div style='flex-grow: 1;'>
                                <div style='padding: 20px;'>
                                    Unique ID
                                    <input type='text' name='uid' class="form-control">
                                </div>
                            </div>
                            <div style='flex-grow: 1;'>
                                <div style='padding: 20px;'>
                                    City
                                    <input type='text' name='city' class="form-control">
                                </div>
                            </div>
                            <div style='flex-grow: 1;'>
                                <div style='padding: 20px;'>
                                    District
                                    <input type='text' name='district' class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='flex-container'>

                            <div style='flex-grow: 3;'>
                                <div style='padding: 20px;'>
                                    Mother Tongue<select class="form-control" name="mother_tongue">
                                        <option value=""></option>
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
                                    </select></div>
                            </div>
                            <div style='flex-grow: 1;'>
                                <div style='padding: 20px;'>
                                    Height<select class="form-control" name="height" id="groom_birde_height">
                                        <option value=''></option>
                                        <option value='83'> 6' 11" </option>
                                        <option value='82'> 6' 10" </option>
                                        <option value='81'> 6' 9" </option>
                                        <option value='80'> 6' 8" </option>
                                        <option value='79'> 6' 7" </option>
                                        <option value='78'> 6' 6" </option>
                                        <option value='77'> 6' 5" </option>
                                        <option value='76'> 6' 4" </option>
                                        <option value='75'> 6' 3" </option>
                                        <option value='74'> 6' 2" </option>
                                        <option value='73'> 6' 1" </option>
                                        <option value='72'> 6' 0" </option>
                                        <option value='71'> 5' 11" </option>
                                        <option value='70'> 5' 10" </option>
                                        <option value='69'> 5' 9" </option>
                                        <option value='68'> 5' 8" </option>
                                        <option value='67'> 5' 7" </option>
                                        <option value='66'> 5' 6" </option>
                                        <option value='65'> 5' 5" </option>
                                        <option value='64'> 5' 4" </option>
                                        <option value='63'> 5' 3" </option>
                                        <option value='62'> 5' 2" </option>
                                        <option value='61'> 5' 1" </option>
                                        <option value='60'> 5' 0" </option>
                                        <option value='59'> 4' 11" </option>
                                        <option value='58'> 4' 10" </option>
                                        <option value='57'> 4' 9" </option>
                                        <option value='56'> 4' 8" </option>
                                        <option value='55'> 4' 7" </option>
                                        <option value='54'> 4' 6" </option>
                                        <option value='53'> 4' 5" </option>
                                        <option value='52'> 4' 4" </option>
                                        <option value='51'> 4' 3" </option>
                                        <option value='50'> 4' 2" </option>
                                        <option value='49'> 4' 1" </option>
                                        <option value='48'> 4' 0" </option>
                                    </select>
                                </div>
                            </div>
                            <div style='flex-grow: 1;'>
                                <div style='padding: 20px;'>
                                    Education Qualification<select class="form-control" name="qualification" id="qulification">
                                        <option value=''></option>
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
                                        <option value="Trade School">Others</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div style='padding: 10px;'>
                            <input type='submit' name='search' value='Search' style="cursor: pointer; margin-right: 10px; float: right; color: #fff; text-decoration: none; font-weight: 700; border: 1px solid #d0229d; background: #d0229d; padding: 10px; border-radius: 4px; margin-top: 12px;">
                            <div style="clear: both;"></div>
                        </div>
                    </form>

                </div>

            </div>
            <br>
            <?php
            $date_config = date('m/d/Y');
            $search = @$_GET['search'];
            $gender = @$_GET['Gender'];
            $uid = @$_GET['uid'];
            $main_city = @$_GET['city'];
            $district_city = @$_GET['district'];
            $height = @$_GET['height'];
            $qualification = @$_GET['qualification'];
            $mother_tongue = @$_GET['mother_tongue'];
            if ($search) {
                $start_time = microtime(true);
                $random = mysqli_query($conn, "SELECT * FROM users WHERE sex = '$gender' AND id LIKE '%$uid%' AND city LIKE '%$main_city%' AND district LIKE '%$district_city%' AND height LIKE '%$height%' AND education LIKE '%$education%' AND language LIKE '%$mother_tongue%'");
                $count = mysqli_num_rows($random);
                $end_time = microtime(true);
                $final = ($end_time - $start_time);
                echo "<f style='font-size: 14px; color: #444;'><i class='fas fa-stopwatch'></i> About $count results ($final seconds)</f>";
                while ($row = mysqli_fetch_array($random)) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $surname = $row['surname'];
                    $dob = $row['dob'];
                    $date1 = strtotime($dob);
                    $date2 = strtotime($date_config);
                    $age = round(abs($date2 - $date1) / (365.25 * 60 * 60 * 24));
                    $age = $age . "yrs";
                    $height = $row['height'];
                    $location = $row['city'];
                    $gothram = $row['gothram'];
                    $job = $row['job'];
                    $state = $row['state'];
                    $district = $row['district'];
                    $profile_pic = $row['profile_pic'];
                    echo "<div style='max-width: 800px; background: #fff; margin-top: 20px; border-radius: 4px; border: 1px solid #f1f1f1;
                '><div style='padding: 20px;'>
                <img src='$profile_pic' style='border-radius: 8px; margin-right: 20px; float: left;'>
                <a href='' style='text-transform: uppercase; font-size: 22px; color: #f25353;'>$name $surname</a>
                <hr style='height: 1px; background: #eee; border: 0 none;'>
                <p style='text-transform: uppercase; font-size: 13.5px; color: #53b6f2; font-weight: 600; letter-spacing: 2px;'>PROFILE UID : #$id</p>
                <p style='font-size: 14px; letter-spacing: 1.5px;'>$age / $height in $gothram, $job, $city, $district, $state.</p>
                <div style='clear: both;'></div>
                </div></div>";
                }
            }
            ?>
        </div>
    </div>