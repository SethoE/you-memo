<x-layout>
    <table class="dataTable">
        <thead>
            <tr>
                <th>Deck id:</th>
                <th>User id:</th>
                <th>Deck name:</th>
                <th>Deck status:</th>
                <th>Last used at:</th>
                <th>Aktive since:</th>
                <th>Create at:</th>
                <th>Updated at:</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($decks as $deck)
                <tr>
                    <td>{{ $deck->deck_id }}</td>
                    <td>{{ $deck->user_id }}</td>
                    <td>{{ $deck->deck_name }}</td>
                    <td>{{ $deck->deck_status }}</td>
                    @if ($deck->last_used_at !== null)
                        <td>{{ $deck->last_used_at }}</td>
                    @else
                        <td>Null</td>
                    @endif
                    @if ($deck->aktive_since !== null)
                        <td>{{ $deck->aktive_since }}</td>
                    @else
                        <td>Null</td>
                    @endif
                    <td>{{ $deck->created_at }}</td>
                    <td>{{ $deck->updated_at }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>

</x-layout>
