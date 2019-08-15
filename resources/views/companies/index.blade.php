@extends('layouts.layout')

@section('content')
<!-- <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2>Services</h2>
</div> -->
<div class="col-12 pt-5">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br />
    @endif

    @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div><br />
    @endif

    @foreach ($companies as $company)
    <div class="card mb-2">

        <div class="card-body">

        <p><a href="/companies/{{ $company->id }}">{{ $company->name }}</a></p>

            <span>{{$company->location}}</span>
        </div>
    </div>
    @endforeach
    <?php echo $companies->render(); ?>

</div>

@endsection