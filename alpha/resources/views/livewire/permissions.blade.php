<div>
    @if (session()->has('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form wire:submit.prevent="createPermission">
        <input type="text" wire:model="name" placeholder="Nombre del permiso">
        <textarea wire:model="description" placeholder="Descripción"></textarea>
        <button type="submit">Crear Permiso</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($permissions as $permission)
                <tr>
                    <td>{{ $permission->name }}</td>
                    <td>{{ $permission->description }}</td>
                    <td>
                        <button wire:click="editPermission({{ $permission->id }})">Editar</button>
                        <button wire:click="deletePermission({{ $permission->id }})">Eliminar</button>
                        <button wire:click="assignToUser({{ auth()->id() }})">Asignar a mí</button>
                        <select wire:model="selectedTeamId">
                            <option value="">Seleccione un equipo</option>
                            @foreach (auth()->user()->allTeams() as $team)
                                <option value="{{ $team->id }}">{{ $team->name }}</option>
                            @endforeach
                        </select>
                        <button wire:click="assignToTeam({{ $selectedTeamId }})">Asignar al equipo
                            seleccionado</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @if ($selectedPermissionId)
        <form wire:submit.prevent="updatePermission">
            <input type="text" wire:model="name" placeholder="Nombre del permiso">
            <textarea wire:model="description" placeholder="Descripción"></textarea>
            <button type="submit">Actualizar Permiso</button>
        </form>
    @endif
</div>
