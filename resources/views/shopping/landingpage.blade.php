@extends('layouts.appuserui')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col text-end ">
                <h1>أهلا وسهلا بكم في منصتنا الالكترونية</h1>
                <p class="text-danger">المنصة الالكترونية والموحدة والاولى من نوعها في تقديم افضل المنتجات الرائدة وذات الجولة المضمونة</p>
            </div>
            
        </div>
    </div>

        
        <div class="container text-center mt-2">
            <div class="row align-items-start">
              <div class="col">
                
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://www.albayan.ae/assets/archives//images/2012/02/08/1588633.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">المنتجات الإلكترونية</h5>
                        <p class="card-text">هذا القسم يحتوي على جميع المنتجات الالكترونية والمنزلية والتي تحتاجها في حياتك اليومية اذهب لترى العروض</p>
                        <a href="{{route('electric')}}" class="btn btn-primary">الذهاب</a>
                    </div>
                </div>
            
              </div>
              <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://png.pngtree.com/thumb_back/fh260/background/20210907/pngtree-neat-gray-tone-home-living-room-furniture-photography-map-with-pictures-image_795599.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">الأثاث المنزلي</h5>
                        <p class="card-text">جميع ما تحتاجه لمنزلك في مكان واحد! جميع المنتجات بجودة عالية</p>
                        <a href="{{route('homeFurniture')}}" class="btn btn-primary">الذهاب</a>
                    </div>
                </div>
              </div>
              <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
              </div>
            </div>
          </div>
    
@endsection

