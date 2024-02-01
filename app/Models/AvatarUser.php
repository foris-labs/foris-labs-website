<?php

declare(strict_types=1);


namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class AvatarUser extends Pivot
{
    protected $table = 'avatar_user';

}
