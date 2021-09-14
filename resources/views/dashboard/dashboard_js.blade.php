<script>
    const path = "{{ url('/dashboard_data') }}";

    $(function() {
        var ajax_dashboard = function() { $.ajax({
				type : 'GET',
				url : path,
                dataType: 'json',
				success : function (res) {
                    // alert(res.total_user);
                    $('#total_user').html(res.total_user);
                    $('#total_image').html(res.total_image);
                    $('#total_tips').html(res.total_tips);
                    $('#total_data_month').html(res.total_data_month);
                    $('#month_now').html('Total Data ' + res.month);
				},
				error : function (res) {
				},
				complete: function() {
					setTimeout(function(){
						ajax_dashboard();
					}, 10);
				}
			});
		}

        setTimeout(ajax_dashboard(), 10);
    });
</script>
