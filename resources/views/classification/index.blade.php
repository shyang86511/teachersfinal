@extends('app')

@section('title', 'LHU 在職老師')

@section('teachers_contents')
        <table class="flex-center position-ref">
            <tr>
                <th>到職日</th>
                <th>動畫分類</th>
      
            </tr>
            {{dd($classificatio)}}
        @forelse($classificatio as $classification)
            <tr>
                <td>{{ $classification->name }}</td>
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
