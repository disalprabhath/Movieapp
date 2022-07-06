<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNUP</title>
</head>
<body>
    <form action="" method="post">
        <table align="center" style="width:500px;">
        <h1 align="center">Sign Up</h1>
            <tr>
                <td>
                    User_name
                </td>
                <td>
                    <input type="text" name="signup_username">
                </td>
                <?php 
                    if(isset($_POST['signup_btn'])){
                        if($_POST['signup_username']==''){
                            echo "<td><span style=\"color:red\">
                                    Please enter an username </span></td>";
                        }
                    }
                ?>
            </tr>

            <tr>
                <td>
                    First_Name
                </td>
                <td>
                    <input type="text" name="signup_fname">
                </td>
                <?php 
                    if(isset($_POST['signup_btn'])){
                        if($_POST['signup_fname']==''){
                            echo "<td><span style=\"color:red\">
                                    Please Enter First Name </span></td>";
                        }
                    }
                ?>
            </tr>

            <tr>
                <td>
                    Last_Name
                </td>
                <td>
                    <input type="text" name="signup_lname">
                </td>
                <?php 
                    if(isset($_POST['signup_btn'])){
                        if($_POST['signup_lname']==''){
                            echo "<td><span style=\"color:red\">
                                    Please Enter Last Name </span></td>";
                        }
                    }
                ?>
            </tr>

            <tr>
                <td>
                    Age
                </td>
                <td>
                    <input type="text" name="age">
                </td>
                <?php 
                    if(isset($_POST['signup_btn'])){
                        if($_POST['age']==''){
                            echo "<td><span style=\"color:red\">
                                    Please Enter age </span></td>";
                        }
                    }
                ?>
            </tr>

            <tr>
                <td>
                    New_Password
                </td>
                <td>
                    <input type="password" name="new_password">
                </td>
                <?php 
                    if(isset($_POST['signup_btn'])){
                        if($_POST['new_password']==''){
                            echo "<td><span style=\"color:red\">
                                    Please enter Password </span></td>";
                        }
                    }
                ?>
            </tr>

            <tr>
                <td>
                    Confirm_Password
                </td>
                <td>
                    <input type="password" name="confirm_password">
                </td>
                <?php 
                    if(isset($_POST['signup_btn'])){
                        if($_POST['confirm_password']==''){
                            echo "<td><span style=\"color:red\">
                                    Please enter Password again </span></td>";
                        }else if($_POST['new_password']!=$_POST['confirm_password']){
                            echo "<td><span style=\"color:red\">Password doesnot match</span></td>";
                        }
                    }
                ?>
            </tr>

            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Register" name="signup_btn">
                </td>
            </tr>

        </table>
    </form>
    <?php 
        if(isset($_POST['signup_btn'])){
            if($_POST['confirm_password']!='' &&
                $_POST['new_password']!='' &&
                $_POST['confirm_password']== $_POST['new_password']
                && $_POST['age']!=''
                && $_POST['signup_fname'] != ''
                && $_POST['signup_lname'] != ''
                && $_POST['signup_username'] != '')
                {
                    signup();
                }
        }
    ?>
</body>
</html>