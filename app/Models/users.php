<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class users extends Model{
    protected $table = 'user_listings';
}
// class users {
//     public static function all(): array{
//         return [
//             [
//                 'id' => 1,
//                 'name' => 'Akeem',
//                 'age'=> 10
//             ],
//             [
//                 'id'=>2,
//                 'name' => 'Olayiwola',
//                 'age' =>   20
//             ]
//             ];
//     }
// }