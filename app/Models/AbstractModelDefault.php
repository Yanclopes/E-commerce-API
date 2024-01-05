<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static static make(mixed[] $attributes)
 * @method static static create(mixed[] $attributes)
 * @method static static find(mixed[] $attributes)
 * @method static static firstOrNew(mixed[] $attributes)
 * @method static static findOrFail(mixed[] $attributes)
 * @method static static paginate(mixed $attributes)
 */


 class AbstractModelDefault extends Model
 {
     use HasFactory;
}
