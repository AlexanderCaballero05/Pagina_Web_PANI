<?php
include_once './menu.php';
?>

<body>
    <style>
        ul.nav-pills {
 top: 60px;
 position: fixed;
 }




    </style>
 <section class="mt-5 mb-5 justify-content-center mx-auto">
<div class="container-fluid" style="border: solid 0.5px #030b0d;">
  <div class="row">
    <nav class="col-3 col-sm-2" id="verticalScrollspy">
      <ul class="nav flex-column nav-pills mt-5 mb-5 justify-content-center mx-auto">
        <li class="nav-item"><a class="nav-link active" href="#dogs">Dogs</a></li>
        <li class="nav-item"><a class="nav-link" href="#cats">Cats</a></li>
      
      </ul>
    </nav>
    <div class="col-9 col-sm-10">
      <div data-spy="scroll" data-target="#verticalScrollspy">
        <div id="dogs" class="container-fluid" style="margin-top:60px !important;">
          <h1>Dogs</h1>
          <p>Look at the navigation menu to see how it interacts with scrolling over this segment</p>
          <p>Look at the navigation menu to see how it interacts with scrolling over this segment</p>
          <p>Look at the navigation menu to see how it interacts with scrolling over this segment</p>
          <p>Look at the navigation menu to see how it interacts with scrolling over this segment</p>
          <p>Look at the navigation menu to see how it interacts with scrolling over this segment</p>
          <p>Look at the navigation menu to see how it interacts with scrolling over this segment</p>
          <p>Look at the navigation menu to see how it interacts with scrolling over this segment</p>
          <p>Look at the navigation menu to see how it interacts with scrolling over this segment</p>
          <p>Look at the navigation menu to see how it interacts with scrolling over this segment</p>
          <p>Look at the navigation menu to see how it interacts with scrolling over this segment</p>
          <p>Look at the navigation menu to see how it interacts with scrolling over this segment</p>
          <p>Look at the navigation menu to see how it interacts with scrolling over this segment</p>
          <p>Look at the navigation menu to see how it interacts with scrolling over this segment</p>
          <p>Look at the navigation menu to see how it interacts with scrolling over this segment</p>
        </div>
        <div id="cats" class="container-fluid">
          <h1>Cats</h1>
          <p>Look at the navigation menu to see how it interacts with scrolling over this segment</p>
          <p>Look at the navigation menu to see how it interacts with scrolling over this segment</p>
          <p>Look at the navigation menu to see how it interacts with scrolling over this segment</p>
          <p>Look at the navigation menu to see how it interacts with scrolling over this segment</p>
          <p>Look at the navigation menu to see how it interacts with scrolling over this segment</p>
          <p>Look at the navigation menu to see how it interacts with scrolling over this segment</p>
          <p>Look at the navigation menu to see how it interacts with scrolling over this segment</p>
          <p>Look at the navigation menu to see how it interacts with scrolling over this segment</p>
          <p>Look at the navigation menu to see how it interacts with scrolling over this segment</p>
          <p>Look at the navigation menu to see how it interacts with scrolling over this segment</p>
          <p>Look at the navigation menu to see how it interacts with scrolling over this segment</p>
          <p>Look at the navigation menu to see how it interacts with scrolling over this segment</p>
          <p>Look at the navigation menu to see how it interacts with scrolling over this segment</p>
          <p>Look at the navigation menu to see how it interacts with scrolling over this segment</p>
        </div>
       
      </div>
    </div>
  </div>
</div>
</section>
<script>
$(document).ready(function() {
  $('body').scrollspy({ target: '#verticalScrollspy' })
//   $('body').attr('data-spy', 'scroll');
//   $('body').attr('data-offset', '0');
//   $('body').attr('data-target', '#verticalScrollspy');
})


</script>
</body>

<?php
// include_once './footer.php';
?>