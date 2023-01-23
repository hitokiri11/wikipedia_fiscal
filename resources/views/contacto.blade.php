@extends('template.main')
@section('content')
@push('css-plugins')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
@endpush
<section class="page-section"  id="contacto">
    <div class="col-md-12 col-lg-12 mb- mb-md-0">

        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="assets/img/contactos/images.jpg" class="sliderImg" alt="...">
              </div>
              <div class="carousel-item">
                <img src="assets/img/contactos/images2.png" class="sliderImg" alt="...">
              </div>
              <div class="carousel-item">
                <img src="assets/img/contactos/images3.png" class="sliderImg" alt="...">
              </div>
            </div>
          </div>


    </div>
</section>
@push('script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@endpush
@endsection
