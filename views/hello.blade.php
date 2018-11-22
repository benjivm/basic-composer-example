<!DOCTYPE html>
<html>
<head>
    <title>Example Composer Project</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="/">Basic Composer Example</a>

        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="https://github.com/benjivm/basic-composer-example">View project on GitHub</a>
            </li>
        </ul>
    </nav>

    <div class="container my-5">
        @foreach($posts as $post)
        <div class="card shadow mb-4">
            <div class="card-header font-weight-bold">{{ $post->title }}</div>
            <div class="card-body">
                {{ $post->body }}
            </div>
        </div>
        @endforeach
    </div>
</body>
</html>