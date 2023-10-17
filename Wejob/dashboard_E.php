<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Admin Dashboard | Korsat X Parmaga</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="css/dashboard.css" />
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
              <span class="title">WeJoB.</span>
            </a>
          </li>

          <li>
            <a href="dashboard_E.php">
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
    <span class="title">Job Form</span>
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
              <span class="title" >Job Seeker</span>
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
              <input type="text" placeholder="Search here" />
              <ion-icon name="search-outline"></ion-icon>
            </label>
          </div>

          <div class="row">
          <div class="user">
            <h2><?php echo ucwords(($_SESSION['pseudo'])) ?></h2>
          </div>
          </div>
         
        </div>

        <!-- ======================= Form ================== -->

        <div class="cv" id="cv">
          <section class="container">
            <h2>Job Form</h2>
            <form action="empform.php" class="form" method="post">
              <div class="column">
                <div class="input-box">
                  <label>Job Title</label>
                  <input
                    type="text"
                    placeholder="Job Title"
                    required
                    name="jobtitle"
                  />
                </div>

                <div class="input-box">
                  <label>Job Description</label>
                  <input
                    type="text"
                    placeholder="Job Description"
                    required
                    name="jobdes"
                  />
                </div>
              </div>

              <div class="column">
                <div class="input-box achiv">
                  <label>Academic Achievement</label>

                  <div class="column">
                    <div class="select-box">
                      <select name="achiv">
                        <option hidden>Degree Certificate</option>
                        <option>Lisence</option>
                        <option>Master</option>
                        <option>Doctorat</option>
                        <option>Maitrise</option>
                        <option>Engineer</option>
                      </select>
                    </div>

                    <div class="select-box">
                      <select name="comp">
                        <option hidden>Competences</option>
                        <option>English</option>
                        <option>Marketing</option>
                        <option>Graphic Designer</option>
                        <option>Web Developer</option>
                      </select>
                    </div>
                  </div>
                  <div class="column">
                    <input
                      type="number"
                      placeholder="Years Of Experience"
                      name="exp"
                      required
                    />

                    <input
                      type="number"
                      placeholder="Salary"
                      required
                      name="salary"
                    />
                  </div>
                </div>
                <div class="input-box">
                  <input type="submit" value="Add" class="btn button"/><a
                    href="empform.php"
                  ></a>
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
                  <th>Competences </th>
                  <th>Degree </th>
                  <th>Experience </th>
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
              
                  $sql="select num, jobtitle, jobdes, achiv, comp, exp, salary from `empform` where user='$access'";
                      $result = mysqli_query($conn,$sql);
              
                      if($result){
                          while($row = mysqli_fetch_assoc($result)){
                              $num = $row['num'];
                              $jobtitle = $row['jobtitle'];
                              $achiv = $row['achiv'];
                              $comp = $row['comp'];
                              $exp = $row['exp'];
                              $salary = $row['salary'];
                              echo '
                              <tr>
                              <td> <strong>'.ucwords($jobtitle).'</strong></td>
                              <td>'.$achiv.' </td>
                              <td> '.$comp.' </td>
                              <td> '.$exp.' Years</td>
                              <td> <strong> $'.$salary.' </strong></td>
                              <td>
                                <button class="btn button"><a href="delete.php? deleteid='.$num.'">Delete</a></button>
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
          <div class="recentCustomers" id="seeker">
            <div class="cardHeader">
              <h2>Recent Job Seekers</h2>
            </div>

            <table>

              <?php
              $access=$_SESSION['pseudo'];


                $conn = new mysqli('localhost','root','','test');
                if($conn->connect_error){
                  echo "$conn->connect_error";
                  die("Connection Failed : ". $conn->connect_error);
                } else {
              
                  $sql="select * from `empform`, `regform`, decision 
                  where empform.user='$access'  
                   and empform.jobtitle= decision.jobtitle and regform.compd=decision.jobtitle" ;

                      $result = mysqli_query($conn,$sql);
                     

                  
                      if($result){
                          while($row = mysqli_fetch_assoc($result) ){
                            $jobtitle=$row['jobtitle'];
                            $fullname = $row['fullname'];
                            $compd = $row['compd'];
                            $comp = $row['comp'];
                            $achiv= $row['achiv'];
                            $expp = $row['expp'];
                            $exp = $row['exp'];
                            $degre=$row['degre'];
                            $score=0;
                            if($comp==$compd){
                              $score=$score+5;
                            }
                            if($expp>=$exp){
                              $score=$score+(2*($expp-$exp));

                            }
                            if($achiv!=$degre){
                              $score=$score*0;
                            }
                              echo '
                              <tr>
                              <td width="60px">
                                <div class="imgBx">
                                  <img src="img/customer02.jpg" alt="" />
                                </div>
                              </td>
                              <td>
                                <h4>
                                  '.ucwords($fullname).' <br/>
                                  <span>'.$compd.',' .$achiv.',' .$expp.'yrs</span><br> Score: '.$score.'
                                </h4>
                              </td>

                            <td>
                             <div classe ="row">
                                <button class="btns buttons"><a href="accept.php? acceptid='.$jobtitle.'">Accept</a></button>
                                <button class="btns buttons1"><a href="refuse.php? refuseid='.$jobtitle.'">Refuse</a></button>
                             </div>
                            </td>

                            </tr>';
                          }
                        }
                      
                  
                  $conn->close();
                }
                
              ?>
              
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
  </body>
</html>
