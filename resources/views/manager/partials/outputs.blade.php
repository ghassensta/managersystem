<div class="outputs">
    <div class="searchBlock">
        <input type="text" name="search" placeholder="search" id="search">

        <div class="btnsearech">
            <button name="searchtitle" id="serachtitle"> Serach by title</button>
            <button name="searchcategory" id="searchcategory"> Serach by category</button>

        </div>
        <br>
        @if ($count>0)
        <button  name="searchtitle" id="searchtitle">Produits ({{ $count }})</button>
@endif
    </div>
</div>
