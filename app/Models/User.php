<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class User extends Model{
public $timestamps=false;

protected $primaryKey = 'id';
protected $table = 'persons';
// column sa table
protected $fillable = [
'firstname', 'lastname', 'jobid'
];
}