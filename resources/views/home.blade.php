@extends('layouts.main')

@section('container')
<div class="hero min-h-screen bg-base-200 sm:px-10 px-4">
  <div class="hero-content flex-col lg:flex-row-reverse px-0">
    <img src="{{ asset("img/readiverse-logo-square.png") }}" class="max-w-sm rounded-lg shadow-2xl w-full hidden lg:flex" />
    <div>
      <h1 class="text-5xl font-bold">Readiverse</h1>
      <p class="py-6">Readiverse is a library management website where you can browse, borrow, and explore knowledge stored in a universe full of knowledge.</p>
      <a href="{{ route("book.index") }}" class="btn btn-primary">Get Started</a>
    </div>
  </div>
</div>
@endsection
