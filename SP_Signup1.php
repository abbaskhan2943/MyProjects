<DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <link rel="icon" type="icon" href="Media/logo10.PNG" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>SP Signup P1 - EasyFarming</title>
        <link rel="stylesheet" href="CSS/SP_Signup.css" />

    </head>

    <body>
        <header class="header">
            <img src="Media/LOGO-01.png" alt="logo of company" />
            <!-- heading container having h1 and h3 -->
            <div class="heading">
                <h2>Welcome To Easy Farming</h2>

                <i>Online Machinary Hiring Application</i>
            </div>
        </header>
        <!-- main container having header + main content + footer  -->
        <div class="main_container">
            <!-- form container  -->
            <div class="login_box">
                <!-- form starts from here -->
                <form class="form">
                    <div class="sp_sign_up">
                        <h2>Service Provider Sign_Up</h2>
                        <hr>
                        <label for="profile_pic" id="profile_pic_label"><b>profile picture</b></label><br><br>
                        <div class="profile_image">
                            <input type="file" accept="image/*" class="input_image" />
                        </div>
                        <div class="except_image_part">
                            <label for="name"><b>Personal Details</b> </label><br /><br />
                            <label for="first_name" class="first_name_label">
                                First Name
                            </label>

                            <input class="first_name_input" type="text" size="25" maxlength="14" placeholder="Ahmed"
                                name="name" required />


                            <label for="lastname" class="last_name_label">Last Name </label>
                            <input class="last_name_input" type="text" size="25" maxlength="14" placeholder="Ali"
                                name="last_name" required /><br /><br />

                            <label for="mobile.No" class="mobile_no_label">Mobile.No </label>
                            <input class="mobile_no_input" type="tel" maxlength="11" size="25"
                                placeholder="xxxx-xxxxxxx" name="name" required />
                            <label for="E-mail" class="email_label"> E-mail </label>
                            <input class="email_input" type="email" size="25" maxlength="15"
                                placeholder="ali@example.com" name="email" required />
                            <br /><br />
                            <label for="CNIC" class="cnic_label"> CNIC # </label>
                            <input class="cnic_input" type="tel" maxlength="14" size="25" placeholder="xxxxx-xxxxxxx-x "
                                name="CNIC" required />
                            <label for="Licience" class="liecence_label">Licience # </label>
                            <input class="liecence_input" type="text" placeholder="xxxx-xxxxxxx-xx" maxlength="14"
                                size="25" name="text" required /><br /><br />
                            <label for="password" class="password_label">Password </label>
                            <input class="password_input" type="password" size="25" maxlength="14"
                                placeholder="set password" name="password" required />
                            <label for="password" class="conform_password_label">Conform Password
                            </label>
                            <input class="conform_password_input" type="password" size="25" maxlength="14"
                                placeholder="Re-Enter password" name="password" required /><br />
                            <br />
                            <label for="addrees_of_service_provider"><b>Address Details</b></label><br><br>
                            <label for="country_name" class="country_label">
                                Country
                            </label>

                            <input class="country_input" type="text" size="25" maxlength="14" placeholder="Pakistan"
                                name="name" required />
                            <label for="provance_name" class="provance_label">
                                Provance
                            </label>

                            <input class="provance_input" type="text" size="25" maxlength="14" placeholder="Sindh"
                                name="name" required /><br><br>
                            <label for="division_name" class="division_label">
                                Division
                            </label>

                            <input class="division_input" type="text" size="25" maxlength="14" placeholder="Sukkur"
                                name="name" required />
                            <label for="district_name" class="district_label">
                                District
                            </label>

                            <input class="district_input" type="text" size="25" maxlength="14" placeholder="Khairpur"
                                name="name" required /><br><br>
                            <label for="tahsil_name" class="tahsil_label">
                                Tahsil(city)
                            </label>

                            <input class="tahsil_input" type="text" size="25" maxlength="14" placeholder="Ranipur"
                                name="name" required />
                            <label for="service_area_name" class="service_Area_label">
                                Service Area
                            </label>

                            <input class="service_Area_input" type="text" size="25" maxlength="14"
                                placeholder="Khairpur" name="name" required /><br><br>
                            <a href="../HTML/service_provider_sign_up2.html"><button
                                    id="btn">Next</button><br /><br /></a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
        </div>
        <!-- footer container -->
        <div class="footer">
            <p>All Rights reserved Easyforming &copy; 2022</p>
        </div>
    </body>

    </html>