<?php 
session_start();
        if(isset($_POST['admin_email'])){
                  include("condb.php");
                  $admin_email = $_POST['admin_email'];
                  $admin_password  = $_POST['admin_password'];

                  $sql="SELECT * FROM admin 
                  WHERE admin_email='".$admin_email."' 
                  AND  admin_password='".$admin_password."' ";
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

                      $_SESSION["admin_id"] = $row["admin_id"];
                      $_SESSION["username"] = $row["username"];
                      $_SESSION['level'] = $row["level"];
                      if($_SESSION["level"]=="admin"){ 

                        echo '
                        <script>
                            setTimeout(function() {
                            swal({
                                    title: "Login success admin",
                                    text: "ผู้ดูแลระบบ",
                                    type: "success"
                                }, function() {
                                window.location = "admin/index.php";
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
                                    title: "Login error!!!! !!",
                                    text: "ผิดพลาด กรุณาลองใหม่อีกครั้ง",
                                    type: "warning"
                                }, function() {
                                window.location = "loginadmin.php";
                            });
                            }, 100);
                        </script>
                        ';
      
                      }
      
            }
?>