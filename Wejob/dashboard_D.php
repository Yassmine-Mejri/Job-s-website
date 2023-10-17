<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Admin Dashboard | Korsat X Parmaga</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/line-icons.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="index.html">
                        <span class="icon">
                            <ion-icon name="finger-print-outline"></ion-icon>
                        </span>
                        <span  class="title">WeJoB.</span>
                    </a>
                </li>

                <li>
                    <a href="dashboard_D.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>


                <li>
                    <a href="#cv">
                        <span class="icon">
                            <ion-icon name="book-outline"></ion-icon>
                        </span>
                        <span class="title">Registration Form</span>
                    </a>
                </li>

                <li>
                    <a href="#jobs">
                        <span class="icon">
                            <ion-icon name="briefcase-outline"></ion-icon>
                        </span>
                        <span class="title">Recent Job</span>
                    </a>
                </li>

                <li>
  <a href="#seeker">
    <span class="icon">
      <ion-icon name="people-outline"></ion-icon>
    </span>
    <span class="title" >Result</span>
  </a>
</li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Settings</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title">Password</span>
                    </a>
                </li>

                <li>
                    <a href="index.html">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="row">
                <div class="user">
                <h2><?php echo ucwords( ($_SESSION['pseudo'])) ?></h2>
                </div>
                </div>
            </div>

            <!-- ======================= Form ================== -->

            <div class="cv">
                <section class="container">
                  <h2>Registration Form</h2>
                  <form action="regform.php" class="form" method="post">
                    <div class="column">
                      
                      <div class="row-3">
                      <div class="input-box">
                        <label>Full Name</label>
                        <input type="text" placeholder="Enter full name" required name="fullname"/>
                      </div>
              
                      <div class="input-box">
                        <label>Email Address</label>
                        <input type="text" placeholder="Enter email address" required name="email"/>
                      </div>
              
                      <div class="column">
                        <div class="input-box">
                          <label>Phone Number</label>
                          <input type="number" placeholder="Enter phone number" required name="phone" />
                        </div>
                        <div class="input-box">
                          <label>Birth Date</label>
                          <input type="date" placeholder="Enter birth date" required name="birth"/>
                        </div>
                      </div>
                      </div>
                  
                      <div class="row-1">
                        <div class="input-box address">
                          <label>Address</label>
                          <input type="text" placeholder="Enter street address" required  name="adresse"/>
                        </div>
                        </div>
                  
                        <div class="column">
                        <div class="gender-box" >
                          <h3>Gender</h3>
                          <div class="gender-option" >
                            <div class="gender">
                              <input type="radio" id="check-male" name="gender"  />
                              <label for="check-male">male</label>
                            </div>
                            <div class="gender">
                              <input type="radio" id="check-female" name="gender" />
                              <label for="check-female">Female</label>
                            </div>
                          </div>
                        </div>
                  
                        <div class="gender-box">
                          <h3>Marital Status</h3>
                          <div class="gender-option">
                            <div class="gender1">
                              <input type="radio" id="check-married" name="status"  />
                              <label for="check-married">Married</label>
                            </div>
                            <div class="gender1">
                              <input type="radio" id="check-single" name="status" />
                              <label for="check-single">Single</label>
                            </div>
                            <div class="gender1">
                              <input type="radio" id="check-divorced" name="status" />
                              <label for="check-divorced">Divorced</label>
                            </div>
                          </div>
                        </div>
                        </div>
              
                    </div>
              
              
              
                  <div class="column">
                    <div class="row">
                        <div id="display-image" class="image-area">
                          <img src=""  class="img-load" alt="">
                          <i class="icon-cloud icon"></i>
                          <h3>Upload Image</h3>
                        </div>
              
                        <input
                          type="file"
                          id="image-input"
                          placeholder="Upload Image"
                          accept="image/jpg"
                        />
                        <label for="image-input" class="btn button">Upload Image</label>
                      </div>
                    <div class="input-box achiv" >
                      <label>Academic Achievement</label>
              
                      <div class="column">
                        <div class="select-box" >
                          <select name="degre">
                            <option hidden >Degree Certificate</option>
                            <option>Lisence</option>
                            <option>Master</option>
                            <option>Doctorat</option>
                            <option>Maitrise</option>
                            <option>Engineer</option>
                          </select>
                        </div>
              
                        <div class="select-box">
                          <select name="compd">
                            <option hidden>Competences</option>
                            <option>English</option>
                        <option>Marketing</option>
                        <option>Graphic Designer</option>
                        <option>Web Developer</option>
                          </select>
                        </div>
                      </div>
                      <div class="column">
                        <div class="select-box">
                          <select name="fac">
                            <option hidden>University</option>
                            <option>Tunis</option>
                            <option>Manar</option>
                            <option>Carthage</option>
                            <option>Sousse</option>
                            <option>Sfax</option>
                          </select>
                        </div>
              
                        <input type="number" placeholder="Years Of Experience" required  name="expp" />
                      </div>
                    </div>
                    <div class="input-box">
                        <input type="submit" value="Apply" class="btn button"/><a href="regform.php"></a>
                    </div>
                  </div>
                  </form>
                </section>
              </div>
              


            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">1,504</div>
                        <div class="cardName">Daily Views</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">80</div>
                        <div class="cardName">Jobs</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="globe-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">284</div>
                        <div class="cardName">Comments</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">$7,842</div>
                        <div class="cardName">Earning</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
            </div>

            <!-- ================ Order Details List ================= -->
            <div class="details" id="jobs">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Recent Jobs</h2>
                        <a href="#" class="btn">View All</a>
                    </div>

                    <table>
                        <thead>
                        <tr>
                  <th>Job Title</th>
                  <th>Degree</th>
                  <th>Competences </th>
                  <th>Experience </th>
                  <th>Score</th>
                  <th>Salary </th>
                  <th>Action </th>
                </tr>
                        </thead>

                        <tbody>



                            <?php





