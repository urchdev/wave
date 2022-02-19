<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Notifications\UploadReportNotification;
use Illuminate\Support\Facades\Notification;


class NotificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    public function index()
    {
        return view('notifications');
    }
    
    public function sendReportNotification() {
        $userSchema = User::first();
  
        $notifyData = [
            'name' => 'Pending Lodgers Report',
            'body' => 'You are yet to upload.',
            'thanks' => 'Your weekly report was last uploaded 10 days ago',
            'todoTask' => 'Please click to go to Report Importer to update your upload status',
            'targetURL' => url('/admin/import-excel-csv-form'),
            'notify_id' => 007
        ];
  
        Notification::send($userSchema, new UploadReportNotification($notifyData));
   
        dd('Congrats Captain, Task completed!');
    }
}