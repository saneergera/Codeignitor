<?php require('assets/header.php') ?>


  <div class="container">


    <form class="form-horizontal">
      <fieldset>

        <div class="form-group">
          <label for="inputposition" class="col-lg-2 control-label">Position</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" id="inputposition" placeholder="Position" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputcompany" class="col-lg-2 control-label">Company</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" id="inputcompany" value= '<?php echo $encoded['name']; ?>'  disabled>
          </div>
        </div>
        <div class="form-group">
          <label for="inputsalary" class="col-lg-2 control-label">Salary</label>
          <div class="col-lg-10">
            <input type="number" class="form-control" id="inputsalary" placeholder="Salary" step="0.01" reuired>
          </div>
        </div>
        <div class="form-group">
          <label for="textArea" class="col-lg-2 control-label">Description</label>
          <div class="col-lg-10">
            <textarea class="form-control" rows="3" id="textArea" required></textarea>
            <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </fieldset>
    </form>

  </div>


<?php require('assets/footer.php') ?>
