<?php include "config.php"; ?>
<?php include "functions.php"; ?>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Academic Transcript</title>
      <link rel="stylesheet" href="style.css">
   </head>
   <body>
      <?php 
         if (isset($_GET['id'])) {
            $sid = $_GET['id'];
            $year = $_GET['year'];

            $sql = "SELECT * FROM ".RESULTTBL." WHERE student_ID = $sid AND exam_year = $year LIMIT 1";
            
            $res = $con->query($sql);
            if ($res->num_rows > 0) {
               while($r = $res->fetch_assoc()){
       ?>
      <center>
         <div class="page_p">
            <h1>Kharicha Danga Secondary School</h1>
            <h2>JASHORE SADAR, JASHORE</h2>
            <table class="ins_info">
               <tbody>
                  <tr>
                     <td>
                     </td>
                     <td class="td_mid">
                        <img class="logo" src="assets/img/rp_logo.png">
                        <h1 class="title">ACADEMIC TRANSCRIPT-2022</h1>
                        <h1>Student ID : <span><?php echo $r['student_ID']; ?></span></h1>
                     </td>
                     <td>
                        <table class="mark_info">
                           <tbody>
                              <tr>
                                 <th>Marks</th>
                                 <th>Letter Grade</th>
                                 <th>Grade Point</th>
                              </tr>
                              <tr>
                                 <td>80-100</td>
                                 <td>A+</td>
                                 <td>5.00</td>
                              </tr>
                              <tr>
                                 <td>70-79</td>
                                 <td>A</td>
                                 <td>4.00</td>
                              </tr>
                              <tr>
                                 <td>60-69</td>
                                 <td>A-</td>
                                 <td>3.50</td>
                              </tr>
                              <tr>
                                 <td>50-59</td>
                                 <td>B</td>
                                 <td>3.00</td>
                              </tr>
                              <tr>
                                 <td>40-49</td>
                                 <td>C</td>
                                 <td>2.00</td>
                              </tr>
                              <tr>
                                 <td>33-40</td>
                                 <td>D</td>
                                 <td>1.00</td>
                              </tr>
                              <tr>
                                 <td>0-32</td>
                                 <td>F</td>
                                 <td>0.00</td>
                              </tr>
                           </tbody>
                        </table>
                     </td>
                  </tr>
               </tbody>
            </table>
            <table class="result_basic">
               <tbody>
                  <tr>
                     <td style="width:120px;">Name of Student</td>
                     <th colspan="3">MD. HABLU RAHMAN </th>
                  </tr>
                  <tr>
                     <td>Father`s Name</td>
                     <th colspan="3">MD. KUDDUS RAHMNA</th>
                  </tr>
                  <tr>
                     <td>Mother`s Name</td>
                     <th colspan="3">JORINA BEGUM</th>
                  </tr>
                  <tr>
                     <td>Class</td>
                     <th>SSC_2022</th>
                     <td style="width:80px;">Section</td>
                     <th></th>
                  </tr>
                  <tr>
                     <td>Group</td>
                     <th>HUMANITIES</th>
                     <td>Class Roll</td>
                     <th>63</th>
                  </tr>
                  <tr>
                     <td>Religion</td>
                     <th>ISLAM</th>
                     <td>Nationality</td>
                     <th>BANGLADESHI</th>
                  </tr>
                  <tr>
                     <td>Gender</td>
                     <th>MALE</th>
                     <td>Shift</td>
                     <th>DAY</th>
                  </tr>
               </tbody>
            </table>
            <br>
            <div class="div_result">
               <table class="result_sheet" cellspacing="0">
                  <tbody>
                     <tr>
                        <th rowspan="2" class="thl">Subject Name</th>
                        <th colspan="3">Average</th>
                     </tr>
                     <tr>
                        <th class="th2 th2l">Mark</th>
                        <th class="th2">Letter Grade</th>
                        <th class="th2">Point</th>
                     </tr>
                     <tr>
                        <td>Bangla</td>
                        <td><?php echo $r['bangla_mark']; ?></td>
                        <td><?php get_res_letter($r['bangla_mark']) ?></td>
                        <td><?php get_res_point($r['bangla_mark']) ?></td>
                     </tr>
                     <tr>
                        <td>English</td>
                        <td><?php echo $r['english_mark']; ?></td>
                        <td><?php get_res_letter($r['english_mark']) ?></td>
                        <td><?php get_res_point($r['english_mark']) ?></td>

                     </tr>
                     <tr>
                        <td>Mathmatics</td>
                        <td><?php echo $r['math_mark']; ?></td>
                        <td><?php get_res_letter($r['math_mark']) ?></td>
                        <td><?php get_res_point($r['math_mark']) ?></td>
                     </tr>
                     <tr>
                        <td></td>
                        <td></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                     </tr>
                     <tr>
                        <td>Grade Point Average (GPA)</td>
                        <td>-</td>
                        <td>0.00</td>
                        <td>0.00</td>
                     </tr> 
                     
                  </tbody>
               </table>
            </div>
         </div>
      </center>
      <?php
               }
            }else{
            echo "<center><h1>Result Not Found. Please try again.</h1></center>";
         }

         }else{
            echo "<center><h1>Result Not Found. Please try again.</h1></center>";
         }
      ?>

      <button onclick="window.print()">Print</button>

      <script>
         window.print();
      </script>
   </body>
</html>