<x-guest-layout>
  <div class="search-hero">
    <div class="h-screen w-screen">
        <div class="container h-auto mx-auto flex justify-center items-center">
          <div class="search-box border mt-20 p-6 grid grid-cols-1 gap-3 border-gray-400 shadow-lg rounded-lg">
            <form action="/search" method="get" class="w-full max-w-lg">
              <div class="flex flex-wrap -mx-3 mb-3">
                <div class="w-full md:w-1/2 px-3 mb-3 md:mb-0">
                  <input name="location" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-location" type="text" placeholder="Search Location...">
                </div>
                <div class="w-full md:w-1/2 px-3">
                  <input name="restaurant" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" id="grid-name" type="text" placeholder="Search Name...">
                </div>
                <div class="w-full md:w-1/2 px-3 mt-3">
                    <button type="submit" class="auth-btn block w-1/2 px-3 py-2 bg-orange-700 bg-opacity-75 mx-1 text-center uppercase text-sm font-bold text-white leading-5 md:mx-2 md:w-auto">Search</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
  </div>

  <section>
    @if (count($results) < 1)
    <h1 class="text-base sm:text-lg md:text-xl lg:text-2xl xl:text-3xl font-extrabold ml-3 mt-3 mb-3">Found 0 Restaurants matching your search</h1>
    @else
    <h1 class="text-base sm:text-lg md:text-xl lg:text-2xl xl:text-3xl font-extrabold ml-3 mt-3 mb-3">Found {{count($results)}} Restaurants matching your search</h1>

    <div class="flex flex-wrap mb-4 mt-3">
      @foreach ($results as $result)
      <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 mb-4 px-2">
        <div class="w-full min-h-full max-w-sm overflow-hidden rounded border bg-white shadow">
          <div class="relative">
            <div class="h-48 bg-cover bg-no-repeat bg-center"
              style="background-image: url('{{$result->image}}')">
            </div>
            <div style="background-color: rgba(0,0,0,0.6)"
              class="absolute bottom-0 mb-2 ml-3 px-2 py-1 rounded text-sm text-white">{{$result->city}}
            </div>
          </div>
          <div class="p-3">
            <h3 class="mr-10 text-sm truncate-2nd">
              <a class="font-extrabold" href="{{ url('/restaurant') }}/{{$result->id}}">{{$result->name}}</a>
            </h3>
            <div class="flex items-start justify-between">
              <p class="text-xs text-gray-500">Address: {{$result->address}}, {{$result->city}}, {{$result->state}}</p>
            </div>
            <p class="text-xs text-gray-500 font-bold mt-2">Opens {{$result->open_time}} | Closes {{$result->close_time}}</p>
            <a href="{{ url('/restaurant') }}/{{$result->id}}" class="text-orange-700"> Visit Restaurant</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    @endif
  </section>
</x-guest-layout>
