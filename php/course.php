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
            <h1 class="bg-primary text-white p-3">
                Course management
            </h1>
            <form action="#" method = "GET" class="mt-4 d-flex flex-row algin-items-center justify-content-start gap-2">
                <div class="form-group">
                    <input type="text" class="form-control" name="query" placeholder = "Search courses by name">
                </div>
                <button class="btn btn-primary">
                    <i class="fas fa-searach"></i>
                    Search Courses
                </button>
            </form>

        </div>

        <div class="container mt-3">
            <div class="row mt-3">
                <?php
                if(isset($_GET['query']) && !empty($_GET['query'])){
                    $query = $_GET['query'];
                    $course = searchCourseByName($query);
                    if(!empty($course)){
                        foreach($course as $c){
                            echo "<div class='col-md-4 mb-3'>";
                            echo "<div class ='card'>";
                            echo "<div class = 'card-body'>";
                            echo "<h5 class = 'card-title'>".htmlspecialchars($course['name'])."</h5>";
                            echo "<p class = 'card-text'>ID:".htmlspecialchars($course['id'])."</p>";
                            echo "</div>";
                            echo "</div>";
                            echo "</div>";

                        }
                    }else{
                        echo "<div class = 'col-12'><p>No of course found. </p></div>";
                    }
                }
                ?>
            </div>
        </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>