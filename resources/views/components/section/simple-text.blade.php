<section class="page-section portfolio" id="{{$section->title}}">
    <div class="container">
        <!-- Portfolio Section Heading-->
        <h2
            class="page-section-heading text-center text-uppercase text-secondary mb-0"
            style="
                color: {{$section->title_color}} !important;
                background-color: {{$section->background_color}} !important;
                "
        >{{$section->title}}</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="{{$section->icon}}"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Portfolio Grid Items-->
        <div class="row justify-content-center">
            @foreach($section->simpleTexts as $item)
                <div class="simple-text-d">
                    <p style="color: {{$item->text}}">{{$item->text}}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
