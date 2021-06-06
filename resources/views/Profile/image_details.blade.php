@extends('Profile.layouts.master')

@section('content')
<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <!-- <header></header> --><!-- End Header -->

  <main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Portfoio Details</h2>
      <ol>
        <li><a href="index.html">Home</a></li>
        <li>Portfoio Details</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
  <div class="container">

    <div class="portfolio-details-container">

      <div class="owl-carousel portfolio-details-carousel">
        <img src="assets/img/portfolio-details-1.jpg" class="img-fluid" alt="">
        <img src="assets/img/portfolio-details-2.jpg" class="img-fluid" alt="">
        <img src="assets/img/portfolio-details-3.jpg" class="img-fluid" alt="">
      </div>

      <div class="portfolio-info">
        <h3>Project information</h3>
        <ul>
          <li><strong>Category</strong>: Web design</li>
          <li><strong>Client</strong>: ASU Company</li>
          <li><strong>Project date</strong>: 01 March, 2020</li>
          <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
        </ul>
      </div>

    </div>

    <div class="portfolio-description">
      <h2>This is an example of portfolio detail</h2>
      <p>
        Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
      </p>
    </div>

  </div>
</section><!-- End Portfolio Details Section -->

</main><!-- End #main -->


  <!-- ======= Footer ======= -->
 <!--  <footer ></footer> --><!-- End  Footer -->

</body>
@stop