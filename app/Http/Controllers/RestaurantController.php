<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Menu;
use JD\Cloudder\Facades\Cloudder;
use Illuminate\Support\Arr;
use Auth;

class RestaurantController extends Controller
{
    // view all restaurants
    public function index()
    {
        $restaurants = Restaurant::simplePaginate(6);
        return view('welcome')->with('restaurants', $restaurants);
    }

    // search Restaurants
    public function search(Request $request)
    {
        $query = $request->all();
        if ($query['location'] && !$query['restaurant']) {
            $results = Restaurant::where('city', 'ilike', '%' . $query['location'] . '%')->get();
            return view('search')->with('results', $results);
        }
        if ($query['restaurant'] && !$query['location']) {
            $results = Restaurant::where('name', 'ilike', '%' . $query['restaurant'] . '%')->get();
            return view('search')->with('results', $results);
        }
        if ($query['location'] && $query['restaurant']) {
            $results = Restaurant::where([
            ['city', 'ilike', '%' . $query['location'] . '%'],
            ['name', 'ilike', '%' . $query['restaurant'] . '%'],
            ])->get();

            return view('search')->with('results', $results);
        }
    }

    // view restaurant details
    public function show($id)
    {
        $restaurant = Restaurant::find($id);
        $menus = Restaurant::find($id)->menus;

        return view('restaurant')->with('restaurant', $restaurant)->with('menus', $menus);
    }

    // Creates a restaurant
    public function store(Request $request)
    {
        // get logged in user id
        $user = Auth::user()->id;
        // validate input
        $validatedData = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'state' => 'required',
            'city' => 'required',
            'image' => 'required',
            'open_time' => 'required',
            'close_time' => 'required',
        ]);
        // validate image
        request()->validate([
          'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $input = $request->all();
        $file = $request->file('image');
        // upload image to cloudinary
        Cloudder::upload($file);
        $uploadedImage = Cloudder::getResult();
        // prepare data to be stored in database
        $input['image'] = $uploadedImage['secure_url'];
        $input['user_id'] = $user;
        // store data to database
        $newRestaurant = Restaurant::create($input);

        if ($newRestaurant) {
            return redirect('/list_restaurant')->with('status', 'Restaurant successfully added!');
        }
    }

    // view user restaurants
    public function user_restaurants()
    {
        $user = Auth::user()->id;
        $found_restaurants = Restaurant::where('user_id', $user)->orderBy('created_at')->get();

        return view('my_restaurants')->with('restaurants', $found_restaurants);
    }

    // edit restaurant page
    public function edit_view($id)
    {
        $restaurant = Restaurant::find($id);
        return view('edit_restaurant')->with('restaurant', $restaurant);
    }

    // updates a restaurant
    public function update(Request $request)
    {
        if ($request->hasFile('image')) {
            // validate image
            request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
          ]);
            // upload new image and store data in database
            $file = $request->file('image');
            $input = $request->all();
            $filtered = Arr::except($input, ['_method', '_token', 'id']);
            Cloudder::upload($file);
            $uploadedImage = Cloudder::getResult();
            // prepare data to be stored in database
            $filtered['image'] = $uploadedImage['secure_url'];
            $updatedRestaurant = Restaurant::where('id', $input['id'])->update($filtered);

            return redirect('/my_restaurants')->with('status', 'Restaurant successfully updated!');
        }
        $input = $request->all();
        $filtered = Arr::except($input, ['_method', '_token', 'id']);
        $updatedRestaurant = Restaurant::where('id', $input['id'])->update($filtered);

        return redirect('/my_restaurants')->with('status', 'Restaurant successfully updated!');
    }

    // add menu page
    public function add_menu_view($id)
    {
        $restaurant = Restaurant::find($id);
        return view('add_menu')->with('restaurant', $restaurant);
    }

    // add menu to a restaurant
    public function add_menu(Request $request)
    {
        $validatedData = $request->validate([
          'category' => 'required',
          'name' => 'required',
          'description' => 'required',
          'price' => 'required',
          'image' => 'required',
        ]);
        // validate image
        request()->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg|max:1048',
        ]);
        $input = $request->all();
        $file = $request->file('image');
        // upload image to cloudinary
        Cloudder::upload($file);
        $uploadedImage = Cloudder::getResult();
        // prepare data to be stored in database
        $input['image'] = $uploadedImage['secure_url'];
        // store data to database
        $newRestaurant = Menu::create($input);

        return redirect()->route('add_menu', ['id' => $input['restaurant_id']])->with('status', 'Menu successfully added!');
    }
}
