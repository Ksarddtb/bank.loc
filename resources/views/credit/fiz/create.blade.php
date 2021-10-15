@extends('layouts.backend')

@section('content')
  <!-- Hero -->
  {{-- <div class="bg-body-light">
    <div class="content content-full">
      <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
        <h1 class="my-2 flex-grow-1 fs-3 fw-semibold my-sm-3">Dashboard</h1>
        <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">App</li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
          </ol>
        </nav>
      </div>
    </div>
  </div> --}}
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <div class="row items-push">
        @livewire('credit.fizcreate')
    </div>
  </div>
  <!-- END Page Content -->
@endsection

@section('after-js')
<script>
    Dashmix.helpersOnLoad(['js-flatpickr', 'jq-datepicker', 'jq-colorpicker',
                            'jq-maxlength', 'jq-select2', 'jq-rangeslider',
                            'jq-masked-inputs', 'jq-pw-strength']);
 </script>
@endsection
