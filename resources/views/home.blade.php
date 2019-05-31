@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <h3>Infrasound stations</h3>
        </div>
        <div class="col-12">
            <div id="map" style="height: 500px;">
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src='https://maps.googleapis.com/maps/api/js?client=gme-nianticinc&libraries=places&libraries=geometry&ver=4.3.1'></script>
    <script src="{{ asset('js/manifest.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/stations.js') }}" type="text/javascript"></script>
@endpush