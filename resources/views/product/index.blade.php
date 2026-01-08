@extends('base')

@section('title', 'Our Products')

@section('content')

    @php
      $bg = "bg-orange-300 text-orange-900"; // https://tailwindcss.com/docs/detecting-classes-in-source-files#safelisting-classes
      $bg = "bg-violet-300 text-violet-900";
      $bg = "bg-cyan-300 text-cyan-900";
      $bg = "bg-sky-300 text-sky-900";
      $bg = "bg-lime-300 text-lime-900";
      $bg = "bg-teal-300 text-teal-900";
      $bg = "bg-purple-300 text-purple-900";
      $bg = "bg-fuchsia-300 text-fuchsia-900";
      $bg = "bg-pink-300 text-pink-900";
      $bg = "bg-yellow-300 text-yellow-900";
      $bg = "bg-rose-300 text-rose-900";
      $bg = "bg-indigo-300 text-indigo-900";
    @endphp

<x-alert :$bg class="underline" id="test">
    Some informations
</x-alert>
{{-- same as --}}
{{-- <x-alert :bg="$bg">Some informations</x-alert> --}}
{{-- <x-alert bg={{$bg}}>Some informations</x-alert> --}}


    <livewire:counter />
    @lifewire('counter')

    <x-meteo></x-meteo>

    @empty(!$products)
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 mt-10">
        @foreach ($products as $product )

        <div class="z-30 flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="{{ route('products.show', ['name'=>$product->name, 'product'=>$product->id]) }}">
                <img class="rounded-t-lg p-6" src="/docs/{{$product->image}}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$product->name}}</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$product->description}} ({{$product->category->name}})</p>
                <div class="flex justify-between">
                  <a href="{{ route('products.show', ['name'=>$product->name, 'product'=>$product->id]) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                      Read more
                      <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                      </svg>
                  </a>
                  <form method="POST" action="{{ route('products.destroy', [$product->id]) }}" >
                    @csrf
                    @method('DELETE')
                    <button class="bg-red-700 hover:bg-red-600 text-white font-bold py-2 px-4 border border-red-700 rounded-md">
                      Delete
                    </button>
                  </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endempty

    @empty($products)
        <h3>no product.</h3>
    @endempty
<div class="mt-8 flex">
    {{$products->links()}}
</div>
<div class="text-white float-end mt-8">Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }} - {{ PHP_SAPI }})</div>

@endsection

