<div>
    <header>Add A New <a href="{{ route('library.composition') }}" title="Single title">Composition</a> or <b>Collection</b></header>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{ route('library.collection.store') }}" >

        @csrf

        <div>
            <label for="title">Collection Title</label>
            <input type="text" name="title" id="title" value="" required />
            <span class="">(Medley, book of music, sectioned masterwork, etc.)</span>
            <div id="search-results" name="search-results" ></div>
        </div>

        <div>
            <label for="subtitle">subTitle</label>
            <input type="text" name="subtitle" id="subtitle" value="" />
        </div>

        <div>
            <label for="arrangement_type_id">Arrangement Type</label>
            <select name="arrangement_type_id">
                <option value="0">Select Type</option>
                @foreach(\App\Models\Library\ArrangementType::all() AS $arrangementtype)
                    <option value="{{ $arrangementtype->id }}">{{ ucwords($arrangementtype->descr) }}</option>
                @endforeach

            </select>
        </div>

        <hr />

        <div>
            <label for="item-title">Title</label>
            <input type="text" name="item-title" id="item-title" value="" />
        </div>

        <div>
            <label for="item-subtitle">subTitle</label>
            <input type="text" name="item-subtitle" id="item-subtitle" value="" />
        </div>

        <div>
            <label for="item-arrangement_type_id">Arrangement Type</label>
            <select name="item-arrangement_type_id">
                <option value="0">Select Type</option>
                @foreach(\App\Models\Library\ArrangementType::all() AS $arrangementtype)
                    <option value="{{ $arrangementtype->id }}">{{ ucwords($arrangementtype->descr) }}</option>
                @endforeach

            </select>
        </div>

        @role('library_owner')
            <div>
                <label for=""></label>
                <input type="submit" name="submit" id="submit" value="Add" />
            </div>
        @else
            <div>
                Only the library owner can Add a collection
            </div>
        @endrole

    </form>
</div>
