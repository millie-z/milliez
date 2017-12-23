@extends("layouts.tempMaster")

@section("title")
    Welcome!
@endsection


@push("head")

@endpush

@section("content")
<div class="wrapper">
    <div class="wrapper-inner">
        <h2 id="title">Master's student</h2>
        <h6 id="byLine">With an interdisciplinary approach to Software engineering</h6>
        <ul class="social-circles">
            <li>
              <a class="social-circle-item" href="http://www.linkedin.com/in/milliezhou"><img src="img/social-circles/32/linkedin32.png"></a>
            </li>
            <li>
              <a class="social-circle-item" target="about:blank" href="http://www.github.com/milliezhou"><img src="img/social-circles/32/github32.png"></a>
            </li>
            <li>
              <a class="social-circle-item" target="about:blank" href="http://www.twitter.com/milliemzhou"><img src="img/social-circles/32/twitter32.png"></a>
            </li>
            <li class="email-link-outer">
                <a class="email-link" target="_blank" href="mailto:milliezhou@gmail.com">milliezhou@gmail.com</a>
            </li>
        </ul>
    </div>
</div>
@endsection
