<script>
    const path_edit = "{{ url('edit_tips') }}";
    const path_view = "{{ url('tips') }}";

    $(document).ready(function() {
        var table_bean = $('#table_tips').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ url('/list_data_tips') }}",
                type: 'GET',
            },
            columns: [
                {
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'title',
                    name: 'title'
                },
                {
                    data: 'created_at',
                    name: 'created_at',
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'id',
                    name: 'id',
                    render: function(data, type, full, meta) {
                        return '<a class="btn btn-warning" href="'+path_edit+'/'+data+'" role="button"><i class="mdi mdi-content-save-edit"></i> Edit</a> <a class="btn btn-primary" href="'+path_view+'/'+data+'" role="button"><i class="mdi mdi-eye"></i> View</a>';
                    }
                },
            ]
        });
    });
</script>
