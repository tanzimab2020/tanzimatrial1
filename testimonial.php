<?php 
include "backend.php" 









?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>GreenRoots</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="#" class="navbar-brand p-0 d-flex align-items-center">
                    <img src="img/leaf-design.png" alt="Leaf Design" style="width:50px; height:auto; margin-right:10px;">
                    <h1 class="m-0" style="font-size:24px;">GreenRoots</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="index.html" class="nav-item nav-link">Home</a>
                        <a href="Tracking.html" class="nav-item nav-link active">Product Tracking</a>
                        <a href="VehicleTracking.html" class="nav-item nav-link">Vehicle Tracking</a>
                        <a href="inspection.html" class="nav-item nav-link">Inspection</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="packaging.html" class="dropdown-item">Packaging</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                              
                            </div>
                        </div>
                        <a href="Grading.html" class="nav-item nav-link">Grading</a>
                    </div>
                    <a href="" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Get Started</a>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-primary hero-header">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white animated slideInDown">Tracking</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                                    <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->
        <section class="search-section">
            <div class="search-container">
                <input 
                    type="text" 
                    id="searchBar" 
                    placeholder="Enter Supplier ID..." 
                />
                <button onclick="searchBySupplierId()">Search</button>
            </div>
            <div id="result" class="result-container"></div>
        </section>
        
        <!-- Testimonial Table -->
<section class="testimonial-section">
    <table id="testimonialTable">
        <thead>
            <tr>
                <th>Supplier ID</th>
                <th>Name</th>
                <th>Testimonial</th>
                <th>Complaint/Review</th> <!-- New Column -->
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>101</td>
                <td>tt</td>
                <td>The products were top-notch and delivered on time!</td>
                <td>Review</td> <!-- Example data -->
            </tr>
            <tr>
                <td>102</td>
                <td>tttt</td>
                <td>Excellent customer service and reliable quality.</td>
                <td>Complaint</td> <!-- Example data -->
            </tr>
            <tr>
                <td>103</td>
                <td>tttttt</td>
                <td>Highly recommended for their professionalism and efficiency.</td>
                <td>Review</td> <!-- Example data -->
            </tr>
        </tbody>
    </table>
</section>
        <!-- Form Section -->
        <section class="form-section">
            <h2>Add New Testimonial</h2>
            <form id="testimonialForm" action="add_testimonial.php" method="POST">
                <input type="number" id="supplier_id" placeholder="Supplier ID" required />
                <input type="text" id="name" placeholder="Name" required />
                <textarea id="testimonial" placeholder="Testimonial" required></textarea>
                
                <!-- Complaint/Review Radio Buttons -->
                <div>
                
                    <label>
                        <input type="radio" name="type" value="Complaint" required /> Complaint
                    </label>
                    <label>
                        <input type="radio" name="type" value="Review" required /> Review
                    </label>
                </div>
        
                <button type="submit">Submit</button>
            </form>
            <p id="errorMessage" style="color: red; font-weight: bold;"></p> <!-- Error message display -->
        </section>
        
        
        <style>
            /* Form Section Styles */
            .form-section {
                padding: 20px;
                text-align: center;
                background-color: #d9f7be; /* Leafy Green background */
            }
        
            form {
                display: flex;
                flex-direction: column;
                align-items: center;
            }
        
            input, textarea {
                padding: 10px;
                margin: 10px;
                width: 300px;
                border-radius: 5px;
                border: 1px solid #ccc;
            }
        
            button {
                padding: 10px 20px;
                background-color: #8dbf3d; /* Leafy Green button */
                color: white;
                border: none;
                border-radius: 5px;
                font-size: 16px;
                cursor: pointer;
            }
        
            button:hover {
                background-color: #7a9f34; /* Darker leafy green on hover */
            }
        
            /* Search Section Styles */
            .search-section {
                padding: 20px;
                text-align: center;
                background-color: #d9f7be; /* Leafy Green background */
            }
        
            .search-container {
                display: inline-flex;
                align-items: center;
                justify-content: center;
            }
        
            #searchBar {
                width: 300px;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
                font-size: 16px;
            }
        
            /* Testimonial Table Styles */
            .testimonial-section {
                padding: 20px;
            }
        
            table {
                width: 100%;
                border-collapse: collapse;
                background-color: #d9f7be; /* Leafy Green table background */
                text-align: left;
            }
        
            th, td {
                padding: 12px;
                border: 1px solid #ddd;
            }
        
            th {
                background-color: #8dbf3d; /* Leafy Green header */
                color: white;
            }
        
            tbody tr:nth-child(even) {
                background-color: #e0f7dc; /* Light leafy green for alternate rows */
            }
        
            tbody tr:hover {
                background-color: #c1e6b7; /* Highlight on hover */
            }
        </style>
        
        <script>
            // Function to handle adding the new testimonial
