@extends("page.include.index" ,["Key"=>"FAQS"])


@section("Content")
<section class="faq section-padding">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-8 col-12">
                <h2>General Info.</h2>

               
                <h2 class="mt-5">About <span>our Courses</span></h2>

                @foreach ($FAQ as $key=> $faq)   <div class="accordion" id="accordionProduct">

                  
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionProductTwo{{$faq->id}}" aria-expanded="false" aria-controls="accordionProductTwo{{$faq->id}}">
                            {{++$key }} - {!! $faq->Question!!}
                            </button>
                        </h2>

                        <div id="accordionProductTwo{{$faq->id}}" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionProduct">
                            <div class="accordion-body">
                                <p class="large-paragraph">{!!$faq->answer!!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</section>
@endsection