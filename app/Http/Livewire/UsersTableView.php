<?php

namespace App\Http\Livewire;

use LaravelViews\Views\TableView;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Seedlists;


class UsersTableView extends TableView
{
    protected $model = Seedlists::class;

    public function headers(): array
    {
        return [
            'Title',
            'Published Place',
            'Published Year',
        ];
    }

    public function row($model)
    {
        return [
            $model->title,
            $model->published_place,
            $model->published_year,
        ];
    }
}
