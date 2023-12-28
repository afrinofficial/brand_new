@extends('front.home.master')
@section('body')
<div class="mainmenu-area">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                </button>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav mx-auto">
                    <li class=" nav-link "><a href="{{route('calculator')}}">Calculator</a></li>

                </ul>
            </div>
        </div>
    </div>
</div> <!-- End mainmenu area -->
@endsection
