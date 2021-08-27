<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function me() {
    return ['NIS' => 3103119141,
        'name' => 'Novinda Layla Ramadhania',
        'gender' => 'Female',
        'phone' => '081392987438',
        'class' => 'XII RPL 5'];
  }
}

