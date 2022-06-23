@extends('layouts.main')

@section('content')
<!-- Section: Contact v.1 -->
<section class="my-5">
  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold text-center my-5">Contact us</h2>
  <!-- Section description -->
  <p class="text-center w-responsive mx-auto pb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam
    eum porro a pariatur veniam.</p>

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-12">

      <!--Google map-->
      <div id="map-container-section" class="z-depth-1-half map-container-section mb-4">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.227281061638!2d102.26627091428959!3d-3.760641044389193!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e36b1c2e3ed7a67%3A0x4f695ff954b41126!2sDekanat%20Fakultas%20Hukum%20Universitas%20Bengkulu!5e0!3m2!1sid!2sid!4v1655978306248!5m2!1sid!2sid"
          width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <!-- Buttons-->
      <div class="row text-center">
        <div class="col-md-4">
          <a class="btn-floating red accent-1">
            <i class="fas fa-map-marker-alt"></i>
          </a>
          <p>Setu Indah, 16451</p>
          <p class="mb-md-0">Depok</p>
        </div>
        <div class="col-md-4">
          <a class="btn-floating red accent-1">
            <i class="fas fa-phone"></i>
          </a>
          <p>786 3191</p>
          <p class="mb-md-0">Mon - Fri, 8:00-22:00</p>
        </div>
        <div class="col-md-4">
          <a class="btn-floating red accent-1">
            <i class="fas fa-envelope"></i>
          </a>
          <p>info@nurulfikri.ac.id</p>
          <p class="mb-0">nurulfikri@gmail.com</p>
        </div>
      </div>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</section>
<!-- Section: Contact v.1 -->
@endsection