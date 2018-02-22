$(document).ready(function() {
    
    //$('#unos').html('proba');
    
    $('#dodaj').click(function(e){
        e.preventDefault();

        let cont=document.createElement('div');
        $(cont).addClass("form"); 

        let cl=document.createElement('div');
        $(cl).addClass("col-sm-2 form-group");
        let inp=document.createElement('input');
        $(inp).attr("type","number");
        $(inp).addClass("form-control");
        $(cl).append(inp);
        $(cont).append(cl);

        let cl1=document.createElement('div');
        $(cl1).addClass("col-sm-7 form-group");
        let txt=document.createElement('input');
        $(txt).attr("type","text");
        $(txt).addClass("form-control");
        $(cl1).append(txt);
        $(cont).append(cl1);
        
        let cl2=document.createElement('div');
        $(cl2).addClass("col-sm-2 form-group");
        let btn=document.createElement('button');
        $(btn).html('Obrisi stavku');
        $(btn).addClass("btn btn-danger");
        $(btn).click(function(e){
            e.preventDefault();

            $(this).closest('.form').remove();
        });
        $(cl2).append(btn);
        $(cont).append(cl2);

        $('#unos').append(cont);
    });
});