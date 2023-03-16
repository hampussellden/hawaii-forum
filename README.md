Code Review:
1. You should remove .DS_Store
2. Category, Posts and Thread controllers have unused functions making them harder to read.
3. PostsController is the only controller with name in plural. Should probably be PostController.
4. PostsController: 35, 42 - ‘thread’ and $thread should be ‘threadId’ and $threadId for clarity.
5. LoginController: 24 - It would be nice to a have a more specific error message here.
6. PostsController: 29-31 - This comment is needlessly general.  What exactly is this newly created resource? It is probably Laravel's standard comments, but you need to adapt them for this project. Also true for several functions in Category and Posts controllers.
7. PostsController: 34-37 - This validation seems lacking for something that you save into your database. Probably a good idea to validate at least data type.
8. PostsController: 56 - The argument $id should probably be named $threadId for clarity. The name show is also ambiguous.
9. PostsController: 59 - This line is a bit hard to understand. Splitting it up a bit or a short comment would help readability.
10. ThreadController: 36-40 - Validation seems lacking.
11. ThreadController: 44 - $category should be $categoryId for clarity.
12. ThreadController: 52-56 - Perhaps it would be better to use PostsController:create to make the post to avoid duplicate code?
13. ThreadController: 64 - Argument should probably be called $categoryId.
14. web.php: 14 - Instead of redirecting from /home ‘HOME’ should be set to /categories in RouteServiceProvider:20
15. web.php - All routes should follow the same syntax. Now some start with / and some don’t. 
16. threads.blade.php & posts.blade.php - The indentation of these files is a little off.
17. errors.blade.php 2: An isset here would be safer. If $errors is not set this could potenially cause errors otherwise.
18. RegisterUserController - To follow the structure of the rest of the project this should be a resource controller rather than an invoke. This would also make it easier to implement functionality for deleting and editing users in the future.
19. RegisterUserController: 26 - Here you use $request->only() while other controllers use $request->input(). It's minor but it would make the project easier to grasp if you used the same structure everywhere.
20. CreatePostTest: 19 - $category is declared but never used.








<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

-   **[Vehikl](https://vehikl.com/)**
-   **[Tighten Co.](https://tighten.co)**
-   **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
-   **[64 Robots](https://64robots.com)**
-   **[Cubet Techno Labs](https://cubettech.com)**
-   **[Cyber-Duck](https://cyber-duck.co.uk)**
-   **[Many](https://www.many.co.uk)**
-   **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
-   **[DevSquad](https://devsquad.com)**
-   **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
-   **[OP.GG](https://op.gg)**
-   **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
-   **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
