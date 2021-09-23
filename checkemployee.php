<?php 
session_start();
        if(isset($_POST['employee_email'])){
                  include("condb.php");
                  $employee_email = $_POST['employee_email'];
                  $employee_password  = $_POST['employee_password'];

                  $sql="SELECT * FROM employees
                  WHERE employee_email='".$employee_email."' 
                  AND  employee_password ='".$employee_password ."' ";
                  $result = mysqli_query($conn,$sql);

                    // echo $sql;
                    // exit;

                  echo '
                  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
                  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
                  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
                  ';		
                  
                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);

                      $_SESSION["employee_id"] = $row["employee_id"];
                      $_SESSION["employee_name"] = $row["employee_name"];
                      $_SESSION['level'] = $row["level"];
                      if($_SESSION["level"]=="employee"){ 

                        echo '
                        <script>
                            setTimeout(function() {
                            swal({
                                    title: "Login success employee",
                                    text: "พนักงาน",
                                    type: "success"
                                }, function() {
                                window.location = "employee/index.php";
                            });
                            }, 50);
                        </script>
                        ';
                          }
                      }else{
                        echo '
                        <script>
                            setTimeout(function() {
                            swal({
                                    title: " ผิดพลาด !!",
                                    text: " กรุณาลองใหม่อีกครั้ง",
                                    type: "warning"
                                }, function() {
                                window.location = "loginemployee.php";
                            });
                            }, 50);
                        </script>
                        ';
     
                      }
     
        }
?>