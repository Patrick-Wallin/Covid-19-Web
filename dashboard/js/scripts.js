$(document).ready(function(){
    $(document).on('click', "#continent-card-href", function(e){
        var link = $(this).attr("href");
        if (link != "#") {    
            $.get(link, function(data){
                $(".list-of-countries").html(data);
            });
        }
        
        return false;
    });
});