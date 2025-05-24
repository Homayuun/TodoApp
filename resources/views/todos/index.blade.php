<!DOCTYPE html>
<html>

<head>
    <title>Todo List</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>My Todos</h1>

    <form action="/todos" method="POST">
        @csrf
        <input type="text" name="title" placeholder="New todo..." required>
        <button type="submit">Add</button>
    </form>

    <ul>
        @foreach($todos as $todo)
        <li class="{{ $todo->completed ? 'done' : '' }}">
            <span>{{ $todo->title }} - {{ $todo->completed ? 'Done' : 'Not done' }}</span>

            <div class="actions">
                @if(!$todo->completed)
                <form action="/todos/{{ $todo->id }}/complete" method="POST">
                    @method('PATCH')
                    @csrf
                    <button class="add-btn" type="submit">Done</button>
                </form>
                @endif

                <form action="/todos/{{ $todo->id }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="delete-btn" type="submit">Delete</button>
                </form>
            </div>
        </li>
        @endforeach
    </ul>
</body>

</html>