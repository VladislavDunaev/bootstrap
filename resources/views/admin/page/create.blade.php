@extends('admin.layouts.app')

@section('content')

    <div class="container mx-auto p-4">
        <h1>Добавить страницу</h1>

        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" name="pageCreate" id="pageCreate" action="{{ route('dashboardpages.store') }}">
            @csrf
            @include('admin.page.form')

            <button class="mt-4 flex items-center justify-center px-2 py-1 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-2 md:text-lg md:px-6" type="submit">Создать</button>
        </form>
    </div>

@stop
