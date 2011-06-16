<script src="/sandbox/jquery-1.6.1.min.js" type="text/javascript"></script>
<script>

    function butClick()
    {
        text=$(this).text();

        $("#results").html("clicked");
        $.post("/sandbox/jqueryAjaxErrorPost.php",
        {
            error: ""+text+""
        },
        function(data)
        {
            $("#results").html(data);
        },
        "html"
        )
    
    }
    function errorHandler(event,jqXHR,ajaxSettings,thrownError)
    {

        window.alert(thrownError);
    }
    function initialize()
    {
        $("button").click(butClick);
        $("html").ajaxError(errorHandler);//
    }
    window.onload=initialize;
    
</script>

<html>
    <body>
        <button>Error</button>
        <button>No Error</button>
        <div id="results">Results</div>
    </body>
</html>
<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
