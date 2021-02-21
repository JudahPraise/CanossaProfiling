

$(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#personal thead tr').clone(true).appendTo( '#personal thead' );
    $('#personal thead tr:eq(1) th').each( function (i) {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
 
        $( 'input', this ).on( 'keyup change', function () {
            if ( table.column(i).search() !== this.value ) {
                table
                    .column(i)
                    .search( this.value )
                    .draw();
            }
        } );
    } );
 
    var table = $('#personal').DataTable( {
        orderCellsTop: true,
        fixedHeader: true,
        pagingType: "simple_numbers",
        responsive: {
            details: {
                type: 'column'
            }
        }
    } );
} );