@extends('app')

@section('title','LHU')

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
                    <a href="">檢視</a>
                </td>
                <td>
                    <a href="">編輯</a>
                </td>
                <td>
                    <a href="">離職</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">目前沒有老師</td>
            </tr>
        @endforelse
        </table>
@stop
