<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Kraton - Leaderboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Favicon -->
    <link href="{{asset('template/img/favicon.ico')}}" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('template/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="{{ asset('template/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <!-- Navbar content -->
    </nav>
    <!-- Navbar End -->

    <!-- Leaderboard Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-4">Leaderboard</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title"><center>Leaderboard</center></h5>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Rank</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Score</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $conn = new PDO("mysql:host=localhost;dbname=kraton", "username", "password");

                                    $query = "SELECT name FROM leaderboard ORDER BY score DESC";
                                    $stmt = $conn->query($query);
                                    $rank = 1;
                                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                        echo "<tr>";
                                        echo "<td>" . $rank . "</td>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>0</td>"; // For now, leaving score empty
                                        echo "</tr>";
                                        $rank++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Leaderboard End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-body footer mt-0 pt-0 wow fadeIn" data-wow-delay="0.1s">    
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-12 text-center ">
                        &copy; <a href="#" class="text-center">Kraton Education</a>, All Right Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

</body>
</html>


