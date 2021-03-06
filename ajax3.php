<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Example 3, dynamic PHP</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
function loaddiv()
{
    console.log("Initiating file load of target3.php");
    var url_var = 'targets/?'; //TODO pick right target file
    var data_var = {id: 3}; //some data to send to the server.  Not always needed.  Must be passed as an object with key:value pairs if you do it this way
    var datatype_var = '?'; //TODO choose appropriate datatype
    $.ajax({
        url: url_var, 
        data: data_var, 
        dataType: datatype_var, 
        success: function(response){
            //this function is called when the ajax call succeeds and the information from the server is retrieved.
            console.log("response = ",response);
            //TODO: assign response to #target_div's html
        }
    });
}
    </script>
</head>
<body>
<div id="target_div">
    The content will be loaded here.  This time the server's content is dynamically generated, but still raw HTML in the end 
</div>
<button type="button" onclick="loaddiv()">Load contents</button>


</body>
</html>