<?php require_once('header.php') ?>
    <div class="container">
      <h1 class="border-bottom py-2 mb-4">All Data</h1>
      <div class="row">
        <div class="col">
          <!-- datatable -->

          <table id="alldata" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Student ID</th>
                <th>Exam Year</th>
                <th>Bangla</th>
                <th>English</th>
                <th>Math</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            $sql = "SELECT * FROM ".RESULTTBL;
            $res = $con->query($sql);
            while ($row = $res->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $row["student_ID"];?></td>
                <td><?php echo $row["exam_year"];?></td>
                <td><?php echo $row["bangla_mark"];?></td>
                <td><?php echo $row["english_mark"];?></td>
                <td><?php echo $row["math_mark"];?></td>
                <td>
                  <a href="edit.php?rid=<?php echo $row["ID"];?>" class="btn btn-sm btn-primary">&#9998;</a>
                  <a href="#" class="btn btn-sm btn-danger">&#128465;</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Student ID</th>
                <th>Exam Year</th>
                <th>Bangla</th>
                <th>English</th>
                <th>Math</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
        </div>
      </div>
    </div>
<?php require_once('footer.php') ?>