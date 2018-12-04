<?php
use App\Compagny;
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


Auth::routes();

//Admin
Route::middleware('can:admin')->group(function () {

    //admin View
    Route::get('/adminHome', 'HomeController@index')->name('home');
    Route::get('/adminValidation', 'HomeController@indexValidationPost');
    Route::get('/imageBackground', 'HomeController@indexHomeImageBG');
    Route::get('/testimonial', 'HomeController@indexHomeTestimonial');
    Route::get('/service', 'ProjectController@index');
    Route::get('/myService', 'HomeController@indexHomeService');
    Route::get('/video', 'HomeController@indexHomeVideo');
    Route::get('/about', 'HomeController@indexHomeAbout');
    Route::get('/team', 'HomeController@indexHomeTeam');
    Route::get('/user', 'UserController@index');
    Route::get('/myProject', 'HomeController@indexMyProject');
    Route::get('/commentaire/{id}', 'CommentaireController@index');
    Route::get('/compagny', 'CompagnyController@index');
    Route::get('editCompagny/{id}', function () {
        $compagnie = Compagny::all();
        return view('administration/editCompagny', compact('compagnie'));
    });

    //validation Admin
    Route::post('/validate/{id}', 'ArticleController@validation');
    Route::post('/validateTag/{id}', 'ArticleController@validationTag');
    Route::post('/validateCategorie/{id}', 'ArticleController@validationCategorie');
    Route::post('/deletetag/{id}', 'ArticleController@destroyTag');
    Route::post('/deleteCategorie/{id}', 'ArticleController@destroyCategorie');    

    //Edit , Update
    Route::post('/editText', 'TextEditorController@update');
    Route::post('/insertVideo', 'VideoHomePageController@update');
    Route::get('/homeEdit', 'HomeController@indexHomeEdit');
    Route::get('/editUser/{id}', 'UserController@edit');
    Route::post('/updateUser/{id}', 'UserController@update');
    Route::post('/updateBackground/{id}', 'HomeBackgroundController@update');
    Route::post('/updateProject/{id}', 'ProjectController@update');
    Route::post('/updateService/{id}', 'ServiceController@update');
    Route::post('/updateArticles/{id}', 'ArticleController@update');
    Route::post('/updateCompagnie/{id}', 'CompagnyController@update');

    //Create
    Route::post('/createService', 'ServiceController@create');
    Route::post('/addBackground', 'HomeBackgroundController@create');
    Route::post('/createTesti', 'TestimonialController@create');
    Route::post('/createServiceOk', 'ServiceController@create');
    Route::post('/createArticles', 'ArticleController@create');
    Route::post('/createUser', 'UserController@create');
    Route::post('/createProject', 'ProjectController@create');

    //Delete
    Route::post('/deleteService/{id}', 'ServiceController@destroy');
    Route::post('/deleteCom/{id}', 'CommentaireController@destroy');
    Route::post('/deleteProject/{id}', 'ProjectController@destroy');
    Route::post('/deleteUser/{id}', 'UserController@destroy');
    Route::post('/deleteBackground/{id}', 'HomeBackgroundController@destroy');
    Route::post('/deleteArticle/{id}', 'ArticleController@destroy');
    Route::post('/deleteTestimonial/{id}', 'TestimonialController@destroy');
});

//Editor
Route::middleware('can:notGuest')->group(function () {
    Route::get('/articles', 'BlogPageController@indexArticles');
    Route::get('/mesArticles', 'HomeController@indexMesArticles');
    Route::get('/monArticle/{id}', 'HomeController@indexMonArticle');
    Route::get('/editArticle/{id}', 'ArticleController@edit');
});

//Views blade
Route::get('/', 'PageHomeController@index');
Route::get('/services', 'PageServiceController@index')->name('services');
Route::get('/project', 'ProjectController@index');
Route::get('/contact', function () {
    $compagnie = Compagny::all();
    return view('contact', compact('compagnie'));
})->name('contact');

Route::get('/blog', 'BlogPageController@indexArticlesBlog')->name('blog');
Route::get('/blog-post/{id}', 'BlogPageController@indexArticlesView')->name('article');
Route::post('/sendComment/{id}', 'CommentaireController@create');
Route::post('/sendMail', 'MailController@store');
Route::post('/search', 'BlogPageController@searchArticle');
Route::get('/searchViaTag/{id}/', 'BlogPageController@searchArticleTag');
Route::get('/searchViaCategorie/{id}/', 'BlogPageController@searchArticleCategorie');
Route::post('/newsletter', 'NewsletterController@store');


//AdminLTE
Route::get('/admin-master/profile', 'ProfileController@show')->name('showProfile');
Route::get('/admin-master/profile/edit/{id}', 'ProfileController@edit')->name('editProfile');
Route::post('/admin-master/profile/update/{id}', 'ProfileController@update')->name('updateProfile');