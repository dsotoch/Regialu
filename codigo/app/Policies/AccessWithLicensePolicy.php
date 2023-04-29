<?php

namespace App\Policies;

use App\Models\grupos;
use App\Models\users;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Foundation\Auth\User;

class AccessWithLicensePolicy
{
    use HandlesAuthorization;

  
}
