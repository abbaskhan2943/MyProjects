<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="icon" href="Media/logo10.PNG">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="CSS/ServiceProviders.css" />
    <title>USERS-Easy Farming</title>
</head>

<body>

    <?php// include_once 'Navbar.php'; ?>
    <!-- Code for side-bar -->

    <?php //include_once 'Sidebar.php'; ?>
    <div class="side-bar">
        <div class="brand-name">
            <h1>Easy&nbsp;Farming</h1>
        </div>
        <ul>
            <a href="Home.php">
                <li>Home</li>
            </a>
            <a href="requests.php">
                <li>Requests</li>
            </a>
            <a href="">
                <li>Complaints</li>
            </a>
            <a href="ServiceProviders.php">
                <li>Service&nbsp;Providers</li>
            </a>
            <a href="UsersList.php">
                <li>Users</li>
            </a>
            <a href="">
                <li>Help</li>
            </a>
            <a href="">
                <li>Settings</li>
            </a>

        </ul>
    </div>

    <!-- code for Main body  -->
    <div class="container">
        <div class="new-requests">
            <!-- Title of the page  -->
            <div class="title">
                <h2>Service Providers</h2>
            </div>
            <!-- table of content below here  -->
            <table class="table">
                <thead>
                    <tr class="headings">
                        <th>S_No</th>
                        <th>First_Name</th>
                        <th>last_Name</th>
                        <th>Email</th>
                        <th>MobileNo</th>
                        <!-- <th>Password</th> -->
                        <!-- <th>Re_Password</th> -->
                        <th>Joint_at</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        // to connect php with database
                        include_once "connect.php";
                        
                        // to select table and fetch data from database
                        $fetchdata = " select * from serviceproviders" ;
                        $query = mysqli_query($connect, $fetchdata);
                        $checkrow = mysqli_num_rows($query);
                        // display the data on your website
                        while($res = mysqli_fetch_assoc($query)){
                            ?>
                    <tr>
                        <td><?php echo $res['S_No'] ; ?> </td>
                        <td><?php echo $res['First_Name'] ; ?> </td>
                        <td><?php echo $res['Last_Name'] ; ?> </td>
                        <td><?php echo $res['Email'] ; ?> </td>
                        <td><?php echo $res['MobileNo'] ; ?></td>
                        <td><?php echo $res['Joint_at'] ;?></td>
                        <td>
                            <button type="button" class="btn-accept">Edit</button>
                            <button type="button" class="btn-more">View Profile</button>
                            <button type="button" class="btn-reject">Delete</button>
                        </td>
                        <!-- <td><i class="fa-brands fa-facebook-f"></i></td> -->
                    </tr>


                    <?php

                    }

                    ?>



                </tbody>
            </table>
        </div>
    </div>
    <script src="jquerySource.js"></script>
    <script src="Users.js"></script>
</body>

</html>