<x-app-layout>
  

    <div class="py-12 flex justify-center items-center flex-col">
      <form action="/dashboard" method="POST">
    
        <input type="text" name="task" id="task">
        <button type="submit" class="bg-blue-600 py-2 px-3 text-white">add task</button>
        {{ csrf_field() }}
        </form>

        <div class="task mt-10">
             @foreach(auth()->user()->tasks as $task)
            <div class="flex py-2 mt-1" >
              
                <h4 class="w-64 bg-gray-200 self-center py-1 pl-2">{{ $task->task  }}</h4>
               <a href="/dashboard/{{$task->id}}" class="bg-blue-600 text-white px-3 mr-1 self-center py-1">Edit</a>
               <form action="/dashboard/{{$task->id}}" class="self-center" method="post">
               <button type="submit" name="delete"  class="bg-blue-600 text-white px-2 py-1">Delete</button>
               {{ csrf_field() }}
            </form>
            </div>
             @endforeach
           
        
        </div>

    </div>
</x-app-layout>
