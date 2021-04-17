@extends('layouts.qr')
@section('main-content')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <form class="qr-log" method="post">
        @csrf
            
            <div class="card text-center" >

                <div class="card-body">
                    <lable> Scan Your QR Here</lable>
                    <input type="text" onfocus="this.value=''" class="form-control" name="qr_number" id="my-input"><br>
                </div>
            </div>


    </form>

    <script>
        var timeoutId;
        $('form input, form textarea').on('input propertychange change', function() {
            console.log('Textarea Change');

            clearTimeout(timeoutId);
            timeoutId = setTimeout(function() {
                // Runs 1 second (1000 ms) after the last change
                saveToDB();
            }, 1000);
        });

        function saveToDB()
        {
            console.log('Saving to the db');
            form = $('.qr-log');
            $.ajax({
                url: "/qr-log",
                type: "POST",
                data: form.serialize(), // serializes the form's elements.
                beforeSend: function(xhr) {
                    // Let them know we are saving

                    var status= 'saving';
                   var th= $('.form-status-holder').html(status);

                   window.onerror = function () {
                       alert("rfid card does not exist!");
                   }

                },
                success: function(data) {
                    var jqObj = jQuery(data); // You can get data returned from your ajax call here. ex. jqObj.find('.returned-data').html()
                    // Now show them we saved and when we did

                    //this will clear input after sending data to server
                    $('input[type="text"],textarea').val('');

                    var d = new Date();
                    $('.form-status-holder').html('Saved! Last: ' + d.toLocaleTimeString());



                },
            });
        }

        // This is just so we don't go anywhere
        // and still save if you submit the form
        $('.contact-form').submit(function(e) {
            saveToDB();
            e.preventDefault();
        });
    </script>
    @endsection
