<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="icon" href="Media/logo10.PNG">
    <!-- <link rel="icon" type="icon" href="logo9.PNG"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- <link rel="shortcut icon" type="image/png" href="logo9.PNG"/> -->
    <!-- <link rel="shortcut icon" href="logo9.PNG"/> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css"
        integrity="sha512-xX2rYBFJSj86W54Fyv1de80DWBq7zYLn2z0I9bIhQG+rxIF6XVJUpdGnsNHWRa6AvP89vtFupEPDP8eZAtu9qA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="CSS/ApprovedUsers.css" />
    <title>Approved Users - EasyFarming</title>
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
                <h2>Registered Users List</h2>
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
                        $fetchdata = " select * from users" ;
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
                            <button type="button" class="btn-more">View Details</button>
                            <button type="button" class="btn-accept">Accept</button>
                            <button type="button" class="btn-reject">Reject</button>
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