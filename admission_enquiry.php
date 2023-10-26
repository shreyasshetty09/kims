
<?php

// $host = "localhost";
// $user = "schoolphins";
// $password = "chandu@123";
// $dbname = "db_lkv_schoolphins_v1";

$servername = "localhost";
$user = "root";
$password = "";
$dbname = "loyola_kendriya_vidyalaya_school";

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
  $student_name = "";
  // $email = "";
  $mobile_one = "";
  $father_name = "";
  $mother_name = "";
  // $dob = "";
  $place_of_birth = "";
  $native = "";
  // $nationality = "";
  $admission_type = "";
  // $campus = "";
  // $branch_name = "";
  // $puCollege_name = "";

  $date_value = $_POST[dob];

  if (isset($_POST['register'])) {
    $student_name = $_POST['student_name'];
    $father_name = $_POST['father_name'];
    $mother_name = $_POST['mother_name'];
    // $email = $_POST['email'];
    // $dateOfBirth = date("Y-m-d", strtotime($date_value));
    $mobile_one = $_POST['mobile_one'];
    $place_of_birth = $_POST['place_of_birth'];
    $native = $_POST['native'];
    // $nationality = $_POST['nationality'];
    $admission_type = $_POST['admission_type'];
    // $campus = $_POST['campus'];
    // $branch_name = $_POST['branch_name'];/
    // $puCollege_name = $_POST['puCollege_name'];
   
    $sql_mobile_one = "SELECT * FROM tbl_admission_enquiry WHERE mobile_one='$mobile_one' AND is_deleted=0";
    // $sql_email = "SELECT * FROM tbl_admission_enquiry WHERE email='$email'AND is_deleted=0";
    $result_one = mysqli_query($conn, $sql_mobile_one);
    // $result_two = mysqli_query($conn, $sql_email);

    if (mysqli_num_rows($result_one) > 0) {
       header("Location: admissionEnquiry.php?status=2"); 
    // }else if(mysqli_num_rows($result_two) > 0) {
    //     header("Location: admissionEnquiry.php?status=3"); 
    // }
     }else{
            $sql = "INSERT INTO tbl_admission_enquiry (student_name, father_name, mother_name, place_of_birth, native, mobile_one, admission_type, date, created_date_time) 
            VALUES ('$student_name','$father_name','$mother_name', '$place_of_birth', '$native', '$mobile_one', '$admission_type',now(), now())";
                $results = mysqli_query($conn, $sql);

            if($results == TRUE){
                   header("Location: admissionEnquiry.php?status=1");
            } else{
                   header("Location: admissionEnquiry.php?status=0");
            }
         }
   }
$conn->close();
?>
    