document.getElementById('testimonialForm').addEventListener('submit', function(event) {
    event.preventDefault();

    // Get the values from the form
    const supplier_id = document.getElementById('supplier_id').value.trim();
    const name = document.getElementById('name').value.trim();
    const testimonial = document.getElementById('testimonial').value.trim();
    const errorMessage = document.getElementById('errorMessage'); // Error message element

    // Get the selected testimonial type (Complaint/Review)
    const type = document.querySelector('input[name="type"]:checked');

    // Clear previous error message
    errorMessage.textContent = "";

    // Validate Supplier ID range (between 101 and 106)
    if (supplier_id < 101 || supplier_id > 106) {
        errorMessage.textContent = "Please enter a valid Supplier ID (between 101 and 106).";
        return; // Stop form submission if ID is invalid
    }

    // Check if all fields are filled
    if (supplier_id && name && testimonial && type) {
        // Create a new table row
        const table = document.getElementById('testimonialTable').getElementsByTagName('tbody')[0];
        const newRow = table.insertRow();

        // Insert new data into the row
        newRow.insertCell(0).textContent = supplier_id;
        newRow.insertCell(1).textContent = name;
        newRow.insertCell(2).textContent = testimonial;
        newRow.insertCell(3).textContent = type.value; // Insert the Complaint/Review value

        // Clear the form fields after submission
        document.getElementById('supplier_id').value = '';
        document.getElementById('name').value = '';
        document.getElementById('testimonial').value = '';
        document.querySelector('input[name="type"]:checked').checked = false; // Clear selected radio button
    } else {
        errorMessage.textContent = "Please fill in all fields and select Complaint or Review.";
    }
});

        
            // Function to search by Supplier ID
            function searchBySupplierId() {
                const searchTerm = document.getElementById('searchBar').value.trim();
                const rows = document.querySelectorAll("#testimonialTable tbody tr");
                let result = "";
        
                rows.forEach(row => {
                    const supplier_id = row.cells[0].textContent.trim();
                    const name = row.cells[1].textContent.trim();
                    const testimonial = row.cells[2].textContent.trim();
        
                    if (supplier_id === searchTerm) {
                        result = `Supplier ID: ${supplier_id} <br> Name: ${name} <br> Testimonial: ${testimonial}`;
                    }
                });
        
                const resultContainer = document.getElementById('result');
                if (result) {
                    resultContainer.innerHTML = result;
                } else {
                    resultContainer.innerHTML = "No testimonial found for the entered Supplier ID.";
                }
            }
        </script>
        <script>
            document.getElementById('testimonialForm').addEventListener('submit', function(event) {
                event.preventDefault();
        
                const supplier_id = document.getElementById('supplier_id').value;
                const name = document.getElementById('name').value;
                const testimonial = document.getElementById('testimonial').value;
        
                const formData = new FormData();
                formData.append('supplier_id', supplier_id);
                formData.append('name', name);
                formData.append('testimonial', testimonial);
        
                fetch('add_testimonial.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.text())
                .then(data => {
                    alert(data);
                    // Optionally, reset the form after submission
                    document.getElementById('testimonialForm').reset();
                })
                .catch(error => console.error('Error:', error));
            });
            async function searchBySupplierId() {
                const searchTerm = document.getElementById('searchBar').value.trim();
                const rows = document.querySelectorAll("#testimonialTable tbody tr");
                let result = "";

                rows.forEach(row => {
                    const supplier_id = row.cells[0].textContent.trim();
                    const name = row.cells[1].textContent.trim();
                    const testimonial = row.cells[2].textContent.trim();

                    if (supplier_id === searchTerm) {
                        result = `Supplier ID: ${supplier_id} <br> Name: ${name} <br> Testimonial: ${testimonial}`;
                    }
                });

                const resultContainer = document.getElementById('result');
                if (result) {
                    resultContainer.innerHTML = result;
                } else {
                    resultContainer.innerHTML = "No testimonial found for the entered Supplier ID.";
                }
            }
        </script>
        <!-- Pie Chart Section -->
<section class="chart-section" style="text-align: center; margin: 20px 0;">
    <h2>Complaints vs Reviews</h2>
    <div style="width: 300px; height: 300px; margin: 0 auto;">
        <canvas id="complaintsReviewsChart"></canvas>
    </div>
</section>
<style> 
    .chart-section canvas {
        max-width: 300px;
        max-height: 300px;
        display: block;
        margin: 0 auto;
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Function to update the Pie Chart
    function updateChart() {
        const rows = document.querySelectorAll("#testimonialTable tbody tr");
        let complaints = 0;
        let reviews = 0;

        rows.forEach(row => {
            const type = row.cells[3]?.textContent.trim();
            if (type === "Complaint") complaints++;
            if (type === "Review") reviews++;
        });

        complaintsReviewsChart.data.datasets[0].data = [complaints, reviews];
        complaintsReviewsChart.update();
    }

    // Initialize the Pie Chart
    const ctx = document.getElementById('complaintsReviewsChart').getContext('2d');
    const complaintsReviewsChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Complaints', 'Reviews'],
            datasets: [{
                label: 'Complaints vs Reviews',
                data: [0, 0], // Initially zero
                backgroundColor: ['#FF6B6B', '#4CAF50'], // Colors for complaints and reviews
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                tooltip: {
                    callbacks: {
                        label: function(tooltipItem) {
                            const value = tooltipItem.raw;
                            return `${tooltipItem.label}: ${value}`;
                        }
                    }
                }
            }
        }
    });

    // Initial chart update for preloaded data
    window.onload = updateChart;
    // Update the chart whenever a new testimonial is added
    document.getElementById('testimonialForm').addEventListener('submit', function() {
        updateChart();
    });

    
</script>
<script>
    //connecting backend 
    async function loadTestimonials() {
        try {
            const response = await fetch('fetch_testimonial.php');
            const testimonials = await response.json();

            const tableBody = document.querySelector("#testimonialTable tbody");
            tableBody.innerHTML = ""; // Clear existing rows

            testimonials.forEach(({ supplier_id, name, testimonial, type }) => {
                const newRow = tableBody.insertRow();
                newRow.insertCell(0).textContent = supplier_id;
                newRow.insertCell(1).textContent = name;
                newRow.insertCell(2).textContent = testimonial;
                newRow.insertCell(3).textContent = type;
            });

            updateChart(); // Update pie chart with new data
        } catch (error) {
            console.error("Error loading testimonials:", error);
        }
    }

    // Load testimonials on page load
    window.onload = loadTestimonials;
</script>


        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    
                </div>
            </div>
            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>