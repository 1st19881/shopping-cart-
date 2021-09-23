<?php 
session_start();
        if(isset($_POST['username'])){
                  include("condb.php");
                  $username = $_POST['username'];
                  $password  = ($_POST['password']);

                  $sql="SELECT * FROM customer 
                  WHERE  username='".$username."' 
                  AND  password='".$password."' ";
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

                      $_SESSION["member_id"] = $row["member_id"];
                      $_SESSION["name"] = $row["name"];
                      $_SESSION['level'] = $row["level"];
                      if($_SESSION["level"]=="member"){ 

                        echo '
                        <script>
                            setTimeout(function() {
                            swal({
                                    title: "Login success member",
                                    text: "สมาชิก",
                                    type: "success"
                                }, function() {
                                window.location = "customer/index.php";
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
                                window.location = "index.php";
                            });
                            }, 50);
                        </script>
                        ';
     
                      }
     
        }
?>