<?php require_once('header.php') ?>
    <div class="container">
      <h1 class="border-bottom py-2 mb-4">Add Data</h1>
      <div class="row">
        <div class="col">
          <!-- custom code here -->
          <form>
            <div class="mb-3">
              <label for="stdid" class="form-label">Student ID</label>
              <input type="number" name="stdid" class="form-control" id="stdid">
            </div>
            <div class="mb-3">
              <label for="stdid" class="form-label">Exam Year</label>
              <select name="examyear" class="form-select" aria-label="yaer select">
                <option selected>Please Select year</option>
                <option value="<?=date('Y')-3?>"><?=date('Y')-4?></option>
                <option value="<?=date('Y')-3?>"><?=date('Y')-3?></option>
                <option value="<?=date('Y')-2?>"><?=date('Y')-2?></option>
                <option value="<?=date('Y')-1?>"><?=date('Y')-1?></option>
                <option value="<?=date('Y')?>" selected><?=date('Y')?></option>
                <option value="<?=date('Y')+1?>"><?=date('Y')+1?></option>
                <option value="<?=date('Y')+2?>"><?=date('Y')+2?></option>
                <option value="<?=date('Y')+3?>"><?=date('Y')+3?></option>
                <option value="<?=date('Y')+3?>"><?=date('Y')+4?></option>
              </select>
            </div>
            <div class="mb-3">
              <label for="stdid" class="form-label">Bangla Mark</label>
              <input type="number" name="banglamark" min="0" max="100" class="form-control" id="stdid">
            </div>
            <div class="mb-3">
              <label for="stdid" class="form-label">English Mark</label>
              <input type="number" name="engmark" min="0" max="100" class="form-control" id="stdid">
            </div>
            <div class="mb-3">
              <label for="stdid" class="form-label">Math Mark</label>
              <input type="number" name="mathmark" min="0" max="100" class="form-control" id="stdid">
            </div>
            
           
            <button type="submit" name="" class="btn btn-primary px-4">Add Data</button>
          </form>
        </div>
      </div>
    </div>
<?php require_once('footer.php') ?>