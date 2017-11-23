# Laravel JivoChat Blade directive (Laravel 5 Package)

## Installation

To install Laravel JivoChat you need run the follow command inside the path of your project:

```shell
composer require danielmadu/laravel-jivochat
```

After installation is necessary add the following line into `provides` array at the `config/app.php` file:

```php
DanielMadu\JivoChat\JivoChatServiceProvider::class,
```

Run the command bellow to publish the configuration file `config/jivochat.php`:

```shell
php artisan vendor:publish --provider="DanielMadu\JivoChat\JivoChatServiceProvider"
```

Open the configuration file `config/jivochat` and configure with your widget_id located at the chat code provided by the JivoChat

# Usage

Add the directive `@jivochat` at the footer of your code before the closing tag `</body>`
