@extends('app')

@section('title', 'LHU 刪除資料')

@section('lhu_contents')
        <table class="flex-center position-ref">
            <tr>
                <th>動畫名稱</th>
                <th>動畫作者</th>
                <th>動畫製作商</th>
                <th>url</th>
                <th>分類</th>
                <th>狀態</th>
            </tr>
        @forelse($informations as $information)
            <tr>
                <td>{{ $information->name }}</td>
                <td>{{ $information->Original_author }}</td>
                <td>{{ $information->Manufacturer }}</td>
                <td>{{ $information->url }}</td>
                <td>
                    @if (isset($information->animation_classification))
                        {{ $information->animation_classification->name }}
                    @else
                        沒有分類
                    @endif
                </td>
                <td>
                    <a href="{{ route('informations.restore', ['id' => $information->id])  }}">復原</a></a>
                </td>
                <td>
                    <a href="{{ route('informations.del', ['id' => $information->id])  }}">刪除</a></a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">目前沒有資料</td>
            </tr>
        @endforelse
        </table>
@stop
