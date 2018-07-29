<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $table = 'students';
    protected $fillable = [
        'Stt', 'Name', 'Parent', 'Course', 'Phone', 'Facebook',
        'ClassName', 'Lecture', 'CourseNew','Bod',
        'Status', 'Type', 'RegDateNew','RegDate',
    ];

    public static function getNewCourses () {
        return self::where('Type',1)->get();
    }

    public static function getNextCourses () {
        return self::where('Type',2)->get();
    }

    public static function getWaitingStudent () {
        return self::whereNull('ClassName')->get();
    }

    public static function getTutoring () {
        return self::where('Type',4)->get();
    }

    public static function getOffStudent () {
        return self::where('Type',5)->get();
    }
}
