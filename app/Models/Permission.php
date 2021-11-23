<?php

namespace App\Models;

use Caffeinated\Shinobi\Concerns\HasRolesAndPermissions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Permission extends Model
{
    protected $table = "permissions";

    use HasRolesAndPermissions;

    public function hasSystemPermission($permission)
    {
        $userId = $this->id;
        $permissions = Cache::remember("user_$userId" . '_permissions', 120, function () use ($userId, $permission) {
            $s = $this->permissions->pluck('slug')->toArray();
            $t = Permission::whereHas('roles', static function ($t) use ($userId) {
                $t->whereHas('users', static function ($q) use ($userId) {
                    $q->where('users.id', $userId);
                });
            })
                ->pluck('slug')
                ->toArray();

            $p = array_merge($s, $t);
            return $p;
        });

        return in_array($permission, $permissions, true) && $this->deleted_at === null;
    }

    public function flushPermission()
    {
        Cache::forget("user_$this->id" . '_permissions');
    }

}
