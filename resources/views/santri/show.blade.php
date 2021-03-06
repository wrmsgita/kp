@extends('layouts.main')

@php
$nama=\App\Asal::where('id',$santri ->asal_id)->first();
$nama2=\App\Kategori::where('id',$santri ->kategori_id)->first();
@endphp

@section('content')
<!-- Material form subscription -->
<div class="row  animated fadeInRight">
  <div class="col-md-12"><a href="{{url('santri')}}"
      class="btn btn-outline-danger btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Kembali</a></div>
</div>

<div class="row">
  <div class="col-md-6  animated fadeInUp">
    <div class="card">

      <h5 class="card-header danger-color-dark white-text text-center py-4">
        <strong>Detail santri</strong>
      </h5>

      <!--Card content-->
      <div class="card-body px-lg-5">

        <!-- Form -->
        <!-- Name -->
        <div class="md-form">
          <input type="text" name="id" id="materialSubscriptionFormPasswords" class="form-control"
            value="{{$santri ->id}}" disabled value="id">
          <label for="materialSubscriptionFormPasswords">Id</label>
        </div>
        <div class="md-form">
          <input type="text" value="{{$santri ->nokk}}" disabled name="nip" id="materialSubscriptionFormEmail"
            class="form-control">
          <label for="materialSubscriptionFormEmail">NIK</label>
        </div>
        <div class="md-form">
          <input type="text" value="{{$santri ->nama}}" disabled name="nama" id="materialSubscriptionFormEmail"
            class="form-control">
          <label for="materialSubscriptionFormEmail">Nama</label>
        </div>

        <div class="md-form">
          <input type="text" value="{{$santri ->tmp_lahir}}" disabled name="tempat" id="materialSubscriptionFormEmail"
            class="form-control">
          <label for="materialSubscriptionFormEmail">Tempat Lahir</label>
        </div>
        <div class="md-form">
          <input placeholder="Plih Tanggal" value="{{$santri ->tgl_lahir}}" disabled name="tanggal" type="date"
            id="date-picker-example" class="form-control datepicker">
        </div>
        <div class="md-form">
          <input type="text" value="{{$nama ->nama}}" disabled name="tempat" id="materialSubscriptionFormEmail"
            class="form-control">
          <label for="materialSubscriptionFormEmail">Asal</label>
        </div>
        <div class="md-form">
          <input type="text" value="{{$nama2 ->nama}}" disabled name="tempat" id="materialSubscriptionFormEmail"
            class="form-control">
          <label for="materialSubscriptionFormEmail">Kategori</label>
        </div>
        <div class="md-form">
          <textarea name="alamat" id="form7" disabled class="md-textarea form-control"
            rows="3">{{$santri ->alamat}}</textarea>
          <label for="form7">Alamat</label>
        </div>
        <div class="md-form">
          <input type="text" value="{{$santri ->hp}}" disabled name="hp" id="materialSubscriptionFormEmail"
            class="form-control">
          <label for="materialSubscriptionFormEmail">Hp</label>
        </div>
        <div class="md-form">
          <input type="text" value="{{$santri ->email}}" disabled name="email" id="materialSubscriptionFormEmail"
            class="form-control">
          <label for="materialSubscriptionFormEmail">Email</label>
        </div>
        <!-- Form -->

      </div>

    </div>
  </div>
  <div class="col-md-6  animated fadeInRight">
    <div class="card">

      <h5 class="card-header danger-color-dark white-text text-center py-4">
        <strong>Foto santri</strong>
      </h5>

      <!--Card content-->
      <div class="card-body px-lg-5">

        <!-- Form -->
        <div class="md-form">
          @if (!empty($santri ->foto))
          <img src="{{asset('img')}}/{{$santri ->foto}}" class="img-fluid img-thumbnail z-depth-2"
            alt="Responsive image" width="500px" height="500px">

          @else
          <img src="{{asset('img/image_placeholder.jpg')}}" class="img-fluid img-thumbnail z-depth-2"
            alt="Responsive image" width="500px" height="500px">

          @endif
        </div>



        </form>
        <!-- Form -->

      </div>

    </div>
  </div>
</div>
<!-- Material form subscription -->
@endsection