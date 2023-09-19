<?php include('header.php'); ?>
<main>
  <section class="hero pt-4">
    <div class="container  position-relative">
      <div class="row">

        <div class="hero-text py-3 d-flex">
          <h3 class="me-auto fs-2 fw-bolder">Contact Us</h3>
          <nav style="--bs-breadcrumb-divider:'>>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item p-2"><img src="images/home.svg" alt="" class="pb-1 me-1">Home</li>
              <li class="breadcrumb-item p-2">Contact Us</li>
            </ol>
          </nav>
        </div>

      </div>
    </div>
  </section>
  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <img src="images/contact-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </section>

  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="images/contact/map-pin.svg" alt="">
          <h4 class="py-3 fw-bolder">ADDRESS</h4>
          <p class="text-secondary">No.594/A, Pan Ta Pwint Taung Street, Aout Wa Net <br>
            Chaung, Hmawbi Township, Yangon, Myanmar.</p>

          <img src="images/contact/headphones.svg" alt="">
          <h4 class="py-3 fw-bolder">PHONE</h4>
          <p class="text-secondary">09 5502921, 09 421041237, 09 420235303, 09 686223834</p>

          <img src="images/contact/Vector (1).svg" alt="">
          <h4 class="py-3 fw-bolder">MAIL</h4>
          <p class="text-secondary">khinmaungmnt@gmail.com</p>
        </div>


        <div class="col-md-6 pt-3">
          <h4 class="fw-bolder">SEND YOUR MESSAGE</h4>
          <div class="row">
            <div class="col">
              <label for="name" class="py-3">Name</label>
              <input type="text" class="form-control" placeholder="Enter Your Name*" aria-label="Enter Your Name*">
            </div>
            <div class="col">
              <label for="phone" class="py-3">Phone</label>
              <input type="text" class="form-control" placeholder="Enter Your Number*">
            </div>
          </div>

          <label for="phone" class="py-3">Email</label>
          <input type="text" class="form-control" placeholder="Enter Your Email*" aria-label="Enter Your Email*">


          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label py-3">How can we help? </label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Tell us a little bit about the plan*"></textarea>
          </div>
          <div class="d-grid">
            <button class="btn btn-info text-white">Send Message</button>
          </div>
        </div>


      </div>
    </div>
  </section>

  <div class="py-5">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1011.4423376646266!2d96.1727227200858!3d16.841340658072987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c193e9d0684b05%3A0xece21b39ffb9db03!2sSOUEAST%20Car%20Showroom!5e0!3m2!1sen!2smm!4v1694889060229!5m2!1sen!2smm" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>




</main>
<?php include('footer.php') ?>