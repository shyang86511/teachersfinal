@extends('app')

@section('title', 'LHU 刪除分類')

@section('lhu_contents')
        <table class="flex-center position-ref">
            <tr>
                <th>分類編號</th>
                <th>分類名稱</th>
                <th>狀態</th>
            </tr>
        @forelse($classification as $classificationn)
            <tr>
                <td>{{ $classificationn->id }}</td>
                <td>{{ $classificationn->name }}</td>
                <td>
                    <a href="{{ route('classification.restore', ['id' => $classificationn->id])  }}">恢復</a></a>
                </td>
                <td>
                    <a href="{{ route('classification.del', ['id' => $classificationn->id])  }}">刪除分類</a></a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">目前沒有分類</td>
            </tr>
        @endforelse
        </table>
@stop
