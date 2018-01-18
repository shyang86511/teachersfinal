@extends('app')

@section('title','LHU 分類')

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
                    <a href="{{ route('classification.show', ['id' => $classificationn->id])  }}">檢視</a>
                </td>
                <td>
                    <a href="{{ route('classification.edit', ['id' => $classificationn->id])  }}">編輯</a>
                </td>
                <td>
                    <a href="{{ route('classification.destroy', ['id' => $classificationn->id])  }}">刪除</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">目前沒有分類</td>
            </tr>
        @endforelse
        </table>
@stop