$access=$_SESSION['pseudo'];
                            
                $conn = new mysqli('localhost','root','','test');
                if($conn->connect_error){
                  echo "$conn->connect_error";
                  die("Connection Failed : ". $conn->connect_error);
                } else {
              
                  $sql="select * from `regform` ,`empform` where regform.user='$access'  and empform.jobtitle=regform.compd";
                      $result = mysqli_query($conn,$sql);
                      
                   

                      if($result){
                          while($row = mysqli_fetch_assoc($result)){
                            $score=0;
                            $compe=$row['comp'];
                            $compd = $row['compd'];

                              $num = $row['num'];
                              $degre=$row['degre'];
                              $jobtitle = $row['jobtitle'];
                              $achiv = $row['achiv'];
                              $expp = $row['expp'];
                              $exp = $row['exp'];
                              $salary = $row['salary'];

                              if ($compe==$compd){
                                $score=$score+5;
                              }
                              
                              $score=$score+($salary/100);
                              
                              if($achiv!=$degre){
                                $score=$score*0;
                              }

                              echo '
                              <tr>
                              <td> <strong>'.$jobtitle.'</strong></td>
                              <td>'.$achiv.' </td>
                              <td> '.$compe.' </td>
                              <td> '.$exp.' Years</td>
                              <td> '.$score.'</td>
                              <td> <strong> $'.$salary.' </strong></td>
                              <td>
                                <button class="btn button"><a href="apply.php? apply='.$jobtitle.'">Apply</a></button>
                              </td>
              
                            </tr>'; 
                          }
                      }
                      $conn->close();
                      
                    }
              ?>

                           
                        </tbody>
                    </table>
                </div>

                <!-- ================= New Customers ================ -->
                
                <div class="recentOrders" id="seeker">
                    <div class="cardHeader">
                        <h2>Result</h2>
                    </div>

                    <table>

                    <thead>
                        <tr>
                        <th>Job Title</th>
                        <th>Result</th>
                        </tr>
                    </thead>

                    <tbody>

                    <?php
                
                 $access=$_SESSION['pseudo'];
      
      
      
                 $conn = new mysqli('localhost','root','','test');
                 if($conn->connect_error){
                     echo "$conn->connect_error";
                     die("Connection Failed : ". $conn->connect_error);
                 } else {
                 
                 
                            $sql="select * from  `decision` where user='$access' ";
                            $result = mysqli_query($conn,$sql);
                            if($result){
                                while($row = mysqli_fetch_assoc($result)){
                                    $jobtitle = $row['jobtitle'];
                                    $res = $row['res'];
                                    
                        echo ' <tr>
                        <td><strong>'.ucwords($jobtitle).'</strong></td>
                        <td><ion-icon name="chevron-back-outline"></ion-icon> '.$res.' <ion-icon name="chevron-forward-outline"></ion-icon></td>
                         </tr>';
                                }
                            }
                          
                     $conn->close();
                 }

?>
                  
                  
                  

                    </tbody>

                    </table>
                
                </div>
            
            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>