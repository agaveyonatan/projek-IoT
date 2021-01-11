$(function(){ 
    // $(window).on('load', function(){ 
        $.ajax({ 
            method: "GET", 
            url: "getrecords_ajax.php",
        }).done(function( data ) { 
            let result= $.parseJSON(data); 
            let string='<table class="table caption-top table-striped table-hover text-center" width="100%"><caption>List 10 data terakhir</caption><thead class="table-dark"><tr><th>Jarak</th><th>Waktu</th><tr></thead>';

            /* from result create a string of data and append to the div */
            $.each( result, function( key, value ){    
                string += "<tr> <td>"+value['jarak']+"</td> <td>"+value['waktu']+"</td> </tr>"; 
            }); 
            string += '</table>'; 
            $("#records").html(string); 
        }); 
    // }); 
}); 
