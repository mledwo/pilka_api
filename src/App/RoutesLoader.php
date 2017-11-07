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
        $this->app['notes.controller'] = function() {
            return new Controllers\NotesController($this->app['notes.service']);
        };
    }
    
    public function bindRoutesToControllers()
    {
        $api = $this->app["controllers_factory"];
        $api->get('/notes', "notes.controller:getAll");
        $this->app->mount('dupa');
    }
}