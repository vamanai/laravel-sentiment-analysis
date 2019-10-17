<?php

namespace Sentiment;


use Illuminate\Support\ServiceProvider;
use Sentiment\classes\Vaman;

class SentimentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind('vaman',function(){
            return new Vaman();
        });
    }
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }



}