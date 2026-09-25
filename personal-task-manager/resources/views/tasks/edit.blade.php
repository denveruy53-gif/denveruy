<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task - Personal Task Manager</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
            padding: 40px;
        }

        .container {
            max-width: 700px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
        }

        h1 {
            margin-bottom: 25px;
        }

        label {
            font-weight: bold;
        }

        input, textarea, select {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            margin-bottom: 18px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
        }

        textarea {
            height: 120px;
            resize: vertical;
        }

        .update-btn {
            background: #2563eb;
            color: white;
            border: none;
            padding: 11px 18px;
            border-radius: 6px;
            cursor: pointer;
        }

        .back-btn {
            display: inline-block;
            margin-left: 10px;
            text-decoration: none;
            color: #2563eb;
        }

        .errors {
            background: #fee2e2;
            padding: 12px;
            border-radius: 6px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Edit Task</h1>

    @if($errors->any())
        <div class="errors">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/tasks/{{ $task->id }}" method="POST">

        @csrf
        @method('PUT')

        <label>Task Name</label>
        <input type="text"
               name="task_name"
               value="{{ $task->task_name }}">

        <label>Description</label>
        <textarea name="description">{{ $task->description }}</textarea>

        <label>Status</label>
        <select name="status">
            <option value="Pending"
                {{ $task->status == 'Pending' ? 'selected' : '' }}>
                Pending
            </option>

            <option value="Completed"
                {{ $task->status == 'Completed' ? 'selected' : '' }}>
                Completed
            </option>
        </select>

        <label>Due Date</label>
        <input type="date"
               name="due_date"
               value="{{ $task->due_date }}">

        <button type="submit" class="update-btn">
            Update Task
        </button>

        <a href="/tasks" class="back-btn">
            Back to Tasks
        </a>

    </form>

</div>

</body>
</html>