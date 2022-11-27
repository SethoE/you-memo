@section('link')
    <link rel="stylesheet" href="{{ URL::asset('/css/decks/create.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('/css/components/decktype-selector.css') }}" />
    <script src="/javascript/decks/create.js" type="text/javascript" defer></script>
@endsection

<x-layout>
    <!--surround the select box with a "custom-select" DIV element. Remember to set the width:-->

    <div class="cardContainer">
        <div class="selectionContainer">
            <h2>Choose your deck type front:</h2>
            <x-decktype-selector-front :content_types="$content_types">

            </x-decktype-selector-front>
        </div>
    </div>


    <div class="cardContainer" id="oneInputFormText_front">
        <form action="/decks" method="POST" enctype="multipart/form-data">
            @csrf
            <input required id="oneInput_content_type_id_front" hidden>
            <div class="formLine">
                <label for="text" class="formLable">
                    Text:
                </label>
                <textarea required pattern="[A-Za-z0-9]+" class="formInput" name="text_front" rows="10" required> {{ old('text') }} </textarea>
                @error('description')
                    <p class="errorMessage">{{ $message }}</p>
                @enderror
            </div>
            <div class="formLine">
                <button type="submit" class="submitButton">
                    Submit form
                </button>
            </div>
        </form>
    </div>

    <div class="cardContainer" id="oneInputFormMedia_front">
        <form action="/decks" method="POST" enctype="multipart/form-data">
            @csrf
            <input required id="oneInput_content_type_id_front" hidden>
            <div class="formLine">
                <label for="text" id="labelValue_front" class="formLable">
                </label>
                <input required type="file" id="oneInputFieldMedia_front" class="formInput" />
                @error('image')
                    <p class="errorMessage">{{ $message }}</p>
                @enderror
                @error('audio')
                    <p class="errorMessage">{{ $message }}</p>
                @enderror
                @error('video')
                    <p class="errorMessage">{{ $message }}</p>
                @enderror
            </div>

            <div class="formLine">
                <button type="submit" class="submitButton">
                    Submit form
                </button>
            </div>
        </form>
    </div>

    <div class="cardContainer" id="twoInputForm_front">
        <form action="/decks">
            <input required id="twoInput_content_type_id_front" hidden>
            <div class="formLine">
                <label for="text" class="formLable">
                    Text:
                </label>
                <textarea required class="formInput" name="text_front" rows="10" placeholder="Your text" required> {{ old('text') }} </textarea>
                @error('text')
                    <p class="errorMessage">{{ $message }}</p>
                @enderror
            </div>
            <div class="formLine">
                <label id="twoInputLabelValue_front" for="image" class="formLable">

                </label>
                <input required type="file" id="twoInputField_front" class="formInput"/>
                @error('logo')
                    <p class="errorMessage">{{ $message }}</p>
                @enderror
            </div>
            <div class="formLine">
                <button type="submit" class="submitButton">
                    Submit form
                </button>
            </div>
        </form>
    </div>

    <div class="cardContainer">
        <div class="selectionContainer">
            <h2>Choose your deck type back:</h2>
            <x-decktype-selector-back :content_types="$content_types">

            </x-decktype-selector-back>
        </div>
    </div>


    <div class="cardContainer" id="oneInputFormText_back">
        <form action="/decks" method="POST" enctype="multipart/form-data">
            @csrf
            <input required id="oneInput_content_type_id_back" hidden>
            <div class="formLine">
                <label for="text" class="formLable">
                    Text:
                </label>
                <textarea required class="formInput" name="text_back" rows="10" placeholder="Your text" required> {{ old('text') }} </textarea>
                @error('description')
                    <p class="errorMessage">{{ $message }}</p>
                @enderror
            </div>
            <div class="formLine">
                <button type="submit" class="submitButton">
                    Submit form
                </button>
            </div>
        </form>
    </div>

    <div class="cardContainer" id="oneInputFormMedia_back">
        <form action="/decks" method="POST" enctype="multipart/form-data">
            @csrf
            <input required id="oneInput_content_type_id_back" hidden>
            <div class="formLine">
                <label for="text" id="labelValue_back" class="formLable">
                </label>
                <input required type="file" id="oneInputFliedMedia_back" class="formInput" />
                @error('image')
                    <p class="errorMessage">{{ $message }}</p>
                @enderror
                @error('audio')
                    <p class="errorMessage">{{ $message }}</p>
                @enderror
                @error('video')
                    <p class="errorMessage">{{ $message }}</p>
                @enderror
            </div>

            <div class="formLine">
                <button type="submit" class="submitButton">
                    Submit form
                </button>
            </div>
        </form>
    </div>

    <div class="cardContainer" id="twoInputForm_back">
        <form action="/decks">
            <input required id="twoInput_content_type_id_back" hidden>
            <div class="formLine">
                <label for="text" class="formLable">
                    Text:
                </label>
                <textarea required class="formInput" name="text_back" rows="10" placeholder="Your text" required> {{ old('text') }} </textarea>
                @error('text')
                    <p class="errorMessage">{{ $message }}</p>
                @enderror
            </div>
            <div class="formLine">
                <label id="twoInputLabelValue_back" for="image" class="formLable">

                </label>
                <input required type="file" id="twoInputField_back" class="formInput"/>
                @error('logo')
                    <p class="errorMessage">{{ $message }}</p>
                @enderror
            </div>
            <div class="formLine">
                <button type="submit" class="submitButton">
                    Submit form
                </button>
            </div>
        </form>
    </div>
</x-layout>
