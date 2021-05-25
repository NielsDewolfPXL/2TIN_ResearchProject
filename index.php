<!DOCTYPE html>
<html>
    <head>
     <title>Awsome PXL DevOps App!</title>
     <link rel="stylesheet" href="assets/css/bootstrap.min.css">
     <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">PXL DevOps App</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="index.php">Home</a>
                    <a class="nav-item nav-link" href="add.php">Add employee</a>
                </div>
            </div>
            <p><?php print $_SERVER['SERVER_ADDR']; ?></p>
        </nav>
        
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <?php
        // scan the images directory for images to use in the carousel
        // first 2 keys in the returned array are . and ..   We will need to filter those!
        $images = array("fjords.jpg", 
                        "lights.jpg", 
                        "nature.jpg");
       
        foreach($images as $key => $img){
            if (!in_array($image,array("0","1"))){
                echo ($key == 2) ? '<div class="carousel-item active">' : '<div class="carousel-item">';
                echo "<img class='d-block w-100' src='https://cloudgroup7.s3.amazonaws.com/assets/images/$img'/></div>";
                }
        }
      ?>
       
         </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        
        <?php
        final class Employee
        {
            private $first_name;
            private $last_name;
            private $emp_no;

            public function __construct(string $first_name, string $last_name, int $emp_no)
            {
                $this->ensureIsValidId($emp_no);
                $this->emp_no = $emp_no;
                $this->first_name = $first_name;
                $this->last_name = $last_name;
            }


            public function __toString(): string
            {
                return "(" . $this->emp_no . ")" . $this->first_name . " " . $this->last_name;
            }

            private function ensureIsValidId(int $emp_no): void
            {
                if ($emp_no <= 1000) {
                    throw new InvalidArgumentException(
                        sprintf(
                            '"%s" is not a valid user identifier',
                            $emp_no
                        )
                    );
                }
            }
        }

        ?>
        
        <?php
        // Use 'composer install' to get dependencies
        // Remember to run tests using PHPUnit: 'vendor/bin/phpunit tests'

        // composer autoload. Might require 'composer dump-autoload' to work.
        require_once('config.php');
        // Build sql query and get results
        $sql = "SELECT emp_no, first_name, last_name FROM employees";
        $r = $conn->query($sql);
        // Convert query results to Employee model
        $employees = array();
        while($row = $r->fetch_assoc()){
            $emp = new Employee($row["first_name"], $row["last_name"], $row["emp_no"]);
            array_push($employees, $emp);
        }
        // Print db results
        echo "<ul>";
        foreach ($employees as $emp){
            echo "<li>" . $emp->__toString() . "</li>";
        }
        echo "</ul>";

        ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js" ></script>
    </body>
</html>
