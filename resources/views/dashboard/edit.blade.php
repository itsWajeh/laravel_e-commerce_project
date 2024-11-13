@extends('layouts.appdash')

@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-6">
                <form action="{{route('update')}}" method="get">
                    <div class="card mt-5 ">
                        <div class="card-body bg-secondaray ">
                            <div class="row">
                                <div class="col">
                                    <input type="hidden" name="id" value="{{ $products->id }}">
                                   
                                    <label for="">اسم المنتج</label>
                                    <input type="text" name="namep" id="namep" class="form-control" value="{{ $products->name }}" required>

                                    
                                        
                                </div>
                                <div class="col">
                                    <label for="">وصــف المنتج</label>
                                    <input type="text" id="descriptionp" name="descriptionp" value="{{ $products->Description }}"  class="form-control" required>
                                    
                                </div>
                            </div>

                            <div class="row mt-2">
                                <div class="col text-center">
                                    <button class="btn btn-primary">حفظ التعديل</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>

            </div>
        </div>
        

    </div>
@endsection
