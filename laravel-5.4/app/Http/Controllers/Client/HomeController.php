<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Students;

class HomeController extends Controller
{
    protected $rootView = 'ClientView.';

    public function index()
    {
        return view($this->rootView . 'Homes.index');
    }

    public function getNewCourses()
    {
        $data = Students::getNewCourses();
        $breadcrumbs = "Danh Sách Học Viên Đăng Ký Mới";
        return view($this->rootView . 'NewCourse.index')->with(['data' => $data, 'breadcrumbs' => $breadcrumbs]);
    }

    public function getNextCourses()
    {
        $data = Students::getNextCourses();
        $breadcrumbs = "Danh Sách Học Viên Đăng Ký Tiếp Khóa Học";
        return view($this->rootView . 'NextCourse.index')->with(['data' => $data, 'breadcrumbs' => $breadcrumbs]);
    }

    public function getTestClass()
    {
        return view($this->rootView . 'test');
    }

    public function getWaitingStudent()
    {
        $data = Students::getWaitingStudent();
        $breadcrumbs = "Danh Sách Chờ Xếp Lớp";
        return view($this->rootView . 'WaitingStudent.index')->with(['data' => $data, 'breadcrumbs' => $breadcrumbs]);
    }

    public function getTutoring()
    {
        $data = Students::getTutoring();
        $breadcrumbs = "Danh Sách Học Phụ Đạo";
        return view($this->rootView . 'Tutoring.index')->with(['data' => $data, 'breadcrumbs' => $breadcrumbs]);
    }


    public function getOffStudent()
    {
        $data = Students::getOffStudent();
        $breadcrumbs = "Danh Sách Học Viên Nghỉ";
        return view($this->rootView . 'OffStudent.index')->with(['data' => $data, 'breadcrumbs' => $breadcrumbs]);
    }
}
