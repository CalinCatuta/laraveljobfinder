# What Is Route Controller Integration?

Routes define how URLs (e.g., `/` or `/jobs`) connect to controller methods. In Laravel:

-   Routes are defined in `routes/web.php` (or `routes/api.php` for APIs).
-   They link HTTP verbs (like `GET`, `POST`) to controller logic.
-   Controllers contain methods (e.g., `index`, `show`) that process requests and return responses.

First, I create a controller with Artisan (see `artisan.md`):

```bash
php artisan make:controller HomeController
```

# Steps

After we create a controller class for our components we can use them in our Route `routes/web.php`

In our Controller will have the methods for example (index, show, create, store ...)

-   We use Route to create the Route
-   We give the method we want to use ::get
-   We give the route "/"
-   We call use the HomeController class
-   We specify the method we want from that class "index"
-   Route::get('/', [HomeController::class, 'index']);

```php
// from routes/web.php
Route::get('/', [HomeController::class, 'index']);
Route::get('/jobs', [JobController::class, 'index']);
```

**What It Does**

-   Route::get specifies a GET request for the root URL (/).
-   [HomeController::class, 'index'] links the route to the index method in HomeController.
-   When a user visits /, Laravel calls HomeController::index() to handle the request.

**How It Fits**

-   Ties into the Controller layer of MVC (see HTTP-Controller.md).
-   The index method might return a view (e.g., return view('home');) to display the homepage.
-   Keeps routing logic centralized in routes/web.php for easy management.

# Controller

```php
// app/Http/Controllers/HomeController.php
namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller {
    public function index(): View {
        return view('home');
    }
}
```

**What It Does**

-   Defines an index method that returns the home.blade.php view.
-   Uses type hinting (: View) to ensure a proper response (see HTTP-Controller.md for more on this).
-   Keeps the logic simple—here it just loads a static page, but it could fetch data too.

**How It Fits**

-   Works with routes like Route::get('/', [HomeController::class, 'index']);.
-   Connects to Blade templates (e.g., resources/views/home.blade.php) for rendering (see blade-template.md).
-   Scales easily—add more methods (e.g., show, store) for complex features.
