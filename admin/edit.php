<?php require_once('header.php') ?>

<?php  
if (isset($_GET['rid'])) {
    $rid = $_GET['rid'];
}

  $msg = "";
  $err = "";
  if (isset($_POST['editbtn'])) {

    $stdID = $_POST['stdid'];
    $year = $_POST['examyear'];
    $bangla = $_POST['banglamark'];
    $eng = $_POST['engmark'];
    $math = $_POST['mathmark'];

    $sql = "UPDATE ".RESULTTBL." SET student_ID=$stdID,exam_year='$year', bangla_mark=$bangla,english_mark=$eng,math_mark=$math WHERE ID = $rid";
    if($con->query($sql)==true){
        $msg = "Data Update Successfull";
    }else{
      $err = 'Faild to Update:'.$con->error;
    }
  }




  if (isset($_GET['rid'])) {
    $sql = "SELECT * FROM ".RESULTTBL." WHERE ID = $rid LIMIT 1";

    $res = $con->query($sql);
    while ($row = $res->fetch_assoc()) {
      $_sid = $row['student_ID'];
      $_year = $row['exam_year'];
      $_bangla = $row['bangla_mark'];
      $_eng = $row['english_mark'];
      $_math = $row['math_mark'];
    }
  }else{
    header('location:all-data.php');
  }




 ?>
    <div class="container">
      <h1 class="border-bottom py-2 mb-4">Edit Data</h1>
      <div class="row">
        <div class="col">
          <?php if (!empty($msg)) { ?>
          <div class="alert alert-success"><?php echo $msg; ?></div>
          <?php } ?>
          <?php if (!empty($err)) { ?>
          <div class="alert alert-danger"><?php echo $err; ?></div>
          <?php } ?>
          <!-- custom code here -->
          <form method="post">
            <div class="mb-3">
              <label for="stdid" class="form-label">Student ID</label>
              <input type="number" name="stdid" class="form-control" id="stdid" value="<?=$_sid?>">
            </div>
            <div class="mb-3">
              <label for="stdid" class="form-label">Exam Year</label>
              <select name="examyear" class="form-select" aria-label="year select">
                <option selected>Please Select year</option>
                <option value="<?=date('Y')-3?>" <?=(date('Y')-3)==$_year?'selected':''?>>
                  <?=date('Y')-3?>
                </option>
                <option value="<?=date('Y')-2?>" <?=(date('Y')-2)==$_year?'selected':''?>>
                  <?=date('Y')-2?>
                </option>
                <option value="<?=date('Y')-1?>" <?=date('Y')-1==$_year?'selected':''?>>
                  <?=date('Y')-1?>
                </option>
                <option value="<?=date('Y')?>"> <?=date('Y')==$_year?'selected':''?>
                 <?=date('Y')?>
                </option>
                <option value="<?=date('Y')+1?>" <?=date('Y')+1==$_year?'selected':''?>>
                  <?=date('Y')+1?>
                </option>
                <option value="<?=date('Y')+2?>" <?=date('Y')+2==$_year?'selected':''?>>
                  <?=date('Y')+2?>
                </option>
                <option value="<?=date('Y')+3?>" <?=date('Y')+3==$_year?'selected':''?>>
                  <?=date('Y')+3?>
                </option>
                <option value="<?=date('Y')+3?>" <?=date('Y')+4==$_year?'selected':''?>>
                  <?=date('Y')+3?>
                </option>
              </select>
            </div>
            <div class="mb-3">
              <label for="stdid" class="form-label">Bangla Mark</label>
              <input type="number" name="banglamark" min="0" max="100" class="form-control" id="stdid" value="<?=$_bangla?>">
            </div>
            <div class="mb-3">
              <label for="stdid" class="form-label">English Mark</label>
              <input type="number" name="engmark" min="0" max="100" class="form-control" id="stdid"  value="<?=$_eng?>">
            </div>
            <div class="mb-3">
              <label for="stdid" class="form-label">Math Mark</label>
              <input type="number" name="mathmark" min="0" max="100" class="form-control" id="stdid"  value="<?=$_math?>">
            </div>
            
           
            <button type="submit" name="editbtn" class="btn btn-primary px-4">Update Data</button>
          </form>
        </div>
      </div>
    </div>
<?php require_once('footer.php') ?>