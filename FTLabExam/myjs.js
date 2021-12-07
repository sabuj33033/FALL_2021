$(document).ready(function(){
    $("form").submit(function(e){
        e.preventDefault();
        
    });
    $("#searchBtn").click(function()
    {
        $("#hidden").val("");
        $("#username").val("");
        $("#department").val("");
        $("#joining").val("");
        $("#salary").val("");

        let searchID= $("#searchID").val();
        if(searchID!="")
        {
            $.ajax({
                url:"http://localhost/FTLabExam/getID.php",
                method: 'POST',
                data:{
                    id:searchID
                },
                success: function(data) {
                    console.log(JSON.parse(data));
                    let val= JSON.parse(data);
                    $("#hidden").val(val.id);
                    $("#username").val(val.Name);
                    $("#department").val(val.Department);
                    $("#joining").val(val.Joining);
                    $("#salary").val(val.salary);
                },
                failure: function(data) {
                    console.log("failed ",data);
                },
            });
        }
        else{
            alert("search id can't be empty !");
        }
    
    });

    
         $.ajax({
            url:"http://localhost/FTLabExam/update.php",
            method: 'POST',
            data:{
                id:$("#hidden").val(),
                Name:$("#username").val(),
                Department:$("#department").val(),
                Joining:$("#joining").val(),
                Salary:$("#salary").val(),
            },
            success: function(vals) {
                console.log("rows affected ",vals);
            }
        }); 
    });
