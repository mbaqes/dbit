<?php

namespace App\Http\Repository;
use Kutia\Larafirebase\Facades\Larafirebase;
 
use App\Interfaces\INotificationRepositoryInterface;
use Illuminate\Http\Request;
use App\Model\User;
class NotificationRepository implements INotificationRepositoryInterface 
{
    public function storeToken(Request $request){
        // try{
        //     $request->user()->update(['fcm_token'=>$request->fcm_token]);
        //     return response()->json([
        //         'success'=>true
        //     ]);
        // }catch(\Exception $e){
        //     report($e);
        //     return response()->json([
        //         'success'=>false
        //     ],500);
        // }
    }
    public function sendWebNotification(Request $request){
        // $request->validate([
        //     'title'=>'required',
        //     'message'=>'required'
        // ]);
    
        // try{
        //     $fcmTokens = User::whereNotNull('fcm_token')->pluck('fcm_token')->toArray();
    
        //     //Notification::send(null,new SendPushNotification($request->title,$request->message,$fcmTokens));
    
        //     /* or */
    
        //     //auth()->user()->notify(new SendPushNotification($title,$message,$fcmTokens));
    
        //     /* or */
  
        //     Larafirebase::withTitle($request->title)
        //         ->withBody($request->message)
        //         ->sendMessage($fcmTokens);
    
        //     return redirect()->back()->with('success','Notification Sent Successfully!!');
    
        // }catch(\Exception $e){
        //     report($e);
        //     return redirect()->back()->with('error','Something goes wrong while sending notification.');
        // }
    }
}