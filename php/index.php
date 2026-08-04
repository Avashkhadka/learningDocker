<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File upload | PHP</title>
</head>

<body>
    <h1>File Upload | PHP</h1>
    <hr>

    <form action="file_upload_handler.php" method="POST" enctype="multipart/form-data">

        <label for="full_name">Full Name</label> <br> <br>
        <input type="text" name="full_name" placeholder="Full Name" id=""> <br> <br>

        <label for="email">Email</label> <br> <br>
        <input type="text" name="email" placeholder="email" id=""> <br> <br>

        <label for="">Select file you want to upload</label>
        <input type="file" name="file_to_upload" id=""> <br> <br>
        <input type="submit" name="upload" value="Upload Image">

    </form>

    <br> <br>
    <hr>

    <h1>User File Details</h1>

    <table>
        <thead>
            <tr>
                <th>S.No</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>File</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once "get_user_data.php";
            displayUserFile();
   
            ?>
        </tbody>
    </table>

</body>

</html>