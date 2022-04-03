
<?php
       $this->load->view('header');
       $this->load->view('menu');
       $this->load->view('leftbar');
?>
<div class="col-sm-8 text-left">
    <h1><?php echo $about; ?></h1>
</div>
<?php
       //$this->load->view('body', $data);
       $this->load->view('rightbar');
       $this->load->view('footer');
?>
