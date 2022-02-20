@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <center><h2 class=" mt-5" > Add Task</h2></center>  
            <a href="/home" type="button" class="btn btn-warning mb-3">Back</a>
            <form action="/add-task" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="task" class="form-label">Task</label>
                  <input type="text" required name="task" class="form-control" id="task">
                    @error('task')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                  <label for="date" class="form-label">Date & Time (DeadLine)</label>
                  <input type="datetime-local" required name="date_time" class="form-control" id="date">
                    @error('date_time')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
