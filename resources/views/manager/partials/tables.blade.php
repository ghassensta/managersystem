<div class="outputs">
    <div class="searchBlock">
        <input type="text" name="search" placeholder="search" id="searchTerm">
        <div class="towobutton" id="searchResults">
            <button onclick="searchByTitle()" name="searchtitle" id="searchTitle">Search by title</button>
            <button onclick="searchByCategory()" name="searchcategory" id="searchCategory">Search by category</button>
        </div>
        <br>
    </div>
</div>

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
    <tbody id="tableBody">
        @foreach ($manager as $m)
            <tr>
                <td>{{ $m->id }}</td>
                <td>{{ $m->title }}</td>
                <td>{{ $m->price }}</td>
                <td>{{ $m->taxes }}</td>
                <td>{{ $m->ads }}</td>
                <td>{{ $m->discount }}</td>
                <td>{{ $m->total }}</td>
                <td>{{ $m->category }}</td>
                <td><button class="update" data-id="{{ $m->id }}">Update</button></td>
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

