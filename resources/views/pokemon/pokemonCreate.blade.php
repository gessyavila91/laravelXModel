<style>
    form {
        background-color: #2d2d2d;
        color: #fff;
        padding: 20px;
        border-radius: 10px;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        max-width: 800px;
        margin: 0 auto;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    form div {
        margin-bottom: 10px;
        width: calc(50% - 10px);
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
        color: white;
    }

    input[type="text"], select {
        background-color: #1d1d1d;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        display: block;
        width: 100%;
        padding: 5px;
        color: white;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
    }

    form select {
        appearance: none;
        background-repeat: no-repeat;
        background-position: right center;
        background-size: 16px;
        padding-right: 24px;
    }

    form select option {
        color: #d9d9d9;
    }

    button[type="submit"] {
        background-color: #0056b3;
        color: #fff;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        font-size: 18px;
        cursor: pointer;
    }

    form button[type="submit"]:hover {
        background-color: #004087;
        display: block;
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: none;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    form button[type="submit"] {
        display: block;
        margin-top: 20px;
        padding: 10px 20px;
        border-radius: 5px;
        border: none;
        background-color: #1e90ff;
        color: white;
        font-weight: bold;
        cursor: pointer;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
        transition: background-color 0.3s ease;
    }

    form button[type="submit"]:hover {
        background-color: green;
    }

    form div.error {
        font-size: 14px;
        color: red;
        margin-top: 5px;
    }

    form div.success {
        font-size: 14px;
        color: green;
        margin-top: 5px;
    }

</style>

<div class="create-pokemon-form">
    <form method="POST">
        @csrf

        <div class="form-group">
            <label for="number">Number</label>
            <input type="text" name="number" id="number" class="form-control" value="{{ old('number') }}" required>
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
        </div>
        <div class="form-group">
            <label for="type_1">Type</label>
            <select name="type_1" id="type_1" class="form-control" required>
                @foreach(App\Enums\PokemonType::asArray() as $type)
                    <option value="{{ $type }}">{{ $type }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="type_2">Type</label>
            <select name="type_2" id="type_2" class="form-control" required>
                <option>NULL</option>
                @foreach(App\Enums\PokemonType::asArray() as $type)
                    <option value="{{ $type }}">{{ $type }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Pokemon Stats</label>
        </div>

        <div class="form-group">
            <label for="hp">HP</label>
            <input type="text" name="hp" id="hp" class="form-control" value="{{ old('hp') }}" required>
        </div>
        <div class="form-group">
            <label for="attack">Attack</label>
            <input type="text" name="attack" id="attack" class="form-control" value="{{ old('attack') }}" required>
        </div>
        <div class="form-group">
            <label for="defense">Defense</label>
            <input type="text" name="defense" id="defense" class="form-control" value="{{ old('defense') }}" required>
        </div>
        <div class="form-group">
            <label for="spAttack">Special Attack</label>
            <input type="text" name="spAttack" id="spAttack" class="form-control" value="{{ old('spAttack') }}"
                   required>
        </div>
        <div class="form-group">
            <label for="spDefense">Special Defense</label>
            <input type="text" name="spDefense" id="spDefense" class="form-control" value="{{ old('spDefense') }}"
                   required>
        </div>
        <div class="form-group">
            <label for="speed">Speed</label>
            <input type="text" name="speed" id="speed" class="form-control" value="{{ old('speed') }}" required>
        </div>
        <div class="form-group">
            <label for="total">Total</label>
            <input type="text" name="total" id="total" class="form-control" value="{{ old('total') }}" required>

            <button type="submit" class="btn btn-primary">Create Pokemon</button>
        </div>
    </form>
</div>
