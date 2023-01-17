<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class BaseRepository implements BaseRepositoryInterface
{
    protected $model_class;
    /** var Model */
    protected $model;

    public function __construct()
    {
        if ($this->model_class) {
            $this->model = app()->make($this->model_class);
        }
    }

    public function destroy($id) {
        return $this->model->withTrashed()->where('id', $id)->forceDelete();
    }


    public function store($data) {
        $record = $this->model->newQuery()->create($data);
        $record->save();
        $record->refresh();
        return $record;
    }

    public function update($data, $id)
    {
        $record = $this->model->find($id);
        $record->fill($data);
        $record->save();
        $record->refresh();
        return $record;
    }

    public function  hide($id)
    {
        $item = $this->model->withTrashed()->where('id', $id)->first();
        if ($item->deleted_at != null)
            $item->restore();
        else
            $item->delete();
        return $item;
    }
}
