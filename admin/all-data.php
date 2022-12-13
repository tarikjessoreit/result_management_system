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
            <tr>
                <td>220965</td>
                <td>2017</td>
                <td>66</td>
                <td>75</td>
                <td>80</td>
                <td>
                  <a href="edit.php" class="btn btn-sm btn-primary">&#9998;</a>
                  <a href="#" class="btn btn-sm btn-danger">&#128465;</a>
                </td>
            </tr>
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