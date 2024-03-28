@extends("layouts.app")

@section("content")
    <h1 class="text-4xl">Task List</h1>
    @foreach($tasks as $task)
        <div class="card @if($task->isCompleted()) border-success @endif mb-3">
            <div class="card-body">
                <p>
                    @if($task->isCompleted())
                        <span class="badge text-bg-success">Completed</span>
                    @endif
                    {{$task->description}}
                </p>
                @if(!$task->isCompleted())
                    <form action="/tasks/{{$task->id}}" method="POST">
                        @method('PATCH')
                        @csrf
                        <div class="d-grid">
                            <button type="submit" class="btn btn-light"> Complete</button>
                        </div>
                    </form>
                @else
                    <form action="/tasks/{{$task->id}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <div class="d-grid">
                            <button type="submit" class="btn btn-danger"> Delete</button>
                        </div>
                    </form>
                @endif
            </div>
        </div>
    @endforeach
    <div class="d-grid">
        <a href="/tasks/create" class="btn btn-primary btn-lg">
            New Task
        </a>
    </div>
@endsection

