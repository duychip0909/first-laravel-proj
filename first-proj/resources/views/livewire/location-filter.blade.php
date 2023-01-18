<div>
    <div class="form-floating mb-3">
        <input type="text" wire:model="query" wire:keyup.debounce="filter" class="form-control" id="floatingInput" placeholder="Search something here..." aria-describedby="floatingInputHelp">
        <label for="floatingInput">Search</label>
    </div>

    <select name="filter" class="form-select mb-4 d-inline-block" id="regionSelect" wire:model="region_id" wire:change="filter">
        <option>Pick one...</option>
        @foreach($locationType as $type)
            <option value="{{$type->id}}">{{$type->region}}</option>
        @endforeach
    </select>
</div>
