@section('link')
<link rel="stylesheet" href="{{ URL::asset('/css/components/table.css')}}">
@endsection
<x-layout>
    <x-table :decks="$userDecks"></x-table>
</x-layout>