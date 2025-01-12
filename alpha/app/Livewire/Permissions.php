<?php

namespace App\Livewire;

use App\Models\User;
use Laravel\Jetstream\Team;
use Livewire\Component;
use Spatie\Permission\Models\Permission;

class Permissions extends Component
{
    public $name;
    public $description;
    public $permissions;
    public $selectedPermissionId;
    public $selectedUserId;
    public $selectedTeamId;

    public function mount()
    {
        $this->permissions = Permission::all();
    }

    public function render()
    {
        return view('livewire.permissions');
    }

    public function createPermission()
    {
        $this->validate([
            'name' => 'required|unique:permissions,name',
            'description' => 'nullable',
        ]);

        Permission::create([
            'name' => $this->name,
            'guard_name' => 'web',
            'description' => $this->description,
        ]);

        $this->resetForm();

        session()->flash('success', 'Permiso creado exitosamente.');
    }

    public function editPermission($id)
    {
        $permission = Permission::find($id);
        $this->selectedPermissionId = $id;
        $this->name = $permission->name;
        $this->description = $permission->description;
    }

    public function updatePermission()
    {
        $this->validate([
            'name' => 'required|unique:permissions,name,' . $this->selectedPermissionId,
            'description' => 'nullable',
        ]);

        $permission = Permission::find($this->selectedPermissionId);
        $permission->update([
            'name' => $this->name,
            'description' => $this->description,
        ]);

        $this->resetForm();

        session()->flash('success', 'Permiso actualizado exitosamente.');
    }

    public function deletePermission($id)
    {
        Permission::find($id)->delete();
        session()->flash('success', 'Permiso eliminado exitosamente.');
    }

    public function assignToUser($userId)
    {
        $user = User::find($userId);
        $user->givePermissionTo($this->name);
        // Lógica adicional si es necesario
    }

    public function assignToTeam($teamId)
    {
        $team = Team::find($teamId);
        $team->givePermissionTo($this->name);
        // Lógica adicional si es necesario
    }

    public function resetForm()
    {
        $this->name = '';
        $this->description = '';
        $this->selectedPermissionId = null;
    }
}
