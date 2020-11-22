<?php

namespace App\Policies;

use App\Lesson;
use App\User;
use App\Enrollment; 
use Illuminate\Auth\Access\HandlesAuthorization;

class LessonPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any lessons.
     *
     * @param  \App\User  $user
     * @return mixed
     */

    public function show (Lesson $lesson)
    {
     //   return $user->id === $post->user_id;
     return Enrollment::where('courses_id' , $lesson->course->id )->where('cms_users_id' , CRUDBooster::myId())->count() === 1; 
    } 

    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the lesson.
     *
     * @param  \App\User  $user
     * @param  \App\Lesson  $lesson
     * @return mixed
     */
    public function view(User $user, Lesson $lesson)
    {
        //
    }

    /**
     * Determine whether the user can create lessons.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the lesson.
     *
     * @param  \App\User  $user
     * @param  \App\Lesson  $lesson
     * @return mixed
     */
    public function update(User $user, Lesson $lesson)
    {
        //
    }

    /**
     * Determine whether the user can delete the lesson.
     *
     * @param  \App\User  $user
     * @param  \App\Lesson  $lesson
     * @return mixed
     */
    public function delete(User $user, Lesson $lesson)
    {
        //
    }

    /**
     * Determine whether the user can restore the lesson.
     *
     * @param  \App\User  $user
     * @param  \App\Lesson  $lesson
     * @return mixed
     */
    public function restore(User $user, Lesson $lesson)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the lesson.
     *
     * @param  \App\User  $user
     * @param  \App\Lesson  $lesson
     * @return mixed
     */
    public function forceDelete(User $user, Lesson $lesson)
    {
        //
    }
}
