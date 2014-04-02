<div class="container">      
  <?php echo form_open('login/validation', array('class' => 'form-signin')); ?>

    <div class="col-sm-20">
    
      <?php if($this->session->flashdata('error')): ?>
        <div class="col-sm-35">
          <div class="alert alert-danger">
            <strong><?php echo $this->session->flashdata('header'); ?></strong><br>
            <?php echo $this->session->flashdata('error'); ?>
          </div>
        </div>
      <?php endif; ?>

      <?php if($this->session->flashdata('info')): ?>
        <div class="col-sm-35">
          <div class="alert alert-warning">
            <strong><?php echo $this->session->flashdata('header'); ?></strong><br>
            <?php echo $this->session->flashdata('info'); ?>
          </div>
        </div>
      <?php endif; ?>

      <div class="panel panel-primary panel-shadow">
        <div class="panel-heading">
          <h3 class="panel-title">Masuk Sistem Informasi</h3>
        </div>

        <div class="panel-body">
            <input type="text" name="user_id" class="form-control" placeholder="Masukan User ID" autofocus autocomplete="off">
            <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="off">
            <input type="submit" class="btn btn-lg btn-primary btn-block" value="Login">
          </form>
        </div>
      </div>
    </div>
  <?php echo form_close(); ?>
</div>