<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-xl">
      <div class="container">
        <a class="navbar-brand" href="dunzoproject.html"><img class="w-50" src="Images/Web_Logo.jpg"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <!-- Button trigger modal -->
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop1">
                <i class="fa-solid fa-location-dot"></i> Set Location
              </a>
              <!-- Modal -->
              <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Your Location</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-md-2"><i class="fa-solid fa-magnifying-glass"></i></div>
                        <div class="col-md-10"><input type="area" id="search" name="search"
                            placeholder="Search for an area, location name"></div>
                      </div>
                      <a class="location" href="#">
                        <div class="row pt-3">
                          <div class="col-md-2"><i class="fa-solid fa-location-crosshairs"></i></div>
                          <div class="col-md-10">
                            <p>Use current location</p>
                          </div>
                        </div>
                      </a>
                      <div><img class="w-75" src="Images/select-location-empty.jpg"></div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Dunzo for Partners</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Business with Dunzo
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">
                    <div class="row">
                      <div class="col-md-2"><img class="w-100" src="Images/d4b.png"></div>
                      <div class="col-md-10">
                        <h6>Need delivery partners?</h6>
                        <p class="text-sm">Sign up on Dunzo for Business and get your<br> first delivery free!</p>
                      </div>
                    </div>
                  </a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">
                    <div class="row">
                      <div class="col-md-2"><img class="w-100" src="Images/b2c.png"></div>
                      <div class="col-md-10">
                        <h6>Sell products on Dunzo</h6>
                        <p class="small">Apply to get your products listed on the Donzo app</p>
                      </div>
                    </div>
                  </a></li>
              </ul>
            </li>
            <li class="nav-item">
          </ul>
          <div class="cart">
            <a class="mx-3" href="#"><i class="fa-solid fa-magnifying-glass"></i>Search</a>
            <a class="mx-3" href="Cartpage.html"><i class="fa-solid fa-cart-shopping"></i>Cart</a>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success rounded-pill" data-bs-toggle="modal"
              data-bs-target="#staticBackdrop">Sign in</button>
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
              aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel"><img class="w-25"
                        src="Images/signin-icon.png"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div>
                      <h4>Sign in</h4>
                      <p>Get started with Dunzo</p>
                    </div>
                    <div>
                      <p>*Enter your phone number</p>
                      <div class="row">
                        <div class="col-md-2">
                          <div class="row">
                            <div class="col-md-6"><i class="fa-solid fa-phone"></i></div>
                            <div class="col-md-6">
                              <p>+91</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-10">
                          <input type="number" id="mobilenumber" name="mobilenumber" placeholder="Mobile number">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-10"><a href="#"><input type="checkbox" id="terms" name="terms"> I accept the
                            Terms of use & Privacy policy</a></div>
                        <div class="col-md-2"><a href="#">T&C <i class="fa-solid fa-chevron-right"></i></a></div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-success rounded-pill w-100" data-bs-dismiss="modal">Send
                      OTP</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header> 
</body>
</html>
