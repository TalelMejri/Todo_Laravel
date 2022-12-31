<a href="/posts">posts</a>
<a href="/">home</a>

<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Body</th>
            <th>category</th>
            <th>actions</th>
        </tr>

    </thead>
    <tbody>
        @foreach($posts as $post)
            <tr>
                <th>{{$post->id}}</th>
                <td>{{$post->titel}}</td>
                <td>{{substr($post->body,50).'...'}}</td>
                <td>{{$post->categorie->name}}</td>
                <td>
                    <button>show</button>
                    <button>edit</button>
                    <button>delete</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
