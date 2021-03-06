<?php

namespace Bworksio\NovaQuestionable;

use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Bworksio\NovaQuestionable\Http\Middleware\Authorize;

class ToolServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'nova-questionable');

        if (!class_exists('CreateQuestionsTable')) {
            $timestamp = date('Y_m_d_His', time());
            $this->publishes([
                __DIR__ . '/../database/migrations/create_questions_table.php.stub' => $this->app->databasePath() . "/migrations/{$timestamp}_create_questions_table.php",
            ], 'questions-manager-migrations');
        }

        $this->app->booted(function () {
            $this->routes();
        });
        
        Models\Question::observe(Observers\QuestionObserver::class);

        Nova::serving(function (ServingNova $event) {
            //
        });
        Nova::resources([
            Question::class,
            Questionnaire::class,
            Tag::class,
        ]);
    }

    /**
     * Register the tool's routes.
     *
     * @return void
     */
    protected function routes()
    {
        if ($this->app->routesAreCached()) {
            return;
        }

        Route::middleware(['api', Authorize::class])
                ->prefix('questionable')
                ->group(__DIR__.'/../routes/api.php');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
