<div>
    <div class="outputs">
        <div class="searchBlock">
            <input type="text" wire:model="searchTerm" name="search" placeholder="search">
            <div class="towobutton" id="searchResults">
                <button wire:click="searchByTitle" name="searchtitle">Search by title</button>
                <button wire:click="searchByCategory" name="searchcategory">Search by category</button>
                <button wire:click="displayAll" name="displayAll">Display All</button>
                <a class="pdf" href="{{ route('pdf_data_table') }}">Print All</a>
            </div>

            <br>
            @if ($count > 0)
                <button wire:click="deleteAll" name="deleteAll">Delete All ({{ $count }})</button>
            @else
                <p>No product</p>
            @endif
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
        <tbody>
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
                        <button wire:click="delete({{ $m->id }})">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
