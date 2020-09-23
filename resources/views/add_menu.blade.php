<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Menu - Cactus Restaurant') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              <!-- component -->
              <form id="contact-me" class="w-full mx-auto max-w-9xl bg-white shadow p-8 text-gray-700 ">
                  <!-- name field -->
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Menu Category
                  </label>
                  <div class="flex flex-wrap mb-6">
                      <div class="relative w-full appearance-none label-floating">
                          <input class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                          id="name" type="text" name="category" placeholder="E.g Pizza, Meals, Desserts e.t.c" required>
                      </div>
                  </div>
                  <!-- address field -->
                  <div class="flex flex-wrap mb-6">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Menu Name
                      </label>
                      <div class="relative w-full appearance-none label-floating">
                          <input class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                          id="name" type="text" name="menu_name" placeholder="E.g Refuel Meal" required>
                      </div>
                  </div>
                  <!-- state field -->
                  <div class="flex flex-wrap mb-6">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Description
                      </label>
                      <div class="relative w-full appearance-none label-floating">
                          <textarea class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                            id="name" name="description" required>Enter a short description of the menu</textarea>
                      </div>
                  </div>

                  <!-- city field -->
                  <div class="flex flex-wrap mb-6">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Price
                      </label>
                      <div class="relative w-full appearance-none label-floating">
                          <input class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                          id="name" type="number" name="price" required>
                      </div>
                  </div>

                  <!-- image field -->
                  <div class="flex flex-wrap mb-6">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Menu Image
                      </label>
                      <div class="relative w-full appearance-none label-floating">
                          <input class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                          id="name" type="file" name="menu_image" required>
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
