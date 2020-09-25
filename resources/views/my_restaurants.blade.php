<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Restaurants') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- alert box -->
            @if (session('status'))
            <div class="bg-green-500 border border-green-400 text-white uppercase mb-2 px-4 py-3 rounded relative" role="alert">
              <strong class="font-bold">{{ session('status') }}</strong>
              <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg class="fill-current h-6 w-6 text-white" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
              </span>
            </div>
            @endif
            <!-- alert box end -->
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              <!-- component -->
              <div class="container mx-auto px-4 sm:px-8">
                <div class="py-8">
                  @if ($restaurants->isEmpty())
                  <div class="bg-green-100 border-t border-b border-green-500 text-white-700 px-4 py-3" role="alert">
                    <p class="font-bold">You haven't listed any Restaurant. Kindly click on the link below to do so.</p>
                    <button class="bg-green-800 text-white font-semibold hover:bg-opacity-75 mt-3 py-2 px-4 border border-white hover:border-transparent rounded">
                      <a href="{{ url('/list_restaurant') }}">List A Restaurant</a>
                    </button>
                  </div>
                  @else
                  <!-- restaurants box start -->
                  <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                      <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                          <table class="min-w-full leading-normal">
                              <thead>
                                  <tr>
                                      <th
                                          class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                          Restaurant
                                      </th>
                                      <th
                                          class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                          Address
                                      </th>
                                      <th
                                          class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                          Open Time
                                      </th>
                                      <th
                                          class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                          Close Time
                                      </th>
                                      <th
                                          class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                          Action
                                      </th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach ($restaurants as $restaurant)
                                  <tr>
                                      <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <a href="{{ url('/restaurant') }}/{{$restaurant->id}}">
                                          <div class="flex items-center">
                                              <div class="flex-shrink-0 w-10 h-10">
                                                  <img class="w-full h-full rounded-full" src="{{$restaurant->image}}" alt="" />
                                              </div>
                                              <div class="ml-3">
                                                  <p class="text-gray-900 whitespace-no-wrap">
                                                      {{$restaurant->name}}
                                                  </p>
                                              </div>
                                          </div>
                                        </a>
                                      </td>
                                      <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                          <p class="text-gray-900 whitespace-no-wrap">
                                            {{$restaurant->address}}, <br/> {{$restaurant->city}}, {{$restaurant->state}}
                                          </p>
                                      </td>
                                      <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                          <p class="text-gray-900 whitespace-no-wrap">
                                            {{$restaurant->open_time}}
                                          </p>
                                      </td>
                                      <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                          <p class="text-gray-900 whitespace-no-wrap">
                                            {{$restaurant->close_time}}
                                          </p>
                                      </td>
                                      <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <span
                                            class="relative inline-block mb-2 px-3 py-1 font-semibold text-orange-900 leading-tight">
                                            <span aria-hidden
                                                class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                            <span class="relative" style="cursor: pointer">
                                              <a href="{{url('/restaurant')}}/{{$restaurant->id}}/edit">EDIT</a>
                                            </span>
                                        </span>
                                        <span
                                            class="relative inline-block px-3 py-1 font-semibold text-orange-900 leading-tight">
                                            <span aria-hidden
                                                class="absolute inset-0 bg-orange-200 opacity-50 rounded-full"></span>
                                            <span class="relative" style="cursor: pointer">
                                              <a href="{{url('/restaurant')}}/{{$restaurant->id}}/add_menu">ADD MENU</a>
                                            </span>
                                        </span>
                                      </td>
                                  </tr>
                                @endforeach
                              </tbody>
                          </table>
                      </div>
                  </div>
                  <!-- restaurants box end -->
                  @endif
                </div>
              </div>
            </div>
        </div>
    </div>
</x-app-layout>
