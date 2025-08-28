$(function () {
    var table = $('#casino_data_table').DataTable({
        processing: true,
        serverSide: true,
        
        ajax: base_url + "/admin/roles-privileges/data-table",
        columns: [{
            data: 'DT_RowIndex',
            name: 'DT_RowIndex'
        },
        {
            data: 'role',
            name: 'role'
        },
        {
            data: 'privileges',
            name: 'privileges'
        },
        {
            data: 'status',
            name: 'status',
            orderable: false,
            searchable: false
        },
        {
            data: 'action',
            name: 'action',
            orderable: false,
            searchable: false
        },
        ]
    });

    function reload_table() {
        table.DataTable().ajax.reload(null, false);
    }
})