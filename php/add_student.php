<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    
    <div class="container bg-white p-4 mt-5 rounded shadow">
        <h1 class="bg-primary text-white p-3">Add students</h1>
    </div>
    <div class="container mt-">
        <form action="#" method = "post">
            <div class="form-group mt-3">
                <label for = 'name' > Student Name: </label>
                <input type ="text" name = "name" id = "name" class = "form-control" required>
            </div>
            <div class="form-group mt-3">
                <label for = 'email' > Student Email: </label>
                <input type ="email" name = "email" id = "email" class = "form-control" required>
            </div>
            <div class="form-group mt-3">
                <label for = 'dob' > Date of Birth: </label>
                <input type ="date" name = "dob" id = "dob" class = "form-control" required>
            </div>
            <div class="form-group mt-3">
                <label for = 'age' > Age: </label>
                <input type ="number" name = "age" id = "age" class = "form-control" required>
            </div>
            <div class="form-group mt-3">
                <label for = 'address' > Address: </label>
                <input type ="text" name = "address" id = "address" class = "form-control" required>
            </div>
            <div class="form-group mt-3">
                <select required name="department_id" id="department_id" class="form-control">
                    <?php 
                    $conn = new mysqli("db","root","","lab_db");
                    if($conn->connect_error){
                        die("connection failed".$conn->connect_error);
                    }
                    $result = $conn->query("SELECT id,name from departments");
                    while($row = $result->fetch_assoc()){
                        echo '<option value="'.htmlspecialchars($row['id']).'">'.htmlspecialchars($row['name']).'</option>';
                    }
                    $conn->close();
                    ?>
                </select>

            </div>
            <div class="btn btn-primary mt-3">Add Students</div>
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<script>
    const dob = document.getElementById('date_of_birth');
    const currentDate = new Date();
    dob.max=currentDate.toISOString().split('T')[0];
    dob.addEventListener('change',function(){
        const d = new Date(this.value);
        const today = new Date();
        let age =today.getFullYear()-d.getFullYear();
        let mon = today.getMonth()-dob.getMonth();

        if(mon<0||mon === 0 &&( today.getDate()<d.getDate())){
            age--;
        }
        document.getElementbyId("age").value = age;

    })
</script>
</body>
</html>