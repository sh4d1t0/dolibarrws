<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

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

class HolidayHistory extends Model
{
    // applies the SoftDeletes trait to the model.
    // use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'llx_holiday_history_users';

    // whitelists the mass protected assignment fields.
    protected $fillable = [
        'fk_user',
        'date_inicio',
        'date_final',
        'totales',
        'tomadas',
        'restantes',
    ];

    // defines the relationship between the two tables via the model.
    /* public function history() {
        return $this->belongsTo(History::class);
    } */
}
