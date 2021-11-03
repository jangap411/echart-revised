<?php

    session_start();
//connection to the database

// 'mysql:host=localhost;dbname=zbnhvnthwb', 'zbnhvnthwb', 'mZYdSat7WH'

    $db = mysqli_connect('localhost','zbnhvnthwb','mZYdSat7WH','zbnhvnthwb');

    //check if connected
    if (!$db) {
        die("unable to connnect to the database");
    }

    $_SESSION['message']="";

        //login
        //if the login button is pressed
    if(isset($_POST['login-btn'])){
       // $name = $_POST['lname'];
        $number = $_POST['number'];

        
        $query = "SELECT * FROM `patient` WHERE `phone`='$number'; "; // AND 
        $resalt = mysqli_query($db, $query);
        $row = mysqli_fetch_assoc($resalt);
        
        if(mysqli_num_rows($resalt) == 1){
            $_SESSION['id'] = $row['idPatient'];
            $id = $row['idPatient'];
            $_SESSION['txt'] = $number;
            $_SESSION['fname'] = $row['Fname'];
            $_SESSION['lname'] = $row['Lname'];
            $fname = $row['Fname'];
            $_SESSION['pic'] = $row['pic_path'];
            $_SESSION['dob'] = $row['dob'];
            $_SESSION['sex'] = $row['sex'];
            
            /*

            */

            echo '<script type="text/javascript">';
        
            //echo "var id = <?php  echo json_encode($fname);";
            
            echo 'alert("Welcome ");window.open("home.php","_self");';
            echo '</script>';
           // die("---> id ". $id);
            
           // echo '<script type="text/javascript">alert("Welcome ".id);window.open("home.php","_self");</script>';
            //echo '<script type="text/javascript">alert("Welcome");</script>';
            //header("location:home.php");
            #echo "Login successfully";
        }else{
            //echo "Login Fail";
            echo '<script type="text/javascript">alert("Invalid username or password");window.open("login.php","_self");</script>';
        }
    }


    //-----------> setting qr code <-------
    if (isset($_GET['text'])) {
        $_SESSION['text'] = $_GET['text'];
    }else{
        $_SESSION['text'] = "TB eChart --> Please login to get your treatment details";
    }

    //-------------> logout -----
    
/*

if (!isset($_SESSION['txt'])) {
    header("Location:index.php");
} else if (isset($_SESSION['txt'])!="") {
    //header("Location:./src/home.php");
}
*/

//logout link
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['id']);
        header("Location:../index.php");
    }

//logout link
if (isset($_GET['mlogout'])) {
    session_destroy();
    unset($_SESSION['id']);
    header("Location:mlogin.php");
}

    //check patient in ---> medical staff

    //if the login button is pressed
    if(isset($_POST['mlogin-btn'])){
    // $name = $_POST['lname'];
        $number = $_POST['number'];

        $query = "SELECT * FROM `patient` WHERE `phone`='$number'; "; // AND 
        $resalt = mysqli_query($db, $query);
        $row = mysqli_fetch_assoc($resalt);
        
        if(mysqli_num_rows($resalt) == 1){

            $id = $row['idPatient'];
            //counting the row of medication taken each day
            $sql = "SELECT COUNT(*) FROM chart WHERE `patientId`=10;";
            $result = mysqli_query($db,$sql);
            $dosage = mysqli_num_rows($result);
            $_SESSION['dose'] = $dosage;
            //die("id ---> ".$id);
            $_SESSION['txt'] = $number;
            $_SESSION['id'] = $row['idPatient'];
            $_SESSION['fname'] = $row['Fname'];
            $_SESSION['lname'] = $row['Lname'];
            $_SESSION['pic'] = $row['pic_path'];
            $_SESSION['dob'] = $row['dob'];
            $_SESSION['age'] = $row['age'];
            $_SESSION['sex'] = $row['sex'];

            /*
                echo '<script type="text/javascript">alert("<?php echo "Welcome"; ?>");</script>';
            */
            
            //count the rows of medication taken
            

            echo '<script type="text/javascript">alert("Welcome");</script>';
            //echo $_SESSION['dose'];
            //echo '<script>window.open("indexm.php","_self");</script>';
            //die("---->dose: ". $id);
            header("location:indexm.php");
            #echo "Login successfully";
        }else{
            //echo "Login Fail";
            echo '<script type="text/javascript">alert("Invalid Registration Number");</script>';
            echo "<script>window.open('mlogin.php','_self')</script>";
        }
    }


    //
    

?>