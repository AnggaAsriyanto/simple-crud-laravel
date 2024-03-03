<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <main>

          @auth
               <h4>Your logedin</h4>
               <form action="/logout" method="POST">
                    @csrf
                    <button>Logout</button>
               </form>

               <div>
                    <h3>Create a post</h3>
                    <form action="/create-post" method="POST">
                         @csrf
                         <input type="text" name="title" placeholder="Title">
                         <textarea name="body" placeholder="Body.."></textarea>
                         <button>Save</button>
                    </form>
               </div>

               <div>
                    <h4>Your Posts</h4>
                    @foreach ($posts as $post)
                        <div>
                              <h1>{{$post['title']}}</h1>
                              <p>{{$post['body']}}</p>
                              <p><a href="/edit-post/{{$post->id}}" method="POST">Edit Post</a></p>
                              <form action="/delete-post/{{$post->id}}" method="POST">
                                   @csrf
                                   @method("DELETE")
                                   <button>Delete</button>
                              </form>
                        </div>
                    @endforeach
               </div>
          @else
               <div>
                    <h2>Register</h2>
                    <form action="/register" method="POST">
                         @csrf
                         <input name="name" type="text" placeholder="name">
                         <input name="email" type="text" placeholder="email">
                         <input name="password" type="password" placeholder="password">
                         <button>Submit</button>
                    </form>
               </div>

               <div>
                    <h2>Login</h2>
                    <form action="/login" method="POST">
                         @csrf
                         <input name="loginname" type="text" placeholder="name">
                         <input name="loginpassword" type="password" placeholder="password">
                         <button>Submit</button>
                    </form>
               </div>
          @endauth
     </main>
</body>
</html>