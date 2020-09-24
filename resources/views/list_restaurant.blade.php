<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List Restaurant') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <!-- alert box -->
          @if (session('status'))
          <div class="bg-green-500 border border-green-400 text-white uppercase mb-2 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">{{session('status')}}</strong>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
              <svg class="fill-current h-6 w-6 text-white" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
            </span>
          </div>
          @endif
          <!-- alert box end -->
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              <!-- component -->
              <form id="contact-me" method="post" action="/restaurant" enctype="multipart/form-data" class="w-full mx-auto max-w-9xl bg-white shadow p-8 text-gray-700 ">
                  @csrf
                  <!-- name field -->
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Restaurant Name
                  </label>
                  <div class="flex flex-wrap mb-6">
                      <div class="relative w-full appearance-none label-floating">
                          <input class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                          id="name" name="name" type="text" placeholder="Your Restaurant Name">
                      </div>
                      @error('name')
                        <div class="invalid-feedback"><i class="text-red-600">{{ $message }}</i></div>
                      @enderror
                  </div>
                  <!-- address field -->
                  <div class="flex flex-wrap mb-6">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Address
                      </label>
                      <div class="relative w-full appearance-none label-floating">
                          <input class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                          id="name" type="text" name="address" placeholder="Address e.g 42, Main Street, Main Island">
                      </div>
                      @error('address')
                        <div class="invalid-feedback"><i class="text-red-600">{{ $message }}</i></div>
                      @enderror
                  </div>

                  <!-- state field -->
                  <div class="flex flex-wrap mb-6">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        State
                      </label>
                      <div class="relative w-full appearance-none label-floating">
                          <input class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                          id="name" type="text" name="state" placeholder="State">
                      </div>
                      @error('state')
                        <div class="invalid-feedback"><i class="text-red-600">{{ $message }}</i></div>
                      @enderror
                  </div>

                  <!-- city field -->
                  <div class="flex flex-wrap mb-6">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        City
                      </label>
                      <div class="relative w-full appearance-none label-floating">
                          <input class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                          id="name" type="text" name="city" placeholder="City">
                      </div>
                      @error('city')
                        <div class="invalid-feedback"><i class="text-red-600">{{ $message }}</i></div>
                      @enderror
                  </div>

                  <!-- image field -->
                  <div class="flex flex-wrap mb-6">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Restaurant Display Image
                      </label>
                      <div class="relative w-full appearance-none label-floating">
                          <input class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                          id="name" type="file" name="image" >
                      </div>
                      @error('image')
                        <div class="invalid-feedback"><i class="text-red-600">{{ $message }}</i></div>
                      @enderror
                   </div>

                  <!-- open and close time field -->

                  <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                          Open Time
                        </label>
                        <div class="relative">
                           <select required name="open_time" class="block appearance-none w-full border text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                             <option>Select time you open</option>
                             <option value="5am">5 am</option>
                             <option value="6am">6 am</option>
                             <option value="7am">7 am</option>
                             <option value="8am">8 am</option>
                             <option value="9am">9 am</option>
                             <option value="10am">10 am</option>
                             <option value="11am">10 am</option>
                             <option value="12 noon">12 noon</option>
                             <option value="1pm">1 pm</option>
                             <option value="2pm">2 pm</option>
                             <option value="3pm">3 pm</option>
                             <option value="4pm">4 pm</option>
                             <option value="5pm">5 pm</option>
                             <option value="6pm">6 pm</option>
                             <option value="7pm">7 pm</option>
                             <option value="8pm">8 pm</option>
                             <option value="9pm">9 pm</option>
                           </select>
                           <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                             <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                           </div>
                         </div>
                         @error('open_time')
                           <div class="invalid-feedback"><i class="text-red-600">{{ $message }}</i></div>
                         @enderror
                      </div>
                      <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                          Close Time
                        </label>
                        <div class="relative">
                           <select required name="close_time" class="block appearance-none w-full border text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                             <option>Select time you close</option>
                             <option value="12 noon">12 noon</option>
                             <option value="1pm">1 pm</option>
                             <option value="2pm">2 pm</option>
                             <option value="3pm">3 pm</option>
                             <option value="4pm">4 pm</option>
                             <option value="5pm">5 pm</option>
                             <option value="6pm">6 pm</option>
                             <option value="7pm">7 pm</option>
                             <option value="8pm">8 pm</option>
                             <option value="9pm">9 pm</option>
                             <option value="10pm">10 pm</option>
                             <option value="11pm">11 pm</option>
                             <option value="12 am">12 am</option>
                           </select>
                           <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                             <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                           </div>
                         </div>
                         @error('close_time')
                           <div class="invalid-feedback"><i class="text-red-600">{{ $message }}</i></div>
                         @enderror
                      </div>
                  </div>

                  <div class="">
                      <button class="w-auto inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150"
                          type="submit">
                          Save
                      </button>
                  </div>
              </form>
            </div>
        </div>
    </div>
</x-app-layout>
