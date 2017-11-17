<?php

namespace App;

use Silex\Application;

class RoutesLoader
{
    private $app;
    public function __construct(Application $app)
    {
        $this->app = $app;
        $this->instantiateControllers();
    }
    
    private function instantiateControllers()
    {
        $this->app['match.controller'] = function() {
            return new Controllers\MatchController();
        };
    }
    
    public function bindRoutesToControllers()
    {
        $match = $this->app["controllers_factory"];
        
        $match->get('/', "match.controller:list");
        
        $this->app->mount('/', $match);
    }
}