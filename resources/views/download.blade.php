@extends('layouts.main')

@section('content')

    <div class="row">
        <div class="col-5">
            <form>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" id="filterStationsInput" placeholder="Filter stations by name or code">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-6 offset-1">
            <form>
                <div class="row justify-content-end no-gutters">
                    <div class="col-4">
                        <div class="input-group date" id="datetimeFrom" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#datetimeFrom"/>
                            <div class="input-group-append" data-target="#datetimeFrom" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                    <label class="col-1 col-form-label text-center">
                        <span class="oi oi-arrow-thick-right" aria-hidden="true"></span>
                    </label>
                    <div class="col-4">
                        <div class="input-group date" id="datetimeTo" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#datetimeTo"/>
                            <div class="input-group-append" data-target="#datetimeTo" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-5 mt-1 mb-1">
            <div class="row">
                <div class="col-6" style="line-height: 37px;">
                        Selected stations: <span id="selectedStationCount">0</span>
                </div>
                <div class="col-6 text-right">
                    <div class="btn-group pull-right" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-primary" data-mode="list" id="showStationsButton">
                            View plots
                        </button>
                        <button type="button" class="btn btn-success" id="downloadData">
                            Download
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="stations col-12"></div>
        <div class="station-plots col-12">
            <div class="row mt-5 plot clearfix">
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection

@push('scripts')
{{--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>--}}
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="{{ asset('js/manifest.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/vendor.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/download.js') }}" type="text/javascript"></script>
@endpush

@push('stylesheets')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css" />
@endpush
