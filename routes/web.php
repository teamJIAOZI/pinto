<?php
use App\Item;
use App\User;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (Request $id) {
    if(Auth::check()){
        $user = User::find($id);
        $itemboys = \DB::table('favorites')->join('items', 'favorites.favorite_id', '=', 'items.id')->select('items.*', \DB::raw('COUNT(*) as count'))->where('gender', 1)->groupBy('items.id', 'items.gender', 'items.items', 'items.story','items.created_at', 'items.updated_at','items.price','items.kind','items.item_brand','items.img_path')->orderBy('count', 'DESC')->take(5)->get();
        // $itemboys = [];
        
        // foreach($boykeywords as $keyword){
        //     $gift = $keyword->item_brand;
            
        // if ($gift) {
        //     $client = new \RakutenRws_Client();
        //     $client->setApplicationId(env('RAKUTEN_APPLICATION_ID'));
        //     $rws_response = $client->execute('IchibaItemSearch', [
        //         'keyword' => $gift,
        //         'imageFlag' => 1,
        //         'hits' => 1,
        //     ]);
        // }
    
        //     // Creating "Item" instance to make it easy to handle.（not saving）
        // foreach ($rws_response->getData()['Items'] as $rws_item) {
        //         $item = new Item();
        //         $item->code = $rws_item['Item']['itemCode'];
        //         $item->id = $keyword->id;
        //         $item->name = $keyword->items;
        //         $item->story = $keyword->story;
        //         $item->price = $keyword->price;
        //         $item->brand = $keyword->item_brand;
        //         $item->url = $rws_item['Item']['itemUrl'];
        //         $item->image_url = str_replace('?_ex=128x128', '', $rws_item['Item']['mediumImageUrls'][0]['imageUrl']);
        //         $itemboys[] = $item;
        //     }
        // }
        
        // $data = [
        //     'itemboys' => $itemboys,
            
        // ];

        
        // ここまで男
        
        // ここから女
        $itemgirls = \DB::table('favorites')->join('items', 'favorites.favorite_id', '=', 'items.id')->select('items.*', \DB::raw('COUNT(*) as count'))->where('gender', 2)->groupBy('items.id', 'items.gender', 'items.items', 'items.story','items.created_at', 'items.updated_at','items.price','items.kind','items.item_brand','items.img_path')->orderBy('count', 'DESC')->take(5)->get();
        // $itemgirls = [];
        
        // foreach($girlkeywords as $keyword){
        //     $gift = $keyword->item_brand;
            
        // if ($gift) {
        //     $client = new \RakutenRws_Client();
        //     $client->setApplicationId(env('RAKUTEN_APPLICATION_ID'));
        //     $rws_response = $client->execute('IchibaItemSearch', [
        //         'keyword' => $gift,
        //         'imageFlag' => 1,
        //         'hits' => 1,
        //     ]);
        // }
    
        //     // Creating "Item" instance to make it easy to handle.（not saving）
        // foreach ($rws_response->getData()['Items'] as $rws_item) {
        //         $item = new Item();
        //         $item->code = $rws_item['Item']['itemCode'];
        //         $item->id = $keyword->id;
        //         $item->name = $keyword->items;
        //         $item->story = $keyword->story;
        //         $item->price = $keyword->price;
        //         $item->brand = $keyword->item_brand;
        //         $item->url = $rws_item['Item']['itemUrl'];
        //         $item->image_url = str_replace('?_ex=128x128', '', $rws_item['Item']['mediumImageUrls'][0]['imageUrl']);
        //         $itemgirls[] = $item;
        //     }
        // }
        
        // // $data = [
        // //     // 'user' => $user,
        // //     'itemgirls' => $itemgirls,
            
        // // ];

    return view('welcome', ['items'=> $itemboys,'itemgirls'=>$itemgirls,'user'=>$user]);
    } else {
        return view('welcome');
    }
});

Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

Route::get('menindex', 'UsersController@menindex')->name('users.menindex');
Route::get('womenindex', 'UsersController@womenindex')->name('users.womenindex');

Route::get('mensearch', 'UsersController@mensearch')->name('users.mensearch');
Route::get('womensearch', 'UsersController@womensearch')->name('users.womensearch');

Route::get('searchindex', 'UsersController@searchindex')->name('users.searchindex');




Route::group(['middleware' => 'auth'], function () {
    
    Route::group(['prefix' => 'users/{id}'], function () { 
        
        Route::post('like', 'UserFavoriteController@store')->name('user.like');
        Route::delete('unlike', 'UserFavoriteController@destroy')->name('user.unlike');
        
        Route::post('favoritelike', 'UserFavoriteController@favoritestore')->name('user.favoritelike');
        Route::delete('favoriteunlike', 'UserFavoriteController@favoritedestroy')->name('user.favoriteunlike');
        
        Route::post('menlike', 'UserFavoriteController@menstore')->name('user.menlike');
        Route::delete('menunlike', 'UserFavoriteController@mendestroy')->name('user.menunlike');
        
        Route::post('womenlike', 'UserFavoriteController@womenstore')->name('user.womenlike');
        Route::delete('womenunlike', 'UserFavoriteController@womendestroy')->name('user.womenunlike');
        
        Route::get('menfavorites', 'UsersController@menfavorites')->name('users.menfavorites');
        Route::get('womenfavorites', 'UsersController@womenfavorites')->name('users.womenfavorites');
        
        Route::get('loginmenindex', 'UsersController@loginmenindex')->name('users.loginmenindex');
        Route::get('loginwomenindex', 'UsersController@loginwomenindex')->name('users.loginwomenindex');
    });
    
});