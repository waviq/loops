<?php

namespace App\Observers;

use App\Post;

class PostObserver
{
    public function creating(Post $post)
    {

        //In this method, we check if the slug exist in the database
        //Add an increment number on the end of the slug

        //The $post variable contains all the properties filled right up until the save method call
        //we sluggify the title for the slug
        $originalSlug = $slug = str_slug($post->title);
        $posts = Post::slugLike($slug)->pluck('slug');

        $i=0;
        while($posts->contains($slug)){
            $slug = $originalSlug .'-'. ++$i;
        }

        $post->slug = $slug;
    }
}
