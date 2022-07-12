<?php

namespace Database\Seeders;

use App\Models\Library\ArrangementType;
use App\Models\Tenure;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DomainOwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create(
            [
                'name' => 'Rick Retzko',
                'email' => 'rick@mfrholdings.com',
                'password' => Hash::make('password'),
            ]
        );

        $role = Role::create(['name' => 'library_owner']);
        $permission = Permission::create(['name' => 'crud']);
        $role->givePermissionTo($permission);

        $user->assignRole('library_owner');

    }
}
