<div class="row justify-content-center my-10">

    <div class="col-sm-12 col-xs-12 col-md-6 no-padding">

        <ul class="nav nav-process nav-process-sm nav-process-iconic nav-process-info">
            <li class="nav-item {{ $step > 1 ? 'complete' : ($step == 1 ? 'processing' : '') }}">
                <a class="nav-link" href="{{ route('upload.picture.show') }}"><i class="fa fa-picture-o"></i></a>
            </li>
            <li class="nav-item {{ $step > 2 ? 'complete' : ($step == 2 ? 'processing' : '') }}">
                <a class="nav-link" href="{{ route('upload.location.show') }}"><i class="fa fa-map-marker"></i></a>
            </li>
            <li class="nav-item {{ $step > 3 ? 'complete' : ($step == 3 ? 'processing' : '') }}">
                <a class="nav-link" href="{{ route('upload.text.show') }}"><i class="fa fa-book"></i></a>
            </li>
            <li class="nav-item {{ $step > 4 ? 'complete' : ($step == 4 ? 'processing' : '') }}">
                <a class="nav-link" href="{{ route('upload.tags.show') }}"><i class="fa fa-hashtag"></i></a>
            </li>
        </ul>

    </div>

</div>