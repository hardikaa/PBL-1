@extends('layouts.master')

@section('title', 'Modernize Bootstrap Admin')

@section('css')
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-datetimepicker/2.7.1/css/bootstrap-material-datetimepicker.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection

@section('pageContent')

        @include('layouts.breadcrumb', ['title' => 'Material-Datepicker', 'subtitle' => 'Home'])
          <div class="card">
            <div class="border-bottom title-part-padding">
              <h4 class="card-title mb-0">Material Date picker</h4>
            </div>
            <div class="card-body">
              <p class="card-subtitle">
                Use
                <mark><code>.bootstrapMaterialDatePicker</code></mark> to
                create it.
              </p>
              <div class="row">
                <div class="col-12">
                  <label class="form-label mt-3">Default Material Date Picker</label>
                  <input type="text" class="form-control" placeholder="2024-06-04" id="mdate" />
                  <label class="form-label mt-3">Default Material Date Timepicker</label>
                  <input type="text" id="date-format" class="form-control"
                    placeholder="Saturday 24 June 2024 - 21:44" />
                </div>
                <div class="col-12">
                  <label class="form-label mt-3">Time Picker</label>
                  <input class="form-control" id="timepicker" placeholder="Check time" />
                  <label class="form-label mt-3">Min Date set</label>
                  <input type="text" class="form-control" placeholder="set min date" id="min-date" />
                </div>
                <div class="col-12">
                  <label class="form-label mt-3">French Locales (Week starts at Monday)</label>
                  <input class="form-control" id="date-fr" placeholder="Date de début" />
                  <label class="form-label mt-3">Events</label>
                  <input type="text" class="form-control" placeholder="Start Date" id="date-start" />
                  <input type="text" class="form-control mt-3" placeholder="End Date" id="date-end" />
                </div>
              </div>
            </div>
          </div>
@endsection

@section('scripts')
  <script src="{{ URL::asset('build/js/vendor.min.js') }}"></script>
  <script src="{{ URL::asset('build/js/extra-libs/moment/moment.min.js') }}"></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-datetimepicker/2.7.1/js/bootstrap-material-datetimepicker.min.js"></script>
  <script src="{{ URL::asset('build/js/forms/material-datepicker-init.js') }}"></script>
@endsection
