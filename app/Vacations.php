<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*
|--------------------------------------------------------------------------
| Laravel API Models
|--------------------------------------------------------------------------
|
| Soft deletes -- a soft delete in Laravel does not actually delete the record from the database but
|   only marks it as deleted using a timestamp. For us to do this, we will need to import the soft delete trait and
|   apply it to the model.
| Define relationships -- our tables have relationships. For example, customers is related to orders table
|   using a one-to-many relationship. Orders I related to order details while inventory table is related to
|   order details table.
| Mass assignment protection -- we will need to whitelist the database fields that can be updated using our models.
*/

class Vacations extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'llx_holiday';
    public $timestamps = false;

    // whitelists the mass protected assignment fields.
    protected $fillable = [
        'rowid',
        'ref',
        'ref_ext',
        'entity',
        'fk_user',
        'fk_user_create',
        'fk_user_modif',
        'fk_type',
        'date_create',
        'description',
        'date_debut',
        'date_fin',
        'halfday',
        'statut',
        'fk_validator',
        'date_valid',
        'fk_user_valid',
        'date_refuse',
        'fk_user_refuse',
        'date_cancel',
        'fk_user_cancel',
        'detail_refuse',
        'note_private',
        'note_public',
        'tms',
        'import_key',
        'extra_params',
    ];

    // defines the relationship between the two tables via the model.
    /* public function history() {
        return $this->belongsTo(History::class);
    } */
}
