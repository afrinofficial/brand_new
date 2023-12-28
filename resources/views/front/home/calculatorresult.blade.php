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
    </div>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="text-center">Calculator</h2>
                        </div>
                        <div class="card-body">
                                <form action="{{route('result')}}" method="POST" enctype="multipart/form-data" >
                                @csrf
                                <div class="row mt-3">
                                    <label class="col-md-4">Result</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="result" value="{{ isset($result) ? $result : '' }}" readonly />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
