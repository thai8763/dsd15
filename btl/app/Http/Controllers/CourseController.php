<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Course;
use App\Folder;
use App\File;
use Auth;
use App\Http\Requests\CheckAddFolder;
use Illuminate\Support\Facades\Redirect;

class CourseController extends Controller
{
    /**
     * hien thi danh sach thu muc con, file con
     * @para $nameCourse ten mon hoc, $id khoa chinh thu muc
     * @return $nameCourse ten mon hoc, $folders thu muc con, $files con
     */
    public function showMyFolder ($courseID, $parentFolderID)
    {
        $nameCourse = Course::find($courseID)->name;

        // lay danh sach thu muc
        $folders = Folder::join('users', 'folders.user_id', '=', 'users.id')
            ->join('courses', 'folders.course_id', '=', 'courses.id')
            ->select('folders.id as folder_id', 'folders.name as folder_name', 'folders.updated_at as folder_update')
            ->where([
                ['folders.user_id', '=', Auth::user()->id],
                ['courses.id', '=', $courseID],
                ['folders.parent_id', '=', $parentFolderID]
            ])
            ->get();

        //lay danh sach file
        $files = File::join('users', 'files.user_id', '=', 'users.id')
            ->join('courses', 'files.course_id', '=', 'courses.id')
            ->select('files.url as file_url', 'files.id as file_id', 'files.name as file_name', 'users.name as user_name', 'files.updated_at as file_update', 'files.type as file_type')
            ->where([
                ['files.user_id', '=', Auth::user()->id],
                ['courses.id', '=', $courseID],
                ['files.parent_folder_id', '=', $parentFolderID]
            ])
            ->get();

        return view("pages.course")->with([
            'courseID' => $courseID,
            'nameCourse' => $nameCourse,
            'folders' => $folders,
            'parentFolderID' => $parentFolderID,
            'files' => $files
        ]);
    }

    /**
     * thêm thư mục mới
     * @para $request yeu cau form, $courseID ma mon hoc, $parentFolderID ma thu muc cha
     * @return quay lai trang truoc, thu muc moi hien tren giao dien
     */
    public function addFolder(Request $request, $courseID, $parentFolderID) {

        if ($request -> has('folderName')) {
            $folder = new Folder;
            $folder->name = $request->input('folderName');
            $folder->user_id = Auth::user()->id;
            $folder->course_id = $courseID;
            $folder->parent_id = $parentFolderID;
            $folder->save();
            return Redirect::back();
        }
    }

    /**
     * thuc hien upfile len Server
     * @param Request $request yeu cau
     * @return thong bao thanh cong
     */
    public function uploadFile(Request $request, $courseID, $parentFolderID) {

        if ($request -> hasFile('file')) {
            $file = new File;
            $file -> name = $request -> file -> getClientOriginalName();
            $file -> user_id = Auth::user() -> id;
            $file -> course_id = $courseID;
            $file -> parent_folder_id = $parentFolderID;
            $file -> type = $request -> file -> extension();
            $file -> url = public_path().'/data/'. Auth::user() -> id.'/my-document/';

            $file -> save();
            return Redirect::back();
        }
    }

    public function refresh() {
        return Redirect::back();
    }
}
