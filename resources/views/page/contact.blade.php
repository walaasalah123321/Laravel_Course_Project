@extends("page.include.index" ,["Key"=>"Contact"])


@section("Content")
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <h6 class="section-title bg-white text-center text-primary px-3">Contact Us</h6>
            <h1 class="mb-5">Contact For Any Query</h1>
        </div>
        @if (Session("done"))
           {{Session('done')}}
        @endif
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 ">
                <h5>Get In Touch</h5>
                <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax &amp; PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                <div class="d-flex align-items-center mb-3">
                    <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                        <i class="fa fa-map-marker-alt text-white"></i>
                    </div>
                    <div class="ms-3">
                        <h5 class="text-primary">Office</h5>
                        <p class="mb-0">123 Street, New York, USA</p>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ms-3">
                        <h5 class="text-primary">Mobile</h5>
                        <p class="mb-0">+012 345 67890</p>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                        <i class="fa fa-envelope-open text-white"></i>
                    </div>
                    <div class="ms-3">
                        <h5 class="text-primary">Email</h5>
                        <p class="mb-0">walaa@example.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 ">
            </div>
            <div class="col-lg-4 col-md-12 " >
                <form method="POST" action="{{route('SendMassage')}}">
                    @csrf 
                    <div class="row g-3">
                        <div class="col-md-12" >
                            <div class="form-floating"  >
                                <input type="text" class="form-control" id="name" placeholder="Your Name" value="{{old('name')}}" name="name">
                                <label for="name">Your Name</label>
                            </div>
                            @error('name')
                            <span style="color: red">*enter Your name</span>
                             @enderror
                        </div>
                       
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" placeholder="Your Email" value="{{old('email')}}" name="email">
                                <label for="email">Your Email</label>
                            </div>
                            @error('email')
                            <span style="color: red">*enter Your email</span>
                             @enderror
                        </div>
                      
                       
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea name="massage" class="form-control" placeholder="Leave a message here" id="message" style="height: 160px">{{old('massage')}}</textarea>
                                <label for="message">Message</label>
                            </div>
                            @error('massage')
                            <span style="color: red">*enter Your massage</span>
                            @enderror
                        </div>
                       
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection