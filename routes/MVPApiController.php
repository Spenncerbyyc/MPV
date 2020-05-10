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
    function getPairing(Request $request) {
        $pairings = [
            "Red Meat"=>["name"=>"Bold Red","description"=>"The tannins in the cab sauv will compliment the grilled steak.", "image"=>"boldred.jpg"],
            "Poultry"=>["name"=>"Rich White","description"=>"The aromas from the roasted chicken will heighten the flavours in the wine.", "image"=>"viognier.jpeg"],
            "Cured Meat"=>["name"=>"Medium Red","description"=>"Both the wine and the barbequed pork feature smokey, earthy characteristics.", "image"=>"grenache.jpg"],
            "Fish"=>["name"=>"Dry White","description"=>"This wine has citrus fruit aspects that will cut through the richness of the fish.", "image"=>"sauvblanc.jpeg"],
            "Vegetarian"=>["name"=>"Light Red","description"=>"The fragrance and the herb notes will bring out the spices in your dish.", "image"=>"pinotnoir.jpeg"],
        ];
        return response()->json(["pairings"=>$pairings[$request->UserSelection]]);
    }
}


//return appropriate pairing
// move Somm logic

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

//Front end asks API, API is Sommelier, API returns Axios call, API returns JSON object JSON location, API will have key value pair, keys are proteins,
//values are more key value pairs, image title/title, use API as mule,
