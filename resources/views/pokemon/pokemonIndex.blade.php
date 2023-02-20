<style>
    /* Estilo para la tabla de Pokemon */
    table {
        color: #fff;
        background-color: #2d2d2d;
        border-collapse: collapse;
        max-width: 800px;
        font-size: 1.2rem;
        margin: 0 auto;
        gap: 20px;
    }

    th, td {
        padding: 0.5rem;
        text-align: center;
    }

    th {
        background-color: #ffcb05;
        font-weight: bold;
    }

    tr:nth-child(even) {
        background-color: #494949;
    }

    /* Estilo para los botones de acción */
    .action-btn {
        background-color: #007bff;
        display: inline-block;
        padding: 0.5rem 1rem;
        border: none;
        border-radius: 0.5rem;
        color: white;
        text-decoration: none;
        margin-right: 0.5rem;
        font-size: 1rem;
        cursor: pointer;
    }

    .action-btn.delete {
        background-color: #ff2d2d;
        color: #fff;
        border: none;
        padding: 0.5rem 1rem;
        border-radius: 0.25rem;
        font-size: 1rem;
        cursor: pointer;
    }

    .action-btn.edit {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 0.5rem 1rem;
        border-radius: 0.25rem;
        font-size: 1rem;
        cursor: pointer;
    }

    .action-btn:hover {
        opacity: 0.8;
    }

    /* Estilo para los iconos de tipo de Pokemon */
    .pokemon-types {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .type-icon {
        display: inline-block;
        width: 20px;
        height: 20px;
        background-size: cover;
        margin-right: 4px;
    }

    .type-icon.Normal {
        background-image: url('/assets/pokemon/images/types/Pokemon_Type_Icon_Normal.svg');
    }

    .type-icon.Fire {
        background-image: url('/assets/pokemon/images/types/Pokemon_Type_Icon_Fire.svg');
    }

    .type-icon.Water {
        background-image: url('/assets/pokemon/images/types/Pokemon_Type_Icon_Water.svg');
    }

    .type-icon.Electric {
        background-image: url('/assets/pokemon/images/types/Pokemon_Type_Icon_Electric.svg');
    }

    .type-icon.Grass {
        background-image: url('/assets/pokemon/images/types/Pokemon_Type_Icon_Grass.svg');
    }

    .type-icon.Ice {
        background-image: url('/assets/pokemon/images/types/Pokemon_Type_Icon_Ice.svg');
    }

    .type-icon.Fighting {
        background-image: url('/assets/pokemon/images/types/Pokemon_Type_Icon_Fighting.svg');
    }

    .type-icon.Poison {
        background-image: url('/assets/pokemon/images/types/Pokemon_Type_Icon_Poison.svg');
    }

    .type-icon.Ground {
        background-image: url('/assets/pokemon/images/types/Pokemon_Type_Icon_Ground.svg');
    }

    .type-icon.Flying {
        background-image: url('/assets/pokemon/images/types/Pokemon_Type_Icon_Flying.svg');
    }

    .type-icon.Psychic {
        background-image: url('/assets/pokemon/images/types/Pokemon_Type_Icon_Psychic.svg');
    }

    .type-icon.Bug {
        background-image: url('/assets/pokemon/images/types/Pokemon_Type_Icon_Bug.svg');
    }

    .type-icon.Rock {
        background-image: url('/assets/pokemon/images/types/Pokemon_Type_Icon_Rock.svg');
    }

    .type-icon.Ghost {
        background-image: url('/assets/pokemon/images/types/Pokemon_Type_Icon_Ghost.svg');
    }

    .type-icon.Dragon {
        background-image: url('/assets/pokemon/images/types/Pokemon_Type_Icon_Dragon.svg');
    }

    .type-icon.Dark {
        background-image: url('/assets/pokemon/images/types/Pokemon_Type_Icon_Dark.svg');
    }

    .type-icon.Steel {
        background-image: url('/assets/pokemon/images/types/Pokemon_Type_Icon_Steel.svg');
    }

    .type-icon.Fairy {
        background-image: url('/assets/pokemon/images/types/Pokemon_Type_Icon_Fairy.svg');
    }

    /*type Name*/
    .type-name {
        color: #fff;
        font-weight: bold;
        text-transform: capitalize;
    }

    .type-name.Normal {
        color: #a8a878;
    }

    .type-name.Fire {
        color: #f08030;
    }

    .type-name.Water {
        color: #6890f0;
    }

    .type-name.Electric {
        color: #f8d030;
    }

    .type-name.Grass {
        color: #78c850;
    }

    .type-name.Ice {
        color: #98d8d8;
    }

    .type-name.Fighting {
        color: #c03028;
    }

    .type-name.Poison {
        color: #a040a0;
    }

    .type-name.Ground {
        color: #e0c068;
    }

    .type-name.Flying {
        color: #a890f0;
    }

    .type-name.Psychic {
        color: #f85888;
    }

    .type-name.Bug {
        color: #a8b820;
    }

    .type-name.Rock {
        color: #b8a038;
    }

    .type-name.Ghost {
        color: #705898;
    }

    .type-name.Dragon {
        color: #7038f8;
    }

    .type-name.Dark {
        color: #705848;
    }

    .type-name.Steel {
        color: #b8b8d0;
    }

    .type-name.Fairy {
        color: #ee99ac;
    }
</style>

<table>
    <thead>
    <tr>
        <th> Number</th>
        <th> Name</th>
        <th> Type</th>
        <th> Hp</th>
        <th> Attack</th>
        <th> Defense</th>
        <th> Special Attack</th>
        <th> Special Defense</th>
        <th> Speed</th>
        <th> Total Base Stats</th>
        <th> Action</th>

    </tr>
    </thead>
    <tbody>
    @foreach ($pokemons as $pokemon)
        <tr>

            <td>{{ $pokemon->number }}</td>
            <td>{{ $pokemon->name }}</td>
            <td>
                <div class="pokemon-types">
                    <span class="type-icon {{ $pokemon->type_1 }}"></span>
                    <span class="type-name {{ $pokemon->type_1 }}">{{ $pokemon->type_1 }}</span>
                    @if($pokemon->type_2)
                        <span class="type-icon {{ $pokemon->type_2 }}"></span>
                        <span class="type-name {{ $pokemon->type_2 }}">{{ $pokemon->type_2 }}</span>
                    @endif
                </div>
            </td>
            {{--Pokemon Stats--}}
            <td>{{ $pokemon->hp }}</td>
            <td>{{ $pokemon->attack }}</td>
            <td>{{ $pokemon->defense }}</td>
            <td>{{ $pokemon->spAttack }}</td>
            <td>{{ $pokemon->spDefense }}</td>
            <td>{{ $pokemon->speed }}</td>
            <td>{{ $pokemon->totalStats() }}</td>
            <td>
                <a class="action-btn edit">Editar</a>
                <form method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="action-btn delete">Eliminar</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
