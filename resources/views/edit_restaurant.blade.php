<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Restaurant - Cactus Restaurant') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              <!-- component -->
              <form id="contact-me" class="w-full mx-auto max-w-9xl bg-white shadow p-8 text-gray-700 ">
                  <!-- name field -->
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Restaurant Name
                  </label>
                  <div class="flex flex-wrap mb-6">
                      <div class="relative w-full appearance-none label-floating">
                          <input class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                          id="name" type="text" value="Cactus Restaurant" placeholder="Your Restaurant Name"required>
                      </div>
                  </div>
                  <!-- address field -->
                  <div class="flex flex-wrap mb-6">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Address
                      </label>
                      <div class="relative w-full appearance-none label-floating">
                          <input class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                          id="name" type="text" name="address" value="42, Victoria Island" placeholder="Address e.g 42, Main Street, Main Island"required>
                      </div>
                  </div>

                  <!-- state field -->
                  <div class="flex flex-wrap mb-6">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        State
                      </label>
                      <div class="relative w-full appearance-none label-floating">
                          <input class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                          id="name" type="text" value="Lagos" name="state" placeholder="State"required>
                      </div>
                  </div>

                  <!-- city field -->
                  <div class="flex flex-wrap mb-6">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        City
                      </label>
                      <div class="relative w-full appearance-none label-floating">
                          <input class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                          id="name" type="text" name="city" value="Victoria Island" placeholder="City"required>
                      </div>
                  </div>

                  <!-- image field -->
                  <div class="flex flex-wrap mb-6">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Restaurant Display Image
                      </label>
                      <div class="relative w-full appearance-none label-floating">
                          <input class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                          id="name" type="file" name="image" required>
                      </div>
                   </div>

                  <!-- open and close time field -->

                  <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                          Open Time
                        </label>
                        <div class="relative">
                           <select name="open_time" class="block appearance-none w-full border text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
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
                      </div>
                      <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                          Close Time
                        </label>
                        <div class="relative">
                           <select name="close_time" class="block appearance-none w-full border text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
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
