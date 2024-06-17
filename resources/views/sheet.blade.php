@extends('template')

@section('title')
Title
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="row">
                <div class="col-12">
                    <button onclick="test_fetch()" class="btn btn-primary">Test</button>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div id="check_content">
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    function test_fetch(){
        $.ajax({
            url: "{{route('fetch.power')}}", // URL of the PHP script to handle the request
            type: 'GET', // Type of request (GET, POST, etc.)
            data:{
                'id':137
            },
            dataType: 'json', // Expected data type from the server
            success: function(response) {
                $("#check_content").html(response.data.Txt);
                console.log(response);
                // Handle successful response
            },
            error: function(xhr, status, error) {
                // Handle errors
                console.log(error);
            }
        });
    }
</script>
@endsection