<?php

namespace App;

use App\Http\Requests\CreateFolder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Folder extends Model
{
    public function tasks()
    {
        return $this->hasMany('App\Task', 'folder_id', 'id');
    }
}
