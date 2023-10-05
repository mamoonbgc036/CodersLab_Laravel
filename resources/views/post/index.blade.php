<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Posts</h1>
<table>
  <tr>
    <th>Id</th>
    <th>UserId</th>
    <th>Title</th>
    <th>Body</th>
  </tr>
  @foreach($allPost as $post)
  <tr>
    <td>{{ $post->id }}</td>
    <td>{{ $post->userId }}</td>
    <td>{{ $post->title }}</td>
    <td>{{ $post->body }}</td>
  </tr>
  @endforeach
</table>
    {{ $allPost }}
</body>
</html>