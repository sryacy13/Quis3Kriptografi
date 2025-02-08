<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free QR Code Generator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>


    <style>
        body {
            background: linear-gradient(135deg, #1e3c72, #2a5298,rgb(36, 135, 197), #ffffff);
            background-size: 400% 400%;
            animation: gradientBG 10s ease infinite;
            font-family: 'Arial', sans-serif;
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .container {
            max-width: 700px;
            margin: auto;
            padding: 30px;
        }

        .qr-box {
            background: white;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .qr-preview {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 280px;
        }

        .btn-custom {
            transition: 0.3s;
            font-size: 1.1rem;
            padding: 12px;
        }

        .btn-custom:hover {
            transform: scale(1.07);
        }

        .btn-primary {
            background-color: #007BFF;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-success {
            background-color: #28A745;
            border: none;
        }

        .btn-success:hover {
            background-color: #218838;
        }

        .navbar {
            background-color:rgb(16, 74, 136);
            padding: -1px;
        }

        .navbar a {
            color: white;
            font-weight: bold;
            font-size: 1.2rem;
        }

        .nav-tabs .nav-link.active {
            background-color: #007BFF;
            color: white;
            font-weight: bold;
        }

        .nav-tabs .nav-link {
            color: #007BFF;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand"><i class="fa-solid fa-qrcode"></i> QR Code Generator</a>
        </div>
    </nav>

    <div class="container mt-5">
        <h2 class="text-center fw-bold text-light">Create a Free QR Code</h2>
        <p class="text-center text-white-50">Dynamic, well-designed, and trackable QR codes.</p>

        <div class="qr-box mt-4">
            <ul class="nav nav-tabs" id="qrTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="url-tab" data-bs-toggle="tab" href="#url" role="tab"><i class="fa-solid fa-link"></i> URL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="text-tab" data-bs-toggle="tab" href="#text" role="tab"><i class="fa-solid fa-align-left"></i> Plain Text</a>
                </li>
            </ul>

            <div class="tab-content mt-3" id="qrTabContent">
                <div class="tab-pane fade show active" id="url" role="tabpanel">
                    <label for="qrUrl"><i class="fa-solid fa-globe"></i> Enter URL</label>
                    <input type="text" id="qrUrl" class="form-control my-2" placeholder="https://example.com">
                </div>
                <div class="tab-pane fade" id="text" role="tabpanel">
                    <label for="qrText"><i class="fa-solid fa-keyboard"></i> Enter Text</label>
                    <textarea id="qrText" class="form-control my-2" rows="3" placeholder="Enter your text here..."></textarea>
                </div>
            </div>

            <label for="qrSize" class="mt-3"><i class="fa-solid fa-expand"></i> Select QR Code Size</label>
            <select id="qrSize" class="form-select">
                <option value="100">Small (100x100)</option>
                <option value="200" selected>Medium (200x200)</option>
                <option value="300">Large (300x300)</option>
                <option value="400">Extra Large (400x400)</option>
            </select>

            <button class="btn btn-primary w-100 mt-3 btn-custom" onclick="generateQRCode()">
                <i class="fa-solid fa-qrcode"></i> Generate QR Code
            </button>
            
            <div id="qrResult" class="qr-preview mt-3"></div>
            
            <button id="saveBtn" class="btn btn-success w-100 mt-3 btn-custom" style="display: none;" onclick="downloadQRCode()">
                <i class="fa-solid fa-download"></i> Save QR Code
            </button>
        </div>
    </div>

    <script>
        function generateQRCode() {
            let url = document.getElementById("qrUrl").value;
            let text = document.getElementById("qrText").value;
            let size = document.getElementById("qrSize").value;
            let inputText = url || text;
            
            if (!inputText) {
                alert("Please enter a URL or text");
                return;
            }

            document.getElementById("qrResult").innerHTML = "";
            let qr = new QRCode(document.getElementById("qrResult"), {
                text: inputText,
                width: parseInt(size),
                height: parseInt(size)
            });

            document.getElementById("saveBtn").style.display = "block";
        }

        function downloadQRCode() {
            let qrCanvas = document.querySelector("#qrResult canvas");
            let qrImage = qrCanvas.toDataURL("image/png");
            let link = document.createElement("a");
            link.href = qrImage;
            link.download = "qrcode.png";
            link.click();
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
