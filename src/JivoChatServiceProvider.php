<?php

namespace DanielMadu\JivoChat;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class JivoChatServiceProvider extends ServiceProvider
{
    protected $widget_id;

    public function boot()
    {
        $this->publishes([__DIR__ . '/config/jivochat.php' => config_path('jivochat.php')]);
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'jivochat');
        $this->widget_id = config('jivochat.widget_id');
        $this->customBlade();

    }

    public function register()
    {
        $this->app->singleton('jivochat', function ($app){
            return new JivoChat($this->widget_id);
        });
    }

    protected function customBlade()
    {
        Blade::directive('jivochat', function (){
            return '<?php echo app()->jivochat->render(); ?>';
        });
    }
}