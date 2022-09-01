<?php

namespace App\Interfaces;
use Illuminate\Http\Request;
interface INotificationRepositoryInterface 
{
    public function storeToken(Request $request);
    public function sendWebNotification(Request $request);
    
}