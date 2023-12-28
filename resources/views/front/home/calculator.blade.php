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
{{--                        <span>{{Session::get('success')}}</span>--}}
<form action="{{ route('result') }}" method="post">
    @csrf

   <div class="row mt-3">
       <label for="first_number"class="col-md-4">First number</label>
       <div class="col-md-8">
           <input type="text" name="first_number" id="first_number">
 </div>
   </div>
 <div class="row mt-3">
         <label for="second_number" class="col-md-4">Last number</label>
         <div class="col-md-8">
             <input type="text" name="second_number" id="second_number">
         </div>
     </div>
    <label for="operator">Operator:</label>
    <select name="operator" id="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>


    <div class="row mt-3">
        <label class="col-md-4"></label>
        <div class="col-md-8">
            <button type="submit" class="btn btn-success">Get Result</button>
        </div>
    </div>
</form>

@isset($result)
    <div>
        Result: {{ $result }}
    </div>
@endisset
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
