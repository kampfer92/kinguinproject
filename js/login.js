$("#loginform").submit(function(e)
{
    var url = "/ajax/login";
    $.ajax({
        type:"POST",
        url: url, 
        data: $("#loginform").serialize(),
        dataType: "json",
        success: function(data) {
            alert(data.error);
        }
    });
    e.preventDefault();
});