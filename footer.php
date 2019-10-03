 
<!-- FOOTER -->
<footer>
  <div class="jumbotron" id="footer">
    <div class="container-fluid">
      <div class="row">
        <div class="col-10">
          <img src="images/dhamilight.png "   width="150px" class="card--top logo" alt="">
        </div>
         <div class="col-2">
           <div class="row">
             <div class="col-6">
             <a href="https://www.facebook.com/DhamiSportsManagement/"> <i class="fab fa-facebook fa-2x" style="color:#01a3fe "></i></a>
             </div>
             <div class="col-6">
             <a href="https://www.instagram.com/dhamisports/">  <i class="fab fa-instagram fa-2x" style="color:#01a3fe "></i></a>
             </div>
           </div>
         
         </div>
      </div>
    </div>
    <br>
    <hr class="">
    <div class="container " id="links">
        <ul class="nav justify-content-center">
        <li class="nav-item">
    <a class="nav-link " href="index.php">HOME</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="about.php">ABOUT</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="packages.php">PACKAGES</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="gallery.php">GALLERY</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="events.php">EVENTS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="school.php">SCHOOL</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="contact.php">CONTACT</a>
  </li>
  
</ul>
    </div>
    <hr>
    <div class="container-fluid" id="address">
      <div class="card-deck">
     
      
       

        <div class="card">
          <div class="row">
            <div class="col-2">
              <i class="fas fa-phone fa-2x" style="color:#01a3fe "></i>
            </div>
            <div class="col-10"> <h4 style="font-size: 18px;" >PHONE NUMBER</h4>
          <p>+91 9131959638</p></div>
          </div>
        </div>

        <div class="card">
          <div class="row">
            <div class="col-2">
            <i class="fab fa-whatsapp fa-2x" style="color:#01a3fe "></i>
            </div>
            <div class="col-10"> <h4 style="font-size: 18px;">WHATSAPP</h4>
          <p>+7 7014886778</p></div>
          </div>
        </div>


        <div class="card">
          <h4 style="font-size: 18px;">INDIA, GWALIOR</h4>
          <p>67- Yamuna Nagar, Gwalior, MP, India - 474011</p>
        </div>
      </div>
    </div>


  </div>
</footer>
      <div class="footer-2"> 
  
  <p>Copyrights 2019 Dhamisports, Inc. All rights reserved [ <?php include 'counter.php'; ?> ]</p>

</div>


 
 <!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="lightboxController.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 <script src="scripts/videopopup.js"></script>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
        <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
 <script>
     $(document).ready(function() {
         $(window).scroll(function() { // check if scroll event happened
             if ($(document).scrollTop() > 50) { // check if user scrolled more than 50 from top of the browser window
                 $('.navbar .navbar-brand img').attr('src', 'images/dhamidark.png');
                 $(".navbar .nav-link").css("color", " #040E20");
                 $(".navbar").css("background", " white");


             } else {
                 $('.navbar .navbar-brand img').attr('src', 'images/dhamilight.png');

                 $(".navbar .nav-link").css("color", " #8C8C8C");
                 $(".navbar").css("background", " #040E20");
             }
         });
     });
 </script>
 <script>
     $('.bloxPopup').lightboxController();
 </script>
 


  
 </body>

 </html>

 <!--   <div class="dropdown-menu">
    <p class="dropdown-item fil-cat active"  data-rel="all" href="#"  data-rel="all">All</p>
    <p class="dropdown-item fil-cat" href="#"  data-rel="jan">January</p>
    <p class="dropdown-item fil-cat" href="#"  data-rel="feb">Febuary<p>
    <p class="dropdown-item fil-cat" href="#"  data-rel="mar">March</p>
    <p class="dropdown-item fil-cat" href="#"  data-rel="apr">April</p>
    <p class="dropdown-item fil-cat" href="#"  data-rel="may">May</p>
    <p class="dropdown-item fil-cat" href="#"  data-rel="jun">June</p>
    <p class="dropdown-item fil-cat" href="#"  data-rel="jul">July</p>
    <p class="dropdown-item fil-cat" href="#"  data-rel="aug">August</p>
    <p class="dropdown-item fil-cat" href="#"  data-rel="sep">September</p>
    <p class="dropdown-item fil-cat" href="#"  data-rel="oct">October</p>
    <p class="dropdown-item fil-cat" href="#"  data-rel="nov">November</p>
    <p class="dropdown-item fil-cat" href="#"  data-rel="dec">December</p>
  </div>
 -->