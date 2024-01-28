@extends('base')

@section('content')
  <div class="bg-light p-5 mb-5 text-center">
    <div class="container">
      <h1>Agence FranceVLC</h1>
      <p>L'agence immobilière qui aide les français à acheter ou louer sur Valencia, Espagne.</p>
    </div>
  </div>

  <div class="container">
    <h2>Nos derniers biens</h2>
    <div class="row">
      @foreach ($properties as $property)
        <div class="col">
          @include('property.card')
        </div>
      @endforeach
    </div>
  </div>

@endsection