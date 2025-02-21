<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Student extends Model
{
    use Notifiable;

    protected $fillable = ['name', 'email', 'age'];
}