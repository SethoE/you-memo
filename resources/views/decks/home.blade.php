@section('link')
    <link rel="stylesheet" href="{{ URL::asset('/css/components/table.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/css/partials/footer.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/css/partials/pageDescription.css') }}">
@endsection
@section('title')
    <title>{{ $title }}</title>
@endsection
@section('body')
    @include('partials._footer')
@endsection
<x-layout>


    @include('partials._pageDescription');

</x-layout>
