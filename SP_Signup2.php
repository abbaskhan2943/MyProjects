<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="icon" href="Media/logo10.PNG" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SP Signup P2 - EasyFarming</title>
    <link rel="stylesheet" href="CSS/SP_Signup2.css">
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
    <div class="main_container">
        <!-- form container  -->
        <div class="login_box">
            <!-- form starts from here -->

            <form class="form">
                <div class="title_of_form">
                    <h2>Service Provider Sign_Up</h2>
                </div>
                <hr>
                <div class="e_d_container">
                    <label for="equpment details" class="e_d_label"><b>Equipment Details</b> </label><br /><br />
                    <label for="equpment name" class="e_t_label">Equipment Type</label>
                    <select name="equpment" id="#" class="e_t_select">
                        <option value="Harvestor">Harvestor</option>
                        <option value="Padday">Padday</option>
                        <option value="Land levelor">Land levelor</option>
                        <option value="Chopper">Chopper</option>
                    </select><br /><br />
                    <label for="equpment name" class="h_m_label">Equipment Model </label>
                    <select name="Harvestor models" id="#" class="h_m_select">
                        <optgroup label="Harvestor models">
                            <option value="Harvestor1">Harvestor 1</option>
                            <option value="Harvestor2">Harvestor 2</option>
                            <option value="Harvestor3">Harvestor 3</option>
                            <option value="Harvestor4">Harvestor 4</option>
                        </optgroup>
                        <optgroup label="Padday models">
                            <option value="Padday1">Padday 1</option>
                            <option value="Padday2">Padday 2</option>
                            <option value="Padday3">Padday 3</option>
                            <option value="Padday4">Padday 4</option>
                        </optgroup>
                        <optgroup label="Lavelor models">
                            <option value="land levelor1"> levelor 1</option>
                            <option value="land levelor2"> levelor 2</option>
                            <option value="land levelor3"> levelor 3</option>
                            <option value="land levelor4"> levelor 4</option>
                        </optgroup>
                        <optgroup label="Chopper models">
                            <option value="Chopper1">Chopper 1</option>
                            <option value="Chopper3">Chopper 3</option>
                            <option value="Chopper2">Chopper 2</option>
                            <option value="Chopper4">Chopper 4</option>
                        </optgroup>
                    </select><br><br>
                    <label for="equpment picturers"><b>Equipment pictures</b></label><br><br>
                    <!-- <input type="file" accept="image/*" class="input_image" /><br /><br /> -->
                    <div class="image_preview_container">
                        <div class="image_preview" id="imagePreview">
                            <input type="file" accept="image/*" class="input_image" />
                            <!-- <img src="#" alt="IMAGE preview" class="image_preview_image" /> -->
                            <!-- <span class="image_preview_default_text">Back-side image </span> -->
                        </div>
                        <div class="image_preview2" id="imagePreview">
                            <input type="file" accept="image/*" class="input_image" />
                            <!-- <img src="#" alt="IMAGE preview" class="image_preview_image2" /> -->
                            <!-- <span class="image_preview_default_text2">Front_side image</span> -->
                        </div>
                        <div class="image_preview3" id="imagePreview">
                            <input type="file" accept="image/*" class="input_image" />
                            <!-- <img src="#" alt="IMAGE preview" class="image_preview_image3" /> -->
                            <!-- <span class="image_preview_default_text3">Left_side image</span> -->
                        </div>
                        <div class="image_preview4" id="imagePreview">
                            <input type="file" accept="image/*" class="input_image" />
                            <!-- <img src="#" alt="IMAGE preview" class="image_preview_image4" /> -->
                            <!-- <span class="image_preview_default_text4">Right_side image</span> -->
                        </div><br />
                        <button id="btn">Sign-Up</button><br /><br />
                        <!-- <a href="#">Forget Password</a> -->

            </form>
        </div>
    </div>
    <!-- footer container -->
    <div class="footer">
        <p>All Rights reserved Easyforming &copy; 2022</p>
    </div>
</body>

</html>