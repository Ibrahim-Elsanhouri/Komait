<?php

namespace App\Providers;
use App\Policies\LessonPolicy;
use App\Lesson;
use CRUDBooster;
use App\Enrollment;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\Response;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [

      'App\Model' => 'App\Policies\ModelPolicy',
      'App\Lesson' => 'App\Policies\LessonPolicy'
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {


        $this->registerPolicies();

        //
    }
}
