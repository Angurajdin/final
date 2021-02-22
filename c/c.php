<?php
require_once "head-side.php";
require_once "../db/db_connect.php";

error_reporting(0);
$q = mysqli_query($connect,"select * from c_lang where id='25'");

while($n=  mysqli_fetch_array($q)){

?>

<h1>  <?php echo $n['indextopic']; ?>  </h1>


<div class="row">
    <div class="col">
      <button type="button" class="btn btn-success"><i class="fas fa-caret-left"></i>&emsp;Pervious</button>
    </div>
    <div class="col">
      <button type="button" style="float: right;" class="btn btn-success">Next&emsp;<i class="fas fa-caret-right"></i></button>
    </div>
</div>


<br><br>


<div class="row lead">
    <div class="col">
    </div>
    <div class="col-11">
      <p>  <?php echo $n['content']; ?>  </p>
    


    <?php if($n['syntax']) { ?>
      <div class="alert border border-dark rounded" style="background-color:#F1F1F1;" role="alert">
        <h4 class="alert-heading">Syntax</h4>
        <hr>
        <div id="copysyn1"> <?php echo $n['syntax']; ?> </div>
      </div>
    <?php } ?>


    <?php if($n['syntaxdef']) { ?>
      <div> <?php echo $n['syntaxdef']; ?> </div>
    <?php } ?>


    <br>
    


    <?php if($n['syntax2']) { ?>
      <div class="alert border border-dark rounded" style="background-color:#F1F1F1;" role="alert">
        <h4 class="alert-heading">Syntax</h4>
        <hr>
        <div id="copysyn2"> <?php echo $n['syntax2']; ?> </div>
      </div>
    <?php } ?>


    <?php if($n['syntaxdef2']) { ?>
      <div> <?php echo $n['syntaxdef2']; ?> </div>
    <?php } ?>


    <br>
    


    <?php if($n['example']) { ?>
      <div class="alert border border-dark rounded" style="background-color:#F1F1F1;" role="alert">
      
        <div class="row">
          <div class="col">
            <h4 class="alert-heading">Example</h4>
          </div>
          <div class="col">
            <button class="btn" id="copyexample1" style="float:right;background-color:#616161;color:white;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard" viewBox="0 0 16 16">
              <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"></path>
              <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"></path>
            </svg> 
            &nbsp;Copy</button>
          </div>
      </div>
        <hr>
        <div id="copyeg1"> <?php echo $n['example']; ?> </div>
      </div>
    <?php } ?>


    <?php if($n['exampledef']) { ?>
      <div> <?php echo $n['exampledef']; ?> </div>
    <?php } ?>


    <br>


    <?php if($n['example2']) { ?>
      <div class="alert border border-dark rounded" style="background-color:#F1F1F1;" role="alert">
      
        <div class="row">
          <div class="col">
            <h4 class="alert-heading">Example</h4>
          </div>
          <div class="col">
            <button class="btn" id="copyexample2" style="float:right;background-color:#616161;color:white;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard" viewBox="0 0 16 16">
              <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"></path>
              <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"></path>
            </svg> 
            &nbsp;Copy</button>
          </div>
      </div>
        <hr>
        <div id="copyeg2"> <?php echo $n['example2']; ?> </div>
      </div>
    <?php } ?>


    <?php if($n['exampledef2']) { ?>
      <div> <?php echo $n['exampledef2']; ?> </div>
    <?php } ?>


    <br>










</div>
    <div class="col">
    </div>
</div>
<!-- Close of div 11 and empty div aah -->


<br><br>


<div class="row">
    <div class="col">
      <button type="button" class="btn btn-success"><i class="fas fa-caret-left"></i>&emsp;Pervious</button>
    </div>
    <div class="col">
      <button type="button" style="float: right;" class="btn btn-success">Next&emsp;<i class="fas fa-caret-right"></i></button>
    </div>
</div>



<?php
} //while end

require_once "bottom-end.php";
?>
