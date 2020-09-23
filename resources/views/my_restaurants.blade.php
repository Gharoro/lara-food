<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Placed Orders') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              <!-- component -->
              <div class="container mx-auto px-4 sm:px-8">
                <div class="py-8">

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
                                          Action
                                      </th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <a href="#">
                                          <div class="flex items-center">
                                              <div class="flex-shrink-0 w-10 h-10">
                                                  <img class="w-full h-full rounded-full" src="/images/hero4.jpg" alt="" />
                                              </div>
                                              <div class="ml-3">
                                                  <p class="text-gray-900 whitespace-no-wrap">
                                                      Cactus Restaurant
                                                  </p>
                                              </div>
                                          </div>
                                        </a>
                                      </td>
                                      <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                          <p class="text-gray-900 whitespace-no-wrap">N0 42, Victoria Island, Lagos</p>
                                      </td>
                                      <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <span
                                            class="relative inline-block mb-2 px-3 py-1 font-semibold text-orange-900 leading-tight">
                                            <span aria-hidden
                                                class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                            <span class="relative" style="cursor: pointer">
                                              <a href="{{ url('/restaurant/1/edit') }}">EDIT</a>
                                            </span>
                                        </span>
                                        <span
                                            class="relative inline-block px-3 py-1 font-semibold text-orange-900 leading-tight">
                                            <span aria-hidden
                                                class="absolute inset-0 bg-orange-200 opacity-50 rounded-full"></span>
                                            <span class="relative" style="cursor: pointer">
                                              <a href="{{ url('/restaurant/1/add_menu') }}">ADD MENU</a>
                                            </span>
                                        </span>
                                      </td>
                                  </tr>

                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
              </div>
            </div>
        </div>
    </div>
</x-app-layout>
