<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class TaskController extends Controller
{
    public function index()
    {
        // Melakukan Query
        // Syntax dibawah sama dengan "SELECT * FROM task"
        // fungsi get berguna untuk mengambil semua data yang ada di table Task

        // $query = DB::table('tasks')->get();

        // Order By
        // $query = DB::table('tasks')->orderBy('id', 'desc')->get(); //melakukan orderBy

        // Penulisan jika diambil dari model
        // $query = Task::orderBy('id', 'desc')->get();
        $query = Task::orderBy('id', 'desc')->get();

        // ddd($query);
        return view('task.index', ['queryInsert' => $query]);
    }

    public function store(TaskRequest $request)
    {
        // Membuat validasi atau message ketika yang diinput itu kosong, maka kita tampilkan sebuah pesan atau validasi
        $request->validate([
                    // Untuk Melihat documentasi dari validasi, cek di resource/lang/validation
            'inputList' => ['required', 'min:3']
        ]);

        // varibel $request itu sama dengan $_POST
        // Melakukan Insert
                //DB::table('tasks')->insert([
                // syntax = fieldDB => getData->namaInputannya di value form
                // 'list' => $request->inputList,
                // ]);

                //Get data from Task Model
                // Jika kita menggunakan fungsi create, maka di file task model kita haru membuat varibel protected yang bernilai array
                Task::create([
                    'list' => $request->inputList,
                    'mark' => false
                ]);

                // Kita melakukan redirect, supaya disaat kita memasukkn data tsb. dia bisa kembali ke halaman semula
                // return redirect('task');
                return back();
    }

    public function edit(Task $task)
    {
                            // Untuk melakukan fetch maka menggunaka fungsi first()
        // $query = DB::table('tasks')->where('id', $id)->first();
        // dd($query);

        // cara 2
        // $query = Task::find($id);

        return view('task/edit', ['query' => $task]);
    }

    public function update(TaskRequest $request, $id)
    {

        // DB::table('tasks')->where('id', $id)->update(['list' => $request->inputList]);

        //
        Task::find($id)->update([
            'list' => $request->inputList,
            'mark' => false
        ]);

        return redirect('task');
    }

    public function destroy($id)
    {
        // DB::table('tasks')->where('id', $id)->delete();

        //
        Task::find($id)->delete();

        return back();

    }


}
