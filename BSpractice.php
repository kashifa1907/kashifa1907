<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://federalsoftsystems.com/in/">FSS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="About.html">About us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-current="page">
                            Services
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Company</a></li>
                            <li><a class="dropdown-item" href="#">personal</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li><a class="dropdown-item" href="#">Write for us</a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Contact.html">Contact us</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>



    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="container my-4"></div>
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" >
            <div class="carousel-item active">
                <img src="https://plus.unsplash.com/premium_photo-1673453421713-6e871ddd9823?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1887&q=80"
                    class="d-block w-50 h-0 mx-auto" alt="..." style="height: 500px;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                    <button class="btn btn-danger">good</button>
                    <button class="btn btn-primary">good</button>
                    <button class="btn btn-info">good</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1559837627-de5ea80a1f43?ixlib=rb-4.0.3&ixid=M3xMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1887&q=80"
                    class="d-block w-50 h-0 mx-auto" alt="..." style="height: 500px;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                    <button class="btn btn-danger">good</button>
                    <button class="btn btn-primary">good</button>
                    <button class="btn btn-info">good</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1529567186287-3e17bdefa342?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1886&q=80"
                    class="d-block w-50 h-0 mx-auto" alt="..." style="height: 500px;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                    <button class="btn btn-danger">good</button>
                    <button class="btn btn-primary">good</button>
                    <button class="btn btn-info">good</button>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>  
    <div class="container">
        <table class="table" id="data-table">
            <thead class="thead-dark">
                <tr>
                    <th>Payment ID</th>
                    <th>Name</th>
                    <th>Country Code</th>
                    <th>Phone Number</th>
                    <th>Plan Name</th>
                    <th>Amount</th>
                    <th>Tax</th>
                    <th>Total Amount</th>
                    <th>Order ID</th>
                    <th>Reference ID</th>
                    <th>Payment Method</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
      
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
    fetch("payment_data.json")
        .then((response) => response.json())
        .then((data) => {
            const tableBody = document.querySelector("#data-table tbody");
            data.forEach((row) => {
                const newRow = document.createElement("tr");
                newRow.innerHTML = `
                        <td>${row.payment_id}</td>
                        <td>${row.display_name}</td>
                        <td>${row.country_code}</td>
                        <td>${row.mobile_number}</td>
                        <td>${row.plan_name}</td>
                        <td>${row.amount}</td>
                        <td>${row.tax}</td>
                        <td>${row.total_amount}</td>                            
                        <td>${row.orderid}</td>
                        <td>${row.referenceid}</td>
                        <td>${row.paymentmethod}</td>
                        <td>${row.payment_status}</td>
                        <td>${row.payment_date}</td>
                `;
                tableBody.appendChild(newRow);
            });
        })
        .catch((error) => console.error("Error fetching data: " + error));
});

</script>
          
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous">
    </script>
</body>
</html>