<?php
include_once './template/menu.php';
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


<div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                ¿Como puedo vender Loteria?
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Accordion Item #2
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
        </div>
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
// include_once './template/footer.php';
?>