<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Support\Arr;

class Job extends Model {

    protected $table = 'job_listings';
     protected $fillable = ['title', 'salary'];
    
//     public static function all():array
//      {
        
// return  $jobs = [

//         [
//             'id' => 1,
//             'title' => 'laravel developer',
//         'salary' => '1500$',
        
//         ],
//         [
//             'id' => 2,
//             'title' => 'vue developer',
//         'salary' => '1300$',
//         ],
//         [
//             'id' => 3,
//             'title' => 'react developer',
//         'salary' => '1400$',
//         ]
// ];
    
// }

// public static function find(int $id): array
// {
//    $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

//    if (!$job) {
//        abort(404);
//    }
//     return $job;
// }
}