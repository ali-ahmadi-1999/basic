$(function() {
    $(document).on('click', '.delete-btn', function(e) {
        e.preventDefault();
        var link = $(this).attr("href");

        Swal.fire({
            title: 'آیا مطمئن هستید؟',
            text: "این اطلاعات حذف خواهند شد!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'بله، حذف شود!',
            cancelButtonText: 'انصراف'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = link;
                Swal.fire(
                    'حذف شد!',
                    'اطلاعات شما با موفقیت حذف شد.',
                    'success'
                )
            }
        });
    });
});