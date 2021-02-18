<?php
require_once "head-side.php";
require_once "../db/db_connect.php";

error_reporting(0);
$q = mysqli_query($connect,"select * from cpp_lang where id='19'");

while($n=  mysqli_fetch_array($q)){

?>


<h1>  <?php echo $n[1]; ?>  </h1>


<div class="row justify-content-between">
  <div class="col-2">
  <button type="button" class="btn btn-success"><i class="fas fa-caret-left"></i>&emsp;Pervious</button>
  </div>
  <div class="col-2">
  <button type="button" class="btn btn-success">Next&emsp;<i class="fas fa-caret-right"></i></button>
  </div>
</div>


<br><br>


<p>  <?php echo $n[2]; ?>  </p>


<!-- Pills navs -->
<ul class="nav nav-pills mb-3" id="ex1" role="tablist">
  <li class="nav-item" role="presentation">
    <a
      class="nav-link active"
      id="ex1-tab-1"
      data-mdb-toggle="pill"
      href="#ex1-pills-1"
      role="tab"
      aria-controls="ex1-pills-1"
      aria-selected="true"
      >Tab 1</a
    >
  </li>
  <li class="nav-item" role="presentation">
    <a
      class="nav-link"
      id="ex1-tab-2"
      data-mdb-toggle="pill"
      href="#ex1-pills-2"
      role="tab"
      aria-controls="ex1-pills-2"
      aria-selected="false"
      >Tab 2</a
    >
  </li>
  <li class="nav-item" role="presentation">
    <a
      class="nav-link"
      id="ex1-tab-3"
      data-mdb-toggle="pill"
      href="#ex1-pills-3"
      role="tab"
      aria-controls="ex1-pills-3"
      aria-selected="false"
      >Tab 3</a
    >
  </li>
</ul>
<!-- Pills navs -->

<!-- Pills content -->
<div class="tab-content" style="background-color: #BDBDBD;" id="ex1-content">
  <div
    class="tab-pane fade show active"
    id="ex1-pills-1"
    role="tabpanel"
    aria-labelledby="ex1-tab-1"
  >
    Tab 1 content
  </div>
  <div class="tab-pane fade" id="ex1-pills-2" role="tabpanel" aria-labelledby="ex1-tab-2">
    Tab 2 content
  </div>
  <div class="tab-pane fade" id="ex1-pills-3" role="tabpanel" aria-labelledby="ex1-tab-3">
    Tab 3 content
  </div>
</div>
<!-- Pills content -->


<?php
} //while end

require_once "bottom-end.php";
?>
