@props([
'label' => false,
'nameid' => $nameid,
'tags' => [],

])
{{-- TAG OPTION REPLACED BY <SELECT> ON SMALLEST VIEWPORTS--}}
<div class="invisible hidden sm:visible sm:block flex flex-col mb-2">

    <input type="hidden" name="tagid" id="tagid" value="0" />

    <label for="{{ str_replace(' ','',$nameid) }}" class="font-bold">
        {{ ucwords($label) }}
    </label>

    <div class="flex flex-row flex-wrap space-x-4 mb-2">

        @forelse($tags AS $tag)
            <span
                id="{{ 'tag_'.$tag->id }}"
                style="background-color: rgba(0,0,0,0.1)"
                class="tag uppercase px-2 border border-black rounded-full cursor-pointer"
                onclick="updateTagId({{ $tag->id }})"
                onfocus="updateTagId({{ $tag->id }})"
                tabindex="0"
                value="{{ $tag->id }}"
            >
                {{ $tag->descr }}
            </span>
        @empty
            <button>No tags found</button>
        @endif

    </div>
    <div>
        <x-forms.input label="" nameid="new_arrangement_type" placeholder="Add new type..." />
    </div>
    <div>
        @error('arrangement_type')
        <div class="bg-red-100 text-red-800 border-red-800 rounded-lg font-bold mb-2 px-2">
            {{ $message }}
        </div>
        @enderror
    </div>

    <script>
        //store selected value and highlight selected tag
        function updateTagId(tagid)
        {
            var id = 'tag_'+tagid;
            var tags = document.getElementsByClassName('tag');

            document.getElementById('tagid').value = tagid;

            //loop through all tags
            for(i=0; i<tags.length; i++){

                var loopvalue = tags[i].getAttribute('value');
                var loopid = 'tag_'+loopvalue;

                if(loopvalue == tagid){
                    document.getElementById(loopid).style.backgroundColor = 'yellow';
                }else{
                    document.getElementById(loopid).style.backgroundColor= 'rgba(0,0,0,0.1)';
                }
            };

        }
    </script>
</div>

{{-- SELECT OPTION REPLACED BY <TAGS> ON ALL BUT SMALLEST VIEWPORTS --}}
<div class="visible md:invisible block sm:hidden flex flex-col mb-2">

    <label for="{{ str_replace(' ','',$nameid) }}" class="font-bold">
        {{ ucwords($label) }}
    </label>

    <select name="tagid" class="mb-2">
        <option value="0">Select type</option>
        @forelse($tags AS $tag)
            <option value="{{ $tag->id }}">{{ $tag->descr }}</option>
        @empty
            <option value="0">No options found</option>
        @endif
    </select>

    <div>
        <x-forms.input label="" nameid="new_arrangement_type" placeholder=" Or add new type..." />
    </div>
    <div>
        @error('arrangement_type')
        <div class="bg-red-100 text-red-800 border-red-800 rounded-lg font-bold mb-2 px-2">
            {{ $message }}
        </div>
        @enderror
    </div>
</div>
