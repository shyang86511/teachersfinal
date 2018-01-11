@extends('teachers.app')

@section('title', 'LHU 檢視老師資料')

@section('teachers_contents')
        <table border="1" align="center">
                <tr>
                        <td>姓名</td>
                        <td><a href="{{ $teacher->url  }}" target="_blank">{{ $teacher->name }}</a></td>
                </tr>
                <tr>
                        <td>Email </td>
                        <td><a href="{{ $teacher->email  }}">{{ $teacher->email  }}</a></td>
                </tr>
                <tr>
                        <td>專長</td>
                        <td>{{ $teacher->professional }}</td>
                </tr>
                <tr>
                        <td>聘僱日</td>
                        <td>{{ Carbon\Carbon::parse($teacher->employed_at)->format('Y-m-d') }}</td>
                </tr>
                <tr>
                        <td>編輯</td>
                        <td><a href="{{ route('teachers.edit', ['id' => $teacher->id])  }}">編輯</a></td>
                </tr>
        </table>
@stop