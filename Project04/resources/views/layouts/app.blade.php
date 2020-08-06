<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Vehicle Insurance</title>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
            @yield('content')
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script  src="https://code.jquery.com/jquery-3.4.1.min.js"  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        $( document ).ready(function() {
                   
                $.ajax({
                url: "{{URL::to('/')}}/api/vehicle",
                dataType:"json",
                method:"GET"
                }).done(function(data) {
                    
                });

                $(document).on("click",".delete", function(){
                    let id = $(this).attr('id');
                    $.ajax({
                        url: "{{ URL::to('/')}}/api/vehicle/"+id,
                        dataType: "json",
                        method: "DELETE"
                    }).done(function(data) {
                       $("#"+id).parents('tr').remove();
                    });
                    
                });

                $("#save").on("click", function(e){
                    e.preventDefault();
                    $.ajax({
                        url: "{{ URL::to('/')}}/api/vehicle",
                        dataType: "json",
                        method: "POST",
                        data: $('form').serialize()                    
                    }).done(function(data) {
                        if(data.hasOwnProperty("success")){
                            window.location.href = "/";
                        }else{
                            $(".errors").text("");
                            $(".errors").removeClass("alert");
                            $.each(data.data, function( index, value ) {
                            $("#"+index+"Err").addClass("alert");
                            $("#"+index+"Err").text(value);                     
                    });
                        }
                    });  
                });
            });
       
  
    let url = window.location.href;
    let id = url.split('/').pop()
    
    $.ajax({
        url: "{{URL::to('/')}}/api/vehicle/"+id,
        method: "GET",
        dataType: "json"
    }).done( function(data) {
       console.log(id)
       if(id == "")
       {
        $.each(data.data, function( index, value ) {
            let row = `
                <tr class="test">
                    <td>${value.brand}</td>
                    <td>${value.model}</td>
                    <td>${value.plate_number}</td>
                    <td>${value.insurance_date}</td>
                    <td><a href=" {{URL::to('/vehicle/edit')}}/${value.id}" id="edit${value.id}" class="edit btn btn-secondary px-4">Edit</a></td>
                    <td><button id="${value.id}" class="delete btn btn-danger px-4">Delete</button></td>
                </tr>
            `;
            $("tbody").append(row);
        });
       } else {
          if(id != "create") {
            if(data.hasOwnProperty("error")){
            $("body").html(`<h2 class="text-center font-weignt-bold text-danger mt-5">${data.data}</h2>`);
        }
           let form = $("#editForm");
           form.find('#brand').val(data.data.brand)
           form.find('#model').val(data.data.model)
           form.find('#plate_number').val(data.data.plate_number)
           form.find('#insurance_date').val(data.data.insurance_date)
       }
              
          }
        
       
    });

    $("#update").on('click', function(e){
        e.preventDefault();
            $.ajax({
                url: "{{URL::to('/')}}/api/vehicle/"+id,
                type: "PUT",
                dataType: "json",
                data: $('#editForm').serialize()                    
            }).done(function(data) {
                if(data.hasOwnProperty("success")){
                    window.location.href = "/";
                }else{
                    $(".errors").text("");
                    $(".errors").removeClass("alert");
                    $.each(data.data, function( index, value ) {
                    $("#"+index+"Err").addClass("alert");
                    $("#"+index+"Err").text(value);                     
                });
                }
                 
        });
    })
</script>
   
  </body>
</html>