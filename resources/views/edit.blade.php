<x-app-layout>
    

    <div class="py-12 flex justify-center items-center flex-col">
      
        <form action="/dashboard/{{$task->id}}" method="post">
        
            <input type="text" name="task" value={{ $task->task }} id="task">
            <button type="submit" class="bg-blue-600 text-white px-2 py-2">Update</button>
            {{ csrf_field() }}
        </form>

    </div>
</x-app-layout>
