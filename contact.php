<?php  include 'header.php'; ?>

<div class="jumbotron about" id="about">
    <div class="container">
        <h1 class="display-1 text-left h4" style="color: white;
  font-family: bwb;
  font-size: 50px;">Contact Us</h1>
    </div>
   </div> 

<div class="jumbotron" id="contact">
    <div class="container" style="backgroud-color: ">
    <form id="contact-form" action="#" name="form" method="post" >
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Your Name</label>
    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Your Name">
  </div>


  <div class="form-group">
    <label for="exampleFormControlInput1">Phone Number</label>
    <input type="text" name="phone" class="form-control" id="exampleFormControlInput1" placeholder="Phone Number">
  </div>


  <div class="form-group">
    <label for="exampleFormControlInput1">Subject</label>
    <input type="text" name="subject" class="form-control" id="exampleFormControlInput1" placeholder="Subject">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Message</label>
    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <button class="btn btn-primary" name="send" type="submit">Submit</button>
  <p><?php include 'contact_mail.php';  ?></p>
</form>

    </div>

</div>



<?php  include 'footer.php'; ?>