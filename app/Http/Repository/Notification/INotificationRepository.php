<?php

namespace App\Interfaces;
use Illuminate\Http\Request;
interface NotificationRepositoryInterface 
{
    public function storeToken(Request $request);
    public function sendWebNotification(Request $request);
    
}