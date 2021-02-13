<footer class="footer text-center">
    <div class="container">
        <div class="row">
        @foreach(checkIfTableOrdered($footer) as $item)
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">{{$item->title}}</h4>
                    <p class="lead mb-0" style="color: {{$item->text_color}}">
                      {{$item->text}}
                    </p>
                </div>
        @endforeach
        </div>
    </div>
</footer>
