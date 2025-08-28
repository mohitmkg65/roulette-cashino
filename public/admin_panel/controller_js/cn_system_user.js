$(function () {
    $('#casino_data_table').DataTable({
        processing: true,
        serverSide: true,
        
        ajax: base_url + "/admin/system-user/data-table",
        columns: [{
            data: 'DT_RowIndex',
            name: 'DT_RowIndex'
        },
        {
            data: 'name',
            name: 'name'
        },
        {
            data: 'role',
            name: 'role'
        },
        {
            data: 'mobile',
            name: 'mobile'
        },
        {
            data: 'email',
            name: 'email'
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
        }]
    });
})
