$(function () {
    $('#casino_data_table').DataTable({
        processing: true,
        serverSide: true,
        
        ajax: base_url + "/admin/master/chip/data-table",
        columns: [{
            data: 'DT_RowIndex',
            name: 'DT_RowIndex'
        },
        {
            data: 'value',
            name: 'value'
        },
        {
            data: 'color',
            name: 'color'
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