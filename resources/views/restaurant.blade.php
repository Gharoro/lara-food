<x-guest-layout>
  <!-- component -->
<div class="bg-cover bg-center h-auto text-white mt-1 rounded bg-shadow py-24 px-10 object-fill" style="background-image: url('{{$restaurant->image}}')">
   <div class="md:w-1/2 w-full pl-3 pb-3 pt-3 rounded opacity-75 bg-shadow bg-green-600">
      <p class="text-3xl font-bold mb-3">{{$restaurant->name}}</p>
      <p class="text-2xl mb-4 leading-none"><i class="fas fa-map-marker-alt"></i> {{$restaurant->address}}, {{$restaurant->city}}, {{$restaurant->state}}</p>
      <p class="text-xl font-bold leading-none"><i class="far fa-clock"></i> Opens {{$restaurant->open_time}} | Closes {{$restaurant->close_time}}</p>
    </div>
</div>
@if ($menus->isEmpty())
  <h1 class="text-3xl sm:text-lg md:text-xl lg:text-2xl xl:text-5xl text-center font-extrabold mt-3 mb-3">Our Menu</h1>
  <h4 class="text-3xl sm:text-lg md:text-xl lg:text-2xl xl:text-3xl text-center font-medium mt-3 mb-3">No menu listed yet!</h4>
@else
<h1 class="text-3xl sm:text-lg md:text-xl lg:text-2xl xl:text-5xl text-center font-extrabold mt-3 mb-3">Our Menu</h1>
@if (session('success'))
  <h6>{{session('success')}}</h6>
@endif
<!-- component -->
<div class="w-full flex bg-white mb-5 pb-10">
      <!-- main -->
    <main class="w-full">
      <div class="px-2 grid grid-cols-4 gap-4">
        <!-- start cols -->
        @foreach ($menus as $menu)
        <div class="col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-1 xl:col-span-1 flex flex-col items-center">
            <div class="relative">
              <div class="bg-white rounded-lg">
                <img src="{{$menu->image}}" class="h-48 w-screen" alt="" />
              </div>
              <div style="background-color: rgba(0,0,0,0.6)"
                class="absolute bottom-0 uppercase mb-2 ml-3 px-2 py-1 rounded text-sm text-white">{{$menu->category}}
              </div>
            </div>

            <div class="bg-white shadow-lg rounded h-auto -mt-2 w-full">
              <div class="py-5 px-5">
                <span class="font-bold text-gray-800 text-lg">{{$menu->name}}</span>
                <div class="flex items-center justify-between">
                  <div class="text-sm text-gray-600 font-light">
                    {{$menu->description}}
                  </div>
                </div>
                <div class="text-2xl text-red-600 mt-5 font-bold">
                  N {{$menu->price}}
                  <span style="float: right">
                    <a href="{{ url('/add_to_cart') }}/{{$menu->id}}/{{$restaurant->name}}">
                      <button title="Add To Bucket" class="p-0 w-12 h-12 bg-red-600 rounded-full hover:bg-red-700 active:shadow-lg mouse shadow transition ease-in duration-200 focus:outline-none">
                        <svg viewBox="0 0 20 20" enable-background="new 0 0 20 20" class="w-6 h-6 inline-block">
                          <path fill="#FFFFFF" d="M16,10c0,0.553-0.048,1-0.601,1H11v4.399C11,15.951,10.553,16,10,16c-0.553,0-1-0.049-1-0.601V11H4.601
                          C4.049,11,4,10.553,4,10c0-0.553,0.049-1,0.601-1H9V4.601C9,4.048,9.447,4,10,4c0.553,0,1,0.048,1,0.601V9h4.399
                          C15.952,9,16,9.447,16,10z" />
                        </svg>
                      </button>
                    </a>
                  </span>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        <!-- end cols -->

      </div>
    </main>
</div>
@endif
</x-guest-layout>
