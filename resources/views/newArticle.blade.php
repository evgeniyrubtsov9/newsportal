@extends('layouts.mainview')
@section('content')
{{--    <div class="jumbotron">--}}
{{--        <div class="container">--}}
{{--            <div class="form">--}}
{{--                <form method="POST" action="{{route('storeArticle')}}">--}}
{{--                    <div class="form">--}}
{{--                        <label for="title">Virsraksts</label>--}}
{{--                        <input type="text" class="form_control" id="title" name="title">--}}
{{--                    </div>--}}

{{--                    <div class="form-group">--}}
{{--                        <label for="category" type="text">Kategorija</label>--}}
{{--                        <input type="text" class="form_control" id="category" name="category">--}}
{{--                    </div>--}}

{{--                    <div class="form-group">--}}
{{--                        <label for="brief_desc" type="text">Īss apraksts</label>--}}
{{--                        <input type="text" class="form_control" id="brief_desc" name="brief_desc">--}}
{{--                    </div>--}}

{{--                    <div class="form-group">--}}
{{--                        <label for="content" type="text">Saturs</label>--}}
{{--                        <input type="text" class="form_control" id="content" name="content">--}}
{{--                    </div>--}}

{{--                    <button type="submit" class="btn btn-default">Pievienot</button>--}}

{{--                    {{csrf_field()}}--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
<div class="container" id="forma">
<form>
    <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Example select</label>
        <select class="form-control" id="exampleFormControlSelect1">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect2">Example multiple select</label>
        <select multiple class="form-control" id="exampleFormControlSelect2">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Example textarea</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
</form>
</div>
@endsection
