<script src="/sandbox/jquery-1.6.1.min.js" type="text/javascript"></script>
<script>

    function butClick()
    {
        text=$(this).text();

        $.post("/sandbox/jqueryAjaxErrorPost.php",
        {
            error: ""+text+""
        },
        function(data)
        {
            window.alert(data);
            $("#results").html(data);
        }
        )
    
    
    }
    function initialize()
    {
        $("button").click(butClick);
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
