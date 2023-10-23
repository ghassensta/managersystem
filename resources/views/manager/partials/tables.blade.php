<table>
    <thead>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>price</th>
            <th>taxes</th>
            <th>ads</th>
            <th>discount</th>
            <th>total</th>
            <th>category</th>
            <th>update</th>
            <th>delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($manager as $m)
            <tr>
                <td>{{ $m->id }}</td>
                <td>{{ $m->title }}</td> <!-- Correction ici -->
                <td>{{ $m->price }}</td>
                <td>{{ $m->taxes }}</td>
                <td>{{ $m->ads }}</td>
                <td>{{ $m->discount }}</td>
                <td>{{ $m->total }}</td>
                <td>{{ $m->category }}</td>
                <td><button class="update" data-id="{{ $m->id }}">Update</button></td> <!-- Correction ici -->
                <td>
                    <form action="{{ route('manager.delete', ['id' => $m->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
                            </tr>
        @endforeach
    </tbody>
</table>
