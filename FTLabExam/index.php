<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="myjs.js"></script>
</head>

    <center>
    <fieldset style ="width:25%">
<body>
        <h1>
            Update Employee
        </h1>
    
    <form action="" method="post">
        <table>
            <tr>
               <th> Search By ID:</th>
            </tr>
            <tr>
                <td>
                    <input type="text" id="searchID">
                </td>
                <td>
                    <input type="submit" value="Search" id="searchBtn">
                </td>
            </tr>
        </table>
    </form>

    <form action="" method="post">
        <table style="text-align:left;">
            <tr>
            <td>
                <input type="hidden" id="hidden" name="" value="">
            </td></tr>
            <tr>
                <th>Name:</th>
            </tr>
            <tr>
                <td>
                    <input type="text" name="username" id="username">
                </td>
            </tr>
            <tr>
                <th>Department:</th>
            </tr>
            <tr>
                <td>
                    <input type="text" name="department" id="department">
                </td>
            </tr>

            <tr>
            <th>Joining Date:</th>
            </tr>
            <tr>
            <td>
                <input type="date" name="mm/dd/yyyy" label for="mm/dd/yyyy">
            </td>
            </tr>

            <tr>
                <th>Salary :</th>
            </tr>
            <tr>
                <td>
                    <input type="number" name="salary" id="salary">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="update" id="save">
                </td>
            </tr>
        </table>
    </form>
</body>
</fieldset>
</center>
</html>