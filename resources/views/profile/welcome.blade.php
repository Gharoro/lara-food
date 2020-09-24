<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Dashboard') }}
      </h2>
  </x-slot>
  <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
      <div class="mt-8 text-2xl font-extrabold">
          Hello {{ Auth::user()->name }}! <p class="font-medium">Welcome to your LaraFood Dashboard!</p>
      </div>
    @if ((Auth::user()->type) === 'vendor')
      <div class="mt-6 text-gray-500">
          What would you like to do?
      </div>
    @endif
  </div>

  <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
  @if ((Auth::user()->type) === 'vendor')
      <div class="p-6">
          <div class="flex items-center">
              <img src="/images/restaurant_bg.svg" class="h-6" />
              <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="{{ url('/list_restaurant') }}">List My Restaurant</a></div>
          </div>
      </div>

      <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
          <div class="flex items-center">
              <img src="/images/fastfood.svg" class="h-6" />
              <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="{{ url('/my_restaurants') }}">View My Restaurant(s)</a></div>
          </div>
      </div>

      <div class="p-6 border-t border-gray-200">
          <div class="flex items-center">
              <img src="/images/received_orders.svg" class="h-6" />
              <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="{{ url('/received_orders') }}">View My Received Orders</a></div>
          </div>
      </div>

      <div class="p-6 border-t border-gray-200">
          <div class="flex items-center">
              <img src="/images/placed_orders.svg" class="h-6" />
              <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="{{ url('/placed_orders') }}">View My Placed Orders</a></div>
          </div>
      </div>
    @else
      <div class="p-6">
          <div class="flex items-center">
              <img src="/images/placed_orders.svg" class="h-6" />
              <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="{{ url('/placed_orders') }}">View My Orders</a></div>
          </div>
      </div>
    @endif
  </div>
</x-app-layout>
