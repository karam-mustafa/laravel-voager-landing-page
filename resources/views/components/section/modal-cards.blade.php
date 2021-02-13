<section class="page-section portfolio"
         style="background-color: {{$section->background_color}} !important;"
         id="{{$section->title}}">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0" style="
            color: {{$section->title_color}} !important;
            "
        >{{$section->title}}</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="{{$section->icon}}"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <div class="row justify-content-center">
            @foreach(checkIfTableOrdered($section->modalCards) as $item)
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#{{$item->title}}">
                        <div
                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i
                                    class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid card-img" src="{{Voyager::image($item->image)}}" alt=""/>
                    </div>
                </div>
                <div class="portfolio-modal modal fade" id="{{$item->title}}" tabindex="-1" role="dialog"
                     aria-labelledby="{{$item->title}}" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"><i class="fas fa-times"></i></span>
                            </button>
                            <div class="modal-body text-center">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">
                                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"
                                                id="portfolioModal2Label" style="color : {{$item->title_color}} !important;">{{$item->title}}</h2>
                                            <div class="divider-custom">
                                                <div class="divider-custom-line" style="background-color: {{$item->icon_color}} !important;"></div>
                                                <div class="divider-custom-icon" style="color: {{$item->icon_color}} !important;"><i class="{{$item->icon}}"></i></div>
                                                <div class="divider-custom-line" style="background-color: {{$item->icon_color}} !important;"></div>
                                            </div>
                                            <img class="img-fluid rounded mb-5 modal-card-img" src="{{Voyager::image($item->image)}}"
                                                 alt=""/>
                                            <p class="mb-5" style="color : {{$item->text_color}} !important;">{{$item->text}}</p>
                                            <button class="btn btn-primary" data-dismiss="modal">
                                                <i class="fas fa-times fa-fw"></i>
                                                Close Window
                                            </button>
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
</section>
