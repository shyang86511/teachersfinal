@extends('teachers.app')

@section('title', 'LHU 在職老師')

@section('teachers_contents')
        <table class="flex-center position-ref">
            <tr>
                <th>到職日</th>
                <th>姓名</th>
                <th>電子郵件信箱</th>
                <th>專長</th>
                <th>檢視</th>
                <th>編輯</th>
                <th>狀態</th>
            </tr>
        @forelse($teachers as $teacher)
            <tr>
                <td>{{ Carbon\Carbon::parse($teacher->employed_at)->format('Y-m-d') }}</td>
                <td><a href="{{ $teacher->url  }}" target="_blank">{{ $teacher->name }}</a></td>
                <td><a href="mailto:{{ $teacher->email }}">{{ $teacher->email }}</a></td>
                <td>{{ $teacher->professional  }}</td>
                <td>
                    <a href="{{ route('teachers.show', ['id' => $teacher->id])  }}">檢視</a></a>
                </td>
                <td>
                    <a href="{{ route('teachers.edit', ['id' => $teacher->id])  }}">編輯</a></a>
                </td>
                <td>
                    <a href="{{ route('teachers.destroy', ['id' => $teacher->id])  }}">離職</a></a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">目前沒有老師</td>
            </tr>
        @endforelse
        </table>
@stop
