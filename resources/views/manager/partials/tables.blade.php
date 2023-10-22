<table>
    <tr>
        <th>id</th>
        <th>title</th>
        <th>price</th>
        <th>taxes</th>
        <th>ads</th>
        <th>discount</th>
        <th>category</th>
        <th>update</th>
        <th>delete</th>
    </tr>
    <tbody>
        @foreach ($manager as $m)


        <tr>
        <td>{{ $m->id }}</th>
        <td>{{ $m->price }}</td>
        <td>{{ $m->taxes }}</td>
        <td>{{ $m->ads }}</td>
        <td>{{ $m->discount }}</td>
        <td>{{ $m->total }}</td>
        <td>{{ $m->total }}</td>
        <td>{{ $m->category }}</td>
        <td><button id="update">Update</button></td>
        <td><button id="delete">Delete</button></td>

    </tr>
    @endforeach
    </tbody>
</table>
