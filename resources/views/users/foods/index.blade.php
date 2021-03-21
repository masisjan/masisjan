@extends('layouts.user')
@section('title', 'Contact App | All contacts')
@section('content')

            <div class="bg_k2 center clearfix">
                <div class="col col_9 col_md col_9_md col_sm col_9_sm">
                    <p class="text_houm_tu ">All foods</p>
                </div>
                <div class="col col_3 col_md col_3_md col_sm col_3_sm icon_menu">
                    <a href=" {{ route('users.foods.create') }} "><i class="fas fa-plus-circle margin_15_0"></i></a>
                </div>
            </div>
            <div>
                <table class="table_blur">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th class="block_non_sm">Foods id</th>
                        <th>Title</th>
                        <th>Publish</th>
                        <th class="block_non_md block_non_sm">Count</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($foods->count())
                        @foreach($foods as $index => $food)
                            <tr>
                                <td> {{ $index + $foods->firstItem() }} </td>
                                <td class="block_non_sm"> {{ $food->id }} </td>
                                <td> {{ $food->title }} </td>
                                <td> {{ $food->publish }} </td>
                                <td class="block_non_md block_non_sm"> {{ $food->count }} </td>
                                <td class="icon_menu">
                                    <a href="{{ route('users.foods.show' , [$food->id]) }}" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
                                    <a href="{{ route('users.foods.edit', $food->id) }}" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                                    <a href="{{ route('users.foods.destroy', $food->id) }}" class="btn btn-delete btn-sm btn-circle btn-outline-danger" title="Delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        <form id="form-delete" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    @endif
                    </tbody>
                </table>
                {{ $foods->appends (['sort' => 'voices'])->links() }}
            </div>

@endsection
