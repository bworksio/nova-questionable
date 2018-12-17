<?php

namespace Bworksio\NovaQuestionable;

use Laravel\Nova\Nova;
use Laravel\Nova\Tool;

class NovaQuestionable extends Tool
{
    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {
        Nova::script('nova-questionable', __DIR__.'/../dist/js/tool.js');
        Nova::style('nova-questionable', __DIR__.'/../dist/css/tool.css');
    }

    /**
     * Register the tool's routes.
     *
     * @return void
     */
    static public function sayHi()
    {
        return response()->json([
            'hi' => true
        ]);
    }

    /**
     * Build the view that renders the navigation links for the tool.
     *
     * @return \Illuminate\View\View
     */
    public function renderNavigation()
    {
        return view('nova-questionable::navigation');
    }
}
