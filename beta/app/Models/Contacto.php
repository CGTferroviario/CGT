<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;
use App\Mail\ContactoMail;


class Contacto extends Model
{
    use HasFactory;

    public $fillable = ['nombre', 'email', 'telefono', 'asunto', 'mensaje'];

    /**
     * Write code on Method
     *
     * @return response()
     */
    public static function boot() {

        parent::boot();

        static::created(function ($item) {
            // dd($item);
            $adminEmail = "admin@cgtferroviario.es";
            Mail::to($adminEmail)->send(new ContactoMail($item));
        });
    }
}
