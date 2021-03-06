@extends('layouts.front')

@section('content')
<section class="students py-5">
    <div class="container">
        <div class="title py-4">
            <h1 class="text-dark">Daftar Siswa</h1>
        </div>
        <div class="body">
            <div class="row">
                @foreach($students as $student)
                <div class="student col-md-3 col-6 col-sm-4 mb-3 ">
                    <div class="card shadow" >
                        @if($student->image) 
                        <img src="{{ asset('img/' . $student->image ) }}" class="card-img-top" alt="...">
                        @else
                        <img src="{{ asset('/assets/img/dummy.png') }}" class="card-img-top" alt="...">
                        @endif
                        <div class="card-body">
                          <h6 class="text-bold text-dark font-weight-bold mb-0">{{ $student->name }}</h6>
                          <p class="my-0">{{ $student->nis }}</p>
                        </div>
                      </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection