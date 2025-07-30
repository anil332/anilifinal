<!DOCTYPE html>
<html>
<head>
    <title>Task List</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f8;
            padding: 40px;
            display: flex;
            justify-content: center;
        }

        .container {
            width: 600px;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #2c3e50;
        }

        a {
            display: inline-block;
            margin-bottom: 20px;
            background-color: #3490dc;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
        }

        a:hover {
            background-color: #2779bd;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            background-color: #f9f9f9;
            margin-bottom: 10px;
            padding: 15px;
            border-left: 5px solid #3490dc;
            border-radius: 5px;
            font-size: 16px;
        }

        li.completed {
            border-left-color: #38c172;
            background-color: #ecfdf5;
            color: #2f855a;
        }

        .priority {
            font-size: 12px;
            color: #999;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Task List</h1>
        <a href="{{ route('tasks.create') }}">Create New Task</a>
        <ul>
            @foreach($tasks as $task)
                <li class="{{ $task->status === 'completed' ? 'completed' : '' }}">
                    <strong>{{ $task->name }}</strong> - {{ ucfirst($task->status) }}
                    <div class="priority">Priority: {{ $task->priority }}</div>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
