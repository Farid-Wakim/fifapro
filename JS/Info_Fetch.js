$(document).ready(function(){


    var ws_general_url = "WS/";


 
    function fetch_account_types(){

        $.ajax({
            url: ws_general_url + 'WS_Info_Fetch.php?',
            data:({Action_ID:"1"}),
            type: 'GET',
            success: function(response) {
                var data = JSON.parse(response);
                var html = '';
                
                    html += '<option selected=""> Select account type</option>'
                for (var i = 0; i < data.length; i++) {
                     html += '<option value="'+data[i].ID+'">'+data[i].Name+'</option>'
                }
                $('#dropdown_account_types').html(html);
             
            }
        });

    }


    function fetch_all_teams(){

        $.ajax({
            url: ws_general_url + 'WS_Info_Fetch.php?',
            data:({Action_ID:"2"}),
            type: 'GET',
            success: function(response) {
                var data = JSON.parse(response);
                var html = '';
                for (var i = 0; i < data.length; i++) {
                     html += '<option value="'+data[i].ID+'">'+data[i].Name+'</option>'
                }
                $('#teamSelect').html(html);
             
            }
        });

    }



    fetch_account_types();
    fetch_all_teams();





});