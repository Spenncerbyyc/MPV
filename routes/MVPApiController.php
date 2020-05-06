<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class RPSApiController extends Controller
{
    function getQuote() {
        $quotes = [
            "Red Meat",
            "Poultry",
            "Cured Meat",
            "Fish",
            "Vegetarian",
        ];
        $index = array("Red Meat", "Poultry", "Cured Meat", "Fish", "Vegetarian",);
        return response()->json(["Red Meat"=>$quotes[$index]]);
    }
}

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
//

//if, else if logic chain, based on meat, return pairing

//Graphics come from API call

//Red Meat - Bold Red Cab Sauv, IPA

// Chicken - Rich White Viognier, Wheat Beer

// Pork - Medium Red Grenache, Amber Ale

// Fish - Dry White Sauv Blanc, Brown Ale

// Veggies - Pinot Noir, Saison
