<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\TestEnrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class TestsEnrollmentController extends Controller
{
    public function sendTestNotification()
    {
        $user = User::first();

        $enrollmentData = [
            'body' => 'You revceived a new test notification',
            'enrollmentText' => 'You are allowed to enroll',
            'url' => url('/'),
            'thankyou' => 'You have 14 days to enroll'
        ];

        // $user->notify(new TestEnrollment($enrollmentData));

        Notification::send($user, new TestEnrollment($enrollmentData));
    }
}
