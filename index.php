<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sport Hub</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    
    <style>
        .navbar {
            background-color: rgb(74, 138, 155);
            height: 80px;
            padding: 15px;
        }

        .navbar-brand, .navbar-nav .nav-link {
            color: white;
            font-size: 1.3rem;
        }

        .navbar-nav .nav-link:hover {
            color: rgb(16, 15, 9);
        }

        .container {
            margin-top: 20px;
        }

        .image-box {
            border: 1px solid #ddd;
            padding: 15px;
            text-align: center;
            background-color: #f9f9f9;
            border-radius: 10px;
        }

        .image-box img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .upload-btn {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="bi bi-shop icon"></i> Sport Hub</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#"><i class="bi bi-house"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-envelope"></i> Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Container Section -->
    <div class="container">
        <h2 class="text-center">Upload & Display Images</h2>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="image-box">
                    <img id="uploadedImage" src="https://via.placeholder.com/400" alt="Upload an Image">
                    <input type="file" id="imageUpload" class="form-control upload-btn">
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center p-3 mt-4" style="background: #4a8a9b; color: white;">
        <p>© 2025 Sport Hub | All rights reserved</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.getElementById('imageUpload').addEventListener('change', function(event) {
            const reader = new FileReader();
            reader.onload = function(){
                document.getElementById('uploadedImage').src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        });
    </script>
</body>
</html>
