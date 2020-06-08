## Installation

To get started with **Base Repository**, use Composer to add the package to your project's dependencies:

```bash
    composer require thuanpt/larasitory
```

### Basic Usage

Next, you are ready to use repository. If you want create repository with Model corresponding (example: PostRepository), run commnand line: 

```bash

php artisan make:repostitory PostRepository -i
```
When run this commnand, Packeage automatic generate two file in forder Repository: PostRepository and PostRepositoryInterface. 
PostRepository extends BaseRepository so you can use method in BaseRepository

```php
<?php

namespace App\Repositories;

use App\Models\Post;
use Larasitory\Repository\BaseRepository;
use App\Repositories\Contracts\PostRepositoryInterface;

class PostRepository extends BaseRepository implements PostRepositoryInterface
{
    /**
     * Set model database
     *
     * @return mixed|string
     */
    public function model()
    {
        return Post::class;
    }
}
```
Register in AppServiceProvider
```php
<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \App\Repositories\Contracts\PostRepositoryInterface::class,
            \App\Repositories\PostRepository::class
        );
    }
}
```


#### Use in controller

In controller, You want find post by id use repository

```php
<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\PostRepositoryInterface;

class PostController extends Controller
{
    /**
     * @var \App\Repositories\PostRepository
     */
    private $postRepository;

    public function __construct(PostRepositoryInterface $postRepository )
    {
        $this->postRepository = $postRepository;
    }

    public function show($id) 
    {
        $user = $this->postRepository->getById($id);

        return response()->json($user);
    }
}
```
