@extends('layouts.main')

@section('container')
<div class="hero min-h-screen bg-base-200">
  <div class="hero-content flex-col lg:flex-row-reverse">
    <img src="{{ asset("img/readiverse-logo-square.png") }}" class="max-w-sm rounded-lg shadow-2xl" />
    <div>
      <h1 class="text-5xl font-bold">Readiverse</h1>
      <p class="py-6">Readiverse is a library management website where you can browse, borrow, and explore knowledge stored in a universe full of knowledge.</p>
      <button class="btn btn-primary">Get Started</button>
    </div>
  </div>
</div>
@endsection
