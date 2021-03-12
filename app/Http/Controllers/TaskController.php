<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
    
    public function create( Request $request)
    {
        $task = new Task();

        if (!$request->task==""){
$task->task = $request->task;
        $task->user_id =  auth()->user()->id;
        $task->save();
        return redirect('/dashboard'); 
        }
        else {
            return redirect('/dashboard') ;
        }

        
    }
    public function edit(Task $task)
    {

    	          
                return view('edit', compact('task'));
                 	
    }

   public function delete(Request $request, Task $task) {
      
        if (isset($_POST['delete'])) {
            $task->delete();
            return redirect('/dashboard');
        }
        else {

            $this->validate($request, [
                    'task' => 'required',
            ]);
            $task->task = $request->task;
            $task->save(); 

            return redirect('/dashboard');

        }
       
    }

    

}
