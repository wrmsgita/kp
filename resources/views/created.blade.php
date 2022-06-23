@extends('layouts.main')

@section('content')
<!-- Section: Team v.1 -->
<section class="team-section text-center my-5">

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold my-5 animated fadeInDown">Tim kami yang luar biasa</h2>
  <!-- Section description -->
  <p class="grey-text w-responsive mx-auto mb-5 animated fadeInDown">“Tim yang bagus bukanlah tim yang memiliki
    kemampuan yang sejenis, namun tim yang saling melengkapi.” – Jaya Setiabudi.</p>

  <!-- Grid row -->
  <div class="row d-flex justify-content-center">

    <!-- Grid column -->
    <div class="col-lg-3 col-md-6 mb-lg-0 mb-5 animated fadeInRight delay-1s">
      <div class="avatar mx-auto">
        <img src="{{asset('img/baihakifoto.png')}}" class="rounded-circle z-depth-1" alt="Sample avatar">
      </div>

      <h5 class="font-weight-bold mt-4 mb-3">Baihaki Al Biruni</h5>
      <p class="text-uppercase blue-text"><strong>Frontend and Backend Developer</strong></p>
      <p class="grey-text"> “Passwords are like underwear: you don’t let people see it, you should change it very often,
        and you shouldn’t share it with strangers.” ~ Chris Pirillo ~</p>
      <ul class="list-unstyled mb-0">
        <!-- Facebook -->
        <a href="https://www.facebook.com/RozoerGaming" class="p-2 fa-lg fb-ic">
          <i class="fab fa-facebook-f blue-text"> </i>
        </a>
        <!-- Twitter -->
        <a href="https://twitter.com/AlbiruniBaihaki" class="p-2 fa-lg tw-ic">
          <i class="fab fa-twitter blue-text"> </i>
        </a>
        <!-- Instagram -->
        <a href="https://www.instagram.com/baihaki.ab/?hl=id" class="p-2 fa-lg ins-ic">
          <i class="fab fa-instagram blue-text"> </i>
        </a>
      </ul>
    </div>
    <!-- Grid column -->
  </div>
  <!-- Grid row -->

</section>
<!-- Section: Team v.1 -->
@endsection