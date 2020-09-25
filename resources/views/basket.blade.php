<x-guest-layout>
  <!-- component -->
    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8">
            <div>
                <h2 class="text-2xl font-semibold leading-tight">My Basket</h2>
            </div>

            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Meal
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Price
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Restaurant
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Quantity
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php $total = 0 ?>
                            @if (session('cart'))
                              @foreach(session('cart') as $id => $details)
                               <?php $total += $details['price'] * $details['quantity'] ?>
                                <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 w-10 h-10">
                                            <img class="w-full h-full rounded-full" src="{{ $details['image'] }}" alt="" />
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $details['name'] }}
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">N {{ $details['price'] }}</p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">{{ $details['restaurant'] }}</p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-20 py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="number" value="{{ $details['quantity'] }}">
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                  <span data-id="{{ $id }}" class="relative remove-from-cart inline-block px-3 py-1 font-semibold text-orange-900 leading-tight">
                                      <span aria-hidden class="absolute inset-0 bg-orange-200 opacity-50 rounded-full"></span>
                                      <span class="relative" style="cursor: pointer">Remove</span>
                                  </span>
                                </td>
                            </tr>
                              @endforeach
                            @endif
                        </tbody>
                    </table>
                    <div class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between">
                      <h1 class="text-3xl sm:text-lg md:text-xl lg:text-2xl xl:text-3xl text-center font-extrabold mt-3 mb-3">Total: N {{ $total }}</h1>
                      @if ($total === 0)
                      <a role="button" class="bg-orange-600 hover:bg-orange-700 font-bold uppercase text-white text-sm px-4 py-2  border rounded-full">Checkout </a>
                      @else
                      <a role="button" href="#" class="bg-orange-600 hover:bg-orange-700 font-bold uppercase text-white text-sm px-4 py-2  border rounded-full">Checkout </a>
                      @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>

<script type="text/javascript">
    $(".remove-from-cart").click(function (e) {
        e.preventDefault();
        var ele = $(this);
        if(confirm("Are you sure?")) {
            $.ajax({
                url: '{{ url('remove_from_cart') }}',
                method: "DELETE",
                data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                success: function (response) {
                  window.location.reload();
                }
            });
        }
    });
</script>
