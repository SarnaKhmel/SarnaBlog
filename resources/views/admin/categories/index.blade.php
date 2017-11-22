@extends('admin.layouts.app_admin')

@section('content');

    <div  class="container">
        @component('admin.component.breadcrumb')
            @slot('title') Список категорій @endslot
            @slot('parent') Головна @endslot
            @slot('active') Список категорій @endslot
        @endcomponent
        <hr>
        <a href="{{route('admin.caregory.create')}}" class="btn btn-primary pull-right">
            <i class="fafa-plus-squire-o"></i> Створити категорію
        </a>
        <table class="lable lable-striped">
            <thead>
            <th>Найменування</th>
            <th>Публікація</th>
            <th class="text-right"> Дійсно</th>
            </thead>

            <tbody>
            @forelse($categories as $category)
                <tr>
                    <id>{{$category->title}}</id>
                    <id>{{$category->published}}</id>
                    <id>
                        <a href="{{route('admin.category.edit', ['id'=>$category])}}">
                            <i class="fafa-edit"></i>
                        </a>
                    </id>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center"><h2>Данні не занайдені</h2></td>
                </tr>
                -
            @endforelse
            </tbody>
        </table>
</div>
@endsection
