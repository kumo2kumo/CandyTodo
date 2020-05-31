<?php

namespace App\Http\Controllers;
// 追記
use App\Folder;
use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(int $id)
    {
        $folders = Folder::all();
        $current_folder = Folder::find($id);

        // ↑に紐づくタスクの召喚
        // $tasks = Task::where('folder_id', $current_folder->id)->get();
        $tasks = $current_folder->tasks()->get();

        return view('tasks/index', [
            'folders' => $folders,
            //選択フォルダだけ色変えるためにデータ渡す
            'current_folder_id' => $id,
            'tasks' => $tasks
        ]);
    }
}
