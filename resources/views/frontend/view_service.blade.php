<x-frontend.layouts.master>
    <main class="" id="main" style="margin-top: 150px">
        <div class="container">
            <div class="row" style="margin-bottom: 100px;">
                <div class="col-md-6">
                    <img style="width:300px; height: 250px; margin:100px" class="img-fluid rounded" src="{{ asset($service->service_page_image) }}" alt="next steps pana">
                </div>
                <div class="col-md-6">
                    <h2>{{ $service->service_title }}</h2>
                   <p> {{$service->service_long_description }}</p>
             

                </div>
            </div>
            
        </div>
        
        <div class="technology" style="width:72%; padding-top:50px; padding-bottom:50px;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="service-title"><h2>Technology Stack</h2></div>
                       
                    </div>
                    <div class="col-md-6">
                        <img src="https://ekopii.com/storage/images/web-development-framework.jpg" alt="" srcset="">
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-frontend.layouts.master>