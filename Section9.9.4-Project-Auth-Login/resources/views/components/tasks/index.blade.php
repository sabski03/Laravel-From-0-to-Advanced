<div class="card pt-3 bg-dark">
    @if($tasks->count())
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Date</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            @foreach($tasks as $task)
                <tbody>
                <tr>
                    <td>{{$task->id}}</td>
                    <td>{{$task->name}}</td>
                    <td>{{$task->created_at->diffForHumans()}}</td>
                    <td>
                        <x-tasks.delete-model modelRoute="tasks.destroy" :modelId="$task->id"></x-tasks.delete-model>
                    </td>
                </tr>
                </tbody>
            @endforeach
        </table>
    @else
        <h1 class="text-center bg-dark text-danger">No Tasks</h1>
    @endif
</div>
