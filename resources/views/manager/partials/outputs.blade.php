<div class="outputs">
    <div class="searchBlock">
        <input type="text" name="search" placeholder="search" id="search">

        <div class="btnsearech">
            <button name="searchtitle" id="serachtitle"> Serach by title</button>
            <button name="searchcategory" id="searchcategory"> Serach by category</button>

        </div>
        <br>

<form action="{{ route('manager.deleteAll') }}" method="POST">
    @csrf
    @method('DELETE')
    @if ($count>0)
    <button  name="searchtitle" id="searchtitle">Delete All ({{ $count }})</button>
    @endif
    </form>

    </div>
</div>
