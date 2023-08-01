$(document).ready(function(){
  $('.delete-button').on('click', function(e){
    e.preventDefault();

    let id = $(this).data('id');

    swal({
        title: "Are you sure you want to delete this user?",
        text: "Once deleted, you will not be able to recover this user!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
        if (willDelete) {
            $.ajax({
                url: "/delete/" + id, // Replace this with the correct route
                type: 'GET',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(result) {
                    // do something with the result
                    location.reload();
                }
            });
        } else {
           // swal("Your user data is safe!");
        }
    });
});

$('.delete-banner').on('click', function(e){
    e.preventDefault();

    let id = $(this).data('id');

    swal({
        title: "Are you sure you want to delete this user?",
        text: "Once deleted, you will not be able to recover this user!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
        if (willDelete) {
            $.ajax({
                url: "/delete/" + id, // Replace this with the correct route
                type: 'GET',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(result) {
                    // do something with the result
                    location.reload();
                }
            });
        } else {
           // swal("Your user data is safe!");
        }
    });
});
});