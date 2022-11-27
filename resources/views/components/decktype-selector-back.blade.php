@props(['content_types'])
<div class="select">
    <select id="section_content_type_back" onchange="showFormBack()">
        @if (isset($content_types))
            <option value="0">Select a deck type:</option>
            @foreach ($content_types as $content_type)
                <option value="{{ $content_type->content_type_id }}">{{ $content_type->content_type_name }}</option>
            @endforeach
        @else
            <option value="0">Content-Types could not be fetched</option>
        @endif
    </select>
</div>
