<?php
    $menu_item_page = "dashboard";
?>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome to Dashboard!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    // $(document).ready(function(){
    //     if (window.history && window.history.pushState) {

    //         window.history.pushState('forward', null, './#forward');

    //         $(window).on('popstate', function() {
    //             alert('Back button was pressed.');
    //         });
    //     }
    // });

    // function backButtonClicked(argument) {
    //     if(window.event){
    //         alert("clicked");
    //     }
    // }
</script>
@endsection
