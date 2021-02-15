@extends('layout')

@section('title', 'Blog')

@section('container')

   <!-- Page Content -->
   <div class="container mt-3">
    <div class="row">
      <div class="col-md-12">

        <!-- First Blog Post -->
        <h2 class="post-title">
          <a href="#">Big Data</a>
        </h2>
        <p class="lead">
          by Dabas
        </p>
        <p><span class="glyphicon glyphicon-time"></span> Posted on February 14, 2021 at 10:00 PM</p>
        <p>Big data adalah salah satu cabang teknologi terkait pengumpulan data yang memiliki kapasitas besar, rumit, dan tidak berstruktur. Teknologi ini dianggap sebagai aset dunia paling berharga dengan kontribusinya dalam mengembangkan zaman modernisasi.</p>
        {{-- <a class="btn btn-default" href="#">Read More</a> --}}
        <hr>

        <!-- Second Blog Post -->
        <h2 class="post-title">
          <a href="#">5G Technology</a>
        </h2>
        <p class="lead">
          by Niel
        </p>
        <p><span class="glyphicon glyphicon-time"></span> Posted on February 14, 2021 at 10:45 PM</p>
        <p>5G atau Generasi kelima merupakan istilah yang digunakan untuk cabang teknologi telekomunikasi seluler. Teknologi ini diciptakan sebagai fase standar selanjutnya dari 4G. Meski masih dalam proses perencanaan dan pembentukan, salah satu perusahaan di bidang smartphone yaitu Huawei telah mengumumkan bahwa akan dipasarkannya produk dengan teknologi 5G.</p>
        {{-- <a class="btn btn-default" href="#">Read More</a> --}}
        <hr>

        <!-- Third Blog Post -->
        <h2 class="post-title">
          <a href="#">Cognitive Cloud Computing</a>
        </h2>
        <p class="lead">
          by Lek
        </p>
        <p><span class="glyphicon glyphicon-time"></span> Posted on February 14, 2021 at 11:00 PM</p>
        <p>Cognitive Cloud Computing muncul untuk memfasilitasi kelincahan dan fleksibilitas sebuah perusahaan baru yang disebut startup. Startup akan mencuri pangsa pasar raksasa bisnis yang menerapkan sistem kuno. Model bisnis berbasis aplikasi yang membuat startup dapat memaksimalkan data mereka.</p>
        {{-- <a class="btn btn-default" href="#">Read More</a> --}}
        <hr>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright &copy 2021</p>
        </div>
      </div>
    </div>
  </footer>


@endsection

