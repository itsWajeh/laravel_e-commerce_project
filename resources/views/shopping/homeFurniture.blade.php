@extends('layouts.appuserui')

@section('content')

<div class="container text-end">
    <div class="row mt-5">
        <div class="col">
            @foreach ($products as $item)
                <div class="row mt-3">
                    <div class="col">
                        <div class="container">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col text-start">
                                            <img src="..." alt="img will be here">
                                        </div>
                                        <div class="col">
                                            <h1 class="alert">{{$item->name}} :اسم المنتج</h1>
                                            <p class="alert">{{$item->Description}}</p>
                                            <a href='{{route('productDetails',['id'=>$item->id])}}' class="btn btn-primary">تفاصـيل</a>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection