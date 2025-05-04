<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    @auth

        <p>Logged in. Enjoy slop.</p>
        <form action="/logout" method="post">
            @csrf
            <button>Log out now</button>
        </form>

        <div style="border: 3px solid black">
            <h2>Create a new Post</h2>
            <form action="/create-post" method="POST">
                @csrf
                <input type="text" name="title" placeholder="title">
                <textarea name="body" placeholder="body content..."></textarea>
                <button> Save Post</button>
            </form>
        </div>

    @else

    <div style="border: 3px solid black;">
        <h2>Register</h2>
        <form action="/register" method="POST">
            @csrf
            <input name="name" type="text" placeholder="name">
            <input name="email" type="text" placeholder="email">
            <input name="password" type="text" placeholder="password">
            <button>Register</button>
        </form>
    </div>
    <div style="border: 3px solid black;">
        <h2>Login</h2>
        <form action="/login" method="POST">
            @csrf
            <input name="login-name" type="text" placeholder="name">
            <input name="login-password" type="text" placeholder="password">
            <button>Login</button>
        </form>
    </div>

    @endauth


    
</body>
</html>