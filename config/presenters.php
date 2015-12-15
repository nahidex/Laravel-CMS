<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Presenters
    |--------------------------------------------------------------------------
    |
    | Define your objects and their corrosponding presenters here to have them
    | automatically decorated when resolved in a view. The array key should
    | be your object and the value will be the presenter. Remember to use
    | the class names and not actual instances.
    |
    */

    App\Page::class => App\Presenters\PagePresenter::class,
    App\Post::class => App\Presenters\PostPresenter::class,
    App\User::class => App\Presenters\UserPresenter::class,

];
