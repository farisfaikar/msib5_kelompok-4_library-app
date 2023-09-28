@extends('layouts.main')

@section('container')

  <section id="header">
    <div class="w-full h-52 mt-10">
      <h1 class="text-[3.5rem] font-extrabold font-sans text-center">Welcome to <mark class="px-3 bg-blue-600 rounded text-slate-50 ">Readverse</mark></h1>
      <div class="hero mt-4">
        <div class="hero-content flex-col lg:flex-row-reverse">
          <img src="{{url('img/novel.jpg')}}" class="w-44 rounded-lg shadow-2xl lg:mr-20 hover:animate-shake hover:cursor-pointer" />
          <div class="lg:ml-20">
            <h1 class="text-5xl font-bold">Buy This Novel Right Now!</h1>
            <p class="py-6">Love from A to Z is a great book on 2022.</p>
            <button class="btn btn-primary inline-flex ">Buy Now</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="content">
    <div class="py-8 px-4 mx-auto mt-[35rem] lg:mt-44 max-w-screen-xl lg:py-16">
        <div class="border border-gray-200 rounded-lg p-8 md:p-12 mb-8">
            <a href="#" class="text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md">
                <svg class="w-2.5 h-2.5 mr-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                    <path d="M11 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm8.585 1.189a.994.994 0 0 0-.9-.138l-2.965.983a1 1 0 0 0-.685.949v8a1 1 0 0 0 .675.946l2.965 1.02a1.013 1.013 0 0 0 1.032-.242A1 1 0 0 0 20 12V2a1 1 0 0 0-.415-.811Z"/>
                </svg>
                Book
            </a>
            <h1 class="text-3xl md:text-5xl font-extrabold mb-2">Read Another Book</h1>
            <p class="text-lg font-normal text-gray-500 mb-6">U can see a categories book</p>
            <a href="#" class="inline-flex justify-center items-center py-2.5 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300">
                Read more
                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
    </div>
  </section>

@endsection
