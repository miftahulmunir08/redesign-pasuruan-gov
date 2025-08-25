@extends('pemerintahan.layout')

@section('content')
    {{-- Hero --}}
    <section
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('https://www.wartabromo.com/wp-content/uploads/2023/03/IMG-20230308-WA0043.jpg'); height: 480px; background-position: center; position: relative; background-size: cover;"
        class="d-flex align-items-center justify-content-center">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <h1 style="color: white;
                   font-weight: bold;
                   margin-bottom: 8px;
                   padding: 0"
                class="fs-1">
                {{-- {{ $devTitle }} --}}
                Hello World
            </h1>
            <x-breadcrumb :items="$breadcrumbs" />
        </div>
    </section>
@endsection
