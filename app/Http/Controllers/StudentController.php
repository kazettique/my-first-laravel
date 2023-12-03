<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Validator;
use Alexanderpas\Common\HTTP\StatusCode;

class StudentController extends Controller
{
    public function index()
    {
        $student = Student::all();

        $data = [
            'status' => StatusCode::HTTP_200->value,
            'student' => $student,
        ];

        return response()->json($data, StatusCode::HTTP_200->value);
    }

    public function upload(Request $request)
    {
        // todo: more strict validation
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            // 'phone' => 'required',
        ]);

        if ($validator->fails()) {
            // todo: need response model
            $data = [
                'status' => StatusCode::HTTP_422->value,
                'message' => $validator->messages(),
            ];

            return response()->json($data, StatusCode::HTTP_422->value);
        } else {
            $student = new Student();

            $student->name = $request->name;
            $student->email = $request->email;
            $student->phone = $request->phone;

            $student->save();

            // todo: need response model
            $data = [
                'status' => StatusCode::HTTP_200->value,
                'message' => 'Data uploaded successfully',
            ];

            return response()->json($data, StatusCode::HTTP_200->value);
        }
    }

    public function edit(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string'],
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        if ($validator->fails()) {
            // todo: need response model
            $data = [
                'status' => StatusCode::HTTP_422->value,
                'message' => $validator->messages(),
            ];

            return response()->json($data, StatusCode::HTTP_422->value);
        } else {
            $student = Student::find($id);

            $student->name = $request->name;
            $student->email = $request->email;
            $student->phone = $request->phone;

            $student->save();

            // todo: need response model
            $data = [
                'status' => StatusCode::HTTP_200->value,
                'message' => 'Data updated successfully',
            ];

            return response()->json($data, StatusCode::HTTP_200->value);
        }
    }

    public function delete($id)
    {
        $student = Student::find($id);

        $student->delete();

        // todo: need response model
        $data = [
            'status' => StatusCode::HTTP_200->value,
            'message' => 'data delete successfully'
        ];

        return response()->json($data, StatusCode::HTTP_200->value);
    }
}
