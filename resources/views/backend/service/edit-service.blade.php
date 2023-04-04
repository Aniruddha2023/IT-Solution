<x-backend.layout.master>
    <div class="pcoded-main-container">
    <div class="pcoded-content">
    <!-- [ breadcrumb ] start -->
    <div class="page-header">
    <div class="page-block">
    <div class="row align-items-center">
    <div class="col-md-12">
    <div class="page-header-title">
    <h5 class="m-b-10">Dashboard Analytics</h5>
    </div>
    <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
    <li class="breadcrumb-item"><a href="#!">Dashboard Analytics</a></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <!-- [ breadcrumb ] end -->
    <!-- [ Main Content ] start -->
    <div class="row">
    <div class="col-md-12">
    <div class="card">
    <div class="card-header">
    <h5>Edit service</h5>
    </div>
    <div class="card-body">
    <div class="row">
    <div class="col-md-8">
    <form method="POST" action="{{ route('update.service', $service->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
        <div class="form-group fill">
            <label for="exampleInputEmail1">Service title</label>
            <input name="service_title"  type="text" class="form-control" id="exampleInputEmail1"  placeholder="enter service" value="{{ $service->service_title }}">
            @error('service_title')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>   
        <div class="form-group fill">
            <label >Description</label>
            <textarea name="service_description"   class="form-control" id="exampleInputPassword1" placeholder="Description">{{$service->service_description}}</textarea>
            @error('service_description')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group fill">
            <label >Long Description</label>
            <textarea name="service_long_description"  class="form-control" id="exampleInputPassword1" placeholder="Long Description">{{$service->service_long_description}}</textarea>
        </div>
         <div class="form-group fill">
            <label>Service Image</label>
            <input  name="service_image"  type="file" class="form-control" id="exampleInputEmail1" placeholder="Service Iamge">
            
        </div>
        <button type="submit" class="btn  btn-primary">Submit</button>
    </form>
    </div>
    
    </div>
    </div>
    </div>
    <!-- Latest Customers end -->
    </div>
    </div>
    <!-- [ Main Content ] end -->
    </div>
    </div>
    </x-backend.layout.master>