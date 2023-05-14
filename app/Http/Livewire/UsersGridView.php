<?php

namespace App\Http\Livewire;

use App\Models\Seedlists;
use Illuminate\Database\Eloquent\Builder;
use LaravelViews\Facades\UI;
use LaravelViews\Views\GridView;

use Illuminate\Support\Facades\DB;

class UsersGridView extends GridView
{
    /**
     * Sets a initial query with the data to fill the grid view
     *
     * @return Builder Eloquent query
     */
    public function repository(): Builder
    {
        return Seedlists::query();
    }
    /**
     * Sets the data to every card on the view
     *
     * @param $model Current model for each card
     */
    public function card($item)
    {
        return [
            'image' => $item->filename,
            'title' => $item->title,
            'published_place' => $item->published_place,
            'published_year' => $item->published_year,
        ];
    }

    public function onCardClick($model)
    {
        echo 'hello';
    }
    

}
