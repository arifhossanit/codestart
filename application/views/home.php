<?php
       $this->load->view('header');
       $this->load->view('menu');
       $this->load->view('leftbar');
?>

    <div class="col-sm-8 text-left"> 
      <h1><?php echo $title; ?></h1>
      <p><?php echo $content; ?></p>
      <table class="table table-bordered">
             <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
              </tr>
             <?php 
             
             foreach ($students as $student) {
                    echo "<tr>";
                    echo "<td>$student->name</td>";
                    echo "<td>$student->email</td>";
                    echo "<td>$student->phone</td>";
                    echo "</tr>";
             } 
             ?>
       </table>
      <hr>
      <h3>Test</h3>
      <p>Lorem ipsum...</p>
    </div>
<?php
       //$this->load->view('body', $data);
       $this->load->view('rightbar');
       $this->load->view('footer');
?>


  





