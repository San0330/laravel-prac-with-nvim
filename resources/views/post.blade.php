<!DOCTYPE html>

<title>My Blog</title>
<link rel='stylesheet' href="/app.css"></link>
<body>
    <article>
       <h1> {{ $post->title }} </h1>
       <p> {{ $post->body }} </p>
    </article>
    <a href="/">Go Back</a>
</body>
</html>
