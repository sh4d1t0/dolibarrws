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

class LastLogin extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'llx_user';

    // whitelists the mass protected assignment fields.
    protected $fillable = [
        'rowid',
        'login',
        'pass_crypted',
        'api_key',
        'gender',
        'lastname',
        'firstname',
        'fk_state',
        'fk_country',
        'job',
        'email',
        'fk_user',
        'datelastlogin',
        'datepreviouslogin',
        'statut',
        'photo',
        'date_employment',
    ];
}
