<!DOCTYPE html>
<html>
<head>
    <title>Create Task</title>
</head>
<body>
    <h1>Create a Task</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name"><br><br>

        <label>Status:</label>
        <select name="status">
            <option value="pending">Pending</option>
            <option value="completed">Completed</option>
        </select><br><br>

        <label>Priority:</label>
        <input type="number" name="priority" min="1" max="5"><br><br>

        <button type="submit">Create Task</button>
    </form>


    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f7fa;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding-top: 50px;
        }

        .container {
            background-color: #fff;
            padding: 25px 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
            color: #444;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #3490dc;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2779bd;
        }

        .error-messages {
            background-color: #ffe6e6;
            color: #cc0000;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ffcccc;
            border-radius: 4px;
        }
    </style>

</body>
</html>


