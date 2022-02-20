@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <center><h2 class=" mt-2" > Todo List</h2></center>  
            <a href="/add-task" type="button" class="btn btn-primary float-end">Add task</a>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Task</th>
                    <th scope="col">DeadLine</th>
                    <th scope="col">Create_at</th>
                  </tr>
                </thead>
                <tbody>
                    @if($tasks)
                        @foreach($tasks as $task)
                            <tr>
                                <th scope="row">{{$task->id}}</th>
                                <td>{{$task->task}}</td>
                                <td>{{ Timezone::convertToLocal($task->dead_line) }}</td>
                                <td>{{ Timezone::convertToLocal($task->created_at) }}</td>
                            </tr>      
                        @endforeach
                    @else
                    <tr>
                        <th colspan="4"><p>No Tasks Found</p></th>
                    </tr>    
                        
                    @endif
                  
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
