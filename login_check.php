<?php
    session_start();
    //only one value is stored in the cookie array
    $cookie_name = array_key_last($_COOKIE);//gets first key of an array
    if ($cookie_name){
        $cookie_check = $_COOKIE[$cookie_name];
    }else{
        $cookie_check = null;
    }
    //cookie name = password

    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password, "sh_signin");

    //check connection
    if ($conn -> connect_error){
        die("Connection failed: " . $conn->connect_error);
    }else{
        echo "connected successfully" . "<br>";
    }

    //sql code that gets cookie
    $cookie_get = "SELECT * FROM `sign_in` WHERE `credential` = $cookie_check";
    $retrieved_cookie = mysqli_query($conn, $cookie_get);

    //if there is a cookie
    if($retrieved_cookie){
        //turns result into an array
        $result = mysqli_fetch_assoc($retrieved_cookie);
        //stores information into variables
        $fname = $result['first_name'];
        $lname = $result['last_name']; 

        //check if cookie is correct
        if($result['credential'] === $cookie_check){
            //get all the person's information
            $info_get = "SELECT `first_name`, `last_name`, `student_type`, `Dorm_ID`, `cocurricular` 
                    FROM `roster` 
                    WHERE `first_name` = '$fname' and `last_name` = '$lname'";
            $info_send = mysqli_query($conn, $info_get);

            if($info_send){
                //stores it in session variables to be used later in form submit
                $infos = mysqli_fetch_assoc($info_send);
                $_SESSION['fname'] = $infos['first_name'];
                $_SESSION['lname'] = $infos['last_name'];
                $_SESSION['id'] = $infos['Dorm_ID'];

                //determines person type and direct them to their page  
                if($infos['student_type'] >= 2){
                    header("Location: teacher_page.php");
                }else{
                    header("Location: submit_form.php");
                    }
            }else{
                header("Location: login_form.php");
            }
        }else{
            header("Location: login_form.php");
        }
    }else{
       header("Location: login_form.php");
    }
?>