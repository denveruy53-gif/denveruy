<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Task Manager</title>

```
<style>
    body {
        font-family: Arial, sans-serif;
        background: #f4f6f8;
        margin: 0;
        padding: 40px;
    }

    .container {
        max-width: 1000px;
        margin: auto;
        background: white;
        padding: 30px;
        border-radius: 12px;
    }

    h1 {
        margin-bottom: 20px;
    }

    .add-btn {
        display: inline-block;
        background: #2563eb;
        color: white;
        padding: 10px 16px;
        text-decoration: none;
        border-radius: 6px;
        margin-bottom: 20px;
    }

    .success {
        background: #dcfce7;
        padding: 12px;
        border-radius: 6px;
        margin-bottom: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 12px;
        border-bottom: 1px solid #ddd;
        text-align: left;
    }

    th {
        background: #f1f5f9;
    }

    .status {
        font-weight: bold;
    }

    .edit-btn {
        color: #2563eb;
        text-decoration: none;
        margin-right: 8px;
    }

    .delete-btn {
        background: #dc2626;
        color: white;
        border: none;
        padding: 7px 10px;
        border-radius: 5px;
        cursor: pointer;
    }

    .empty {
        text-align: center;
        padding: 30px;
        color: #666;
    }
</style>
```

</head>

<body>

<div class="container">

```
<h1>Personal Task Manager</h1>

<a href="/tasks/create" class="add-btn">
    + Add New Task
</a>

@if(session('success'))
    <div class="success">
        {{ session('success') }}
    </div>
@endif

@if($tasks->count() > 0)

    <table>
        <tr>
            <th>Task Name</th>
            <th>Description</th>
            <th>Status</th>
            <th>Due Date</th>
            <th>Actions</th>
        </tr>

        @foreach($tasks as $task)

            <tr>
                <td>{{ $task->task_name }}</td>
                <td>{{ $task->description }}</td>
                <td class="status">{{ $task->status }}</td>
                <td>{{ $task->due_date }}</td>

                <td>
                    <a href="/tasks/{{ $task->id }}/edit" class="edit-btn">
                        Edit
                    </a>

                    <form action="/tasks/{{ $task->id }}"
                          method="POST"
                          style="display:inline;">

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="delete-btn">
                            Delete
                        </button>

                    </form>
                </td>
            </tr>

        @endforeach

    </table>

@else

    <div class="empty">
        No tasks yet.
    </div>

@endif
```

</div>

</body>
</html>