
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Landing Page</title>
    <link rel="stylesheet" href="/stylings/styles.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
    
    <link
    rel="stylesheet"
    href="/node_modules/bootstrap/dist/css/bootstrap.min.css"
  />

    <script
      defer
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"
    ></script>

    <script defer src="/node_modules/bootstrap/dist/js/bootstrap.bundle.js">
    </script>

    <script
      src="https://kit.fontawesome.com/fae056ab45.js"
      crossorigin="anonymous"
    ></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <!--Navigation Bar-->
    <nav
      class="navbar nav-underline sticky-lg-top navbar-expand-lg bg-body-tertiary"
    >
      <div class="container-fluid">
        <a class="navbar-brand" id="brand" href="index.html">
          <img src="/assets/logo-nobg.png" alt="" class="logo-pic" />
          Agrikultur'App
        </a>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon fs-1"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-end fs-2">
            <li class="nav-item me-2">
              <a class="nav-link" id="nav-link" aria-current="page" href="#hero"
                ><i class="fa-solid fa-house"></i> Home</a
              >
            </li>
            <li class="nav-item me-2">
              <a class="nav-link" href="#about" id="nav-link"
                ><i class="fa-solid fa-address-card"></i> About Us</a
              >
            </li>
            <li class="nav-item me-2">
              <a class="nav-link" href="#contact" id="nav-link"
                ><i class="fa-solid fa-phone"></i> Contact Us</a
              >
            </li>
            <li class="nav-item me-2">
              <a class="nav-link" href="#faqs" id="nav-link"
                ><i class="fa-regular fa-circle-question"></i> FAQs</a
              >
            </li>
          </ul>
          <a
            class="btn btn-success float-end"
            id="Login-btn"
            href="/pages/Login.php"
          >
            <i class="fa-regular fa-user"></i>
            Login
          </a>
        </div>
      </div>
    </nav>
    <!--Navigation Bar-->
    <div class="green-patch"></div>
    <div class="repolyo">
      <img src="/assets/cabbage2.png" alt="" class="img-fluid" />
    </div>
    <main>
      <!--Hero Section-->
      <section
        class="hero-section d-flex justify-content-center align-items-center"
        id="hero"
      >
        <div class="hero-content d-flex flex-column p-5">
          <div class="hero-typings mt-5">
            <p class="title">
              What is <span class="text-success">Agrikultur’App?</span>
            </p>
            <p class="desc">
              <span class="text-success">Agrikultur’App</span> is an
              Agricultural Online Produce Auction Platform, which aims to aid
              the farmers’ need of mediating their deals with more profits and
              also providing affordable goods for the customers.
            </p>
            <a
              href="/pages/SignUp.html"
              class="btn btn-success border-black d-block d-sm-inline-block started"
              id="start-btn"
              >Start Now <i class="fa-solid fa-angles-right"></i
            ></a>
          </div>
        </div>
      </section>
      <!--Hero Section-->

      <!--About Section-->
      <section class="about-section container-fluid" id="about">
        <p class="title"><i class="fa-solid fa-address-card"></i> About Us</p>
        <div class="about-content">
          <div class="container-fluid ror">
            <div class="row">
              <div class="col text-center">
                <p class="md-title">The Making of Agrikultur'App</p>
              </div>
            </div>
            <div class="row mb-5">
              <div class="col">
                <img
                  src="https://images.pexels.com/photos/440731/pexels-photo-440731.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                  alt=""
                  class=""
                  id="about-pic"
                />
              </div>
            </div>
            <div
              class="d-flex justify-content-between flex-column flex-lg-row mb-5"
              id="flex-info"
            >
              <div class="info-card text-center">
                <p class="title">Why was Agrikultur'App Founded</p>
                <p class="text-start">
                  Due to the impending issue of middlemen and oversupply of agri
                  products, The members of the development team have found the
                  idea of making this platform,advised by Mr. Nikko HIbionada -
                  an agribusinessman from Mindanao and guided by Dr. Marlon
                  Gamido.
                </p>
              </div>
              <div class="info-card text-center">
                <p class="title">About the Devs Team</p>
                <p class="text-start">
                  The devs team are currently 4th Year BSIT Students Specialized
                  in Web and Mobile Application (WMA). The team is led by Teddy
                  Pascual (Programmer), followed by Denmark Cube (Programmer),
                  Darren Ventura (Visual Designer) and Emmanuel Paulo (Technical
                  Writer).
                </p>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col text-center">
                <p class="md-title">Our Team</p>
              </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
              <div class="col d-flex justify-content-center">
                <figure class="figure">
                  <img
                    src="https://i0.wp.com/fapello.com/content/c/h/chichi/1000/chichi_0164.jpg?w=600"
                    alt=""
                    class="img-thumbnail figure-img"
                  />
                  <figcaption class="figure-caption text-center fs-1">
                    Teddy Pascual
                  </figcaption>
                  <figcaption class="figure-caption text-center fs-1">
                    Leader/Programmer
                  </figcaption>
                  <figcaption class="figure-caption text-center fs-1">
                    <a href="" class="btn btn-outline-success fs-4 w-100"
                      >Learn More</a
                    >
                  </figcaption>
                </figure>
              </div>
              <div class="col d-flex justify-content-center">
                <figure>
                  <img
                    src="https://lh3.googleusercontent.com/qRwAz383OzWS2-aHXGjB8_Lrd6QmC5hslIqO6-Wa8vY-sMJJmfYbttNTUyS4j6Q-GD05S5D1isPkEYu6PxNQR4DGy1QisVpZMNinMkXaCivP0n-jM6pX"
                    alt=""
                    class="img-thumbnail figure-img"
                  />
                  <figcaption class="figure-caption text-center fs-1">
                    Denmark Cube
                  </figcaption>
                  <figcaption class="figure-caption text-center fs-1">
                    Programmer
                  </figcaption>
                  <figcaption class="figure-caption text-center fs-1">
                    <a href="" class="btn btn-outline-success fs-4 w-100"
                      >Learn More</a
                    >
                  </figcaption>
                </figure>
              </div>
              <div class="col d-flex justify-content-center">
                <figure>
                  <img
                    src="https://preview.redd.it/3vqc87ti4wfa1.jpg?width=1080&crop=smart&auto=webp&v=enabled&s=9a4b2991dcd78f4b7ef365f4feddff6326fb8632"
                    alt=""
                    class="img-thumbnail figure-img img-fluid"
                  />
                  <figcaption class="figure-caption text-center fs-1">
                    Darren Ventura
                  </figcaption>
                  <figcaption class="figure-caption text-center fs-1">
                    Visual Designer
                  </figcaption>
                  <figcaption class="figure-caption text-center fs-1">
                    <a href="" class="btn btn-outline-success fs-4 w-100"
                      >Learn More</a
                    >
                  </figcaption>
                </figure>
              </div>
              <div class="col d-flex justify-content-center">
                <figure>
                  <img
                    src="https://lh3.googleusercontent.com/jh-LCdlmH97D3jzwTqBUZ8daR7EDreAVeNP3BX4rY2FJEJxk4v-CCcO1etDZa3ZMyqZmZUOXQ2ageNGhP75PKGh3qA2ZkOQUNg2Go2y0NvW0gvhVZYVYog=s1024"
                    alt=""
                    class="img-thumbnail figure-img"
                  />
                  <figcaption class="figure-caption text-center fs-1">
                    Emmanuel Paulo
                  </figcaption>
                  <figcaption class="figure-caption text-center fs-1">
                    Technical Writer
                  </figcaption>
                  <figcaption class="figure-caption text-center fs-1">
                    <a href="" class="btn btn-outline-success fs-4 w-100"
                      >Learn More</a
                    >
                  </figcaption>
                </figure>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--About Section-->

      <!--Contact Section-->
      <section class="contact-section container-fluid" id="contact">
        <div class="contact-content">
          <p class="title" id="contact-text">
            <i class="fa-solid fa-phone"></i> Contact Us
          </p>
          <div class="row row-cols-1 row-cols-lg-2">
            <div
              class="col d-flex flex-column align-items-center contact-details justify-content-center"
            >
              <div
                class="contact-info d-flex justify-content-center align-items-center"
              >
                <div class="d-flex flex-column justify-content-evenly h-75">
                  <p class="md-title">
                    <i class="fa-solid fa-phone"></i> 09982409945
                  </p>
                  <p class="md-title">
                    <i class="fa-regular fa-envelope"></i>
                    agrikulturapp@gmail.com
                  </p>
                  <p class="md-title">
                    <i class="fa-solid fa-location-dot"></i> Balanti, Tarlac
                  </p>
                </div>
              </div>
            </div>
            <form
              class="col d-flex flex-column align-items-center p-5 justify-content-evenly"
            >
              <div class="form-floating w-100 mb-4 mg-md-0">
                <input
                  type="text"
                  class="form-control"
                  id="contact-name"
                  placeholder="input name here"
                />
                <label for="contact-name" class="label-form">Name</label>
              </div>
              <div class="form-floating w-100 mb-4 mg-md-0">
                <input
                  type="email"
                  class="form-control"
                  id="contact-email"
                  placeholder="input email here"
                />
                <label for="contact-email" class="label-form">Email</label>
              </div>
              <div class="form-floatng mb-4 mg-md-0">
                <textarea
                  class="form-control w-100"
                  id="contact-message"
                  cols="200"
                  rows="10"
                  placeholder="Message"
                ></textarea>
              </div>
              <button type="submit" class="btn btn-success w-100" id="msg-btn">
                Submit
              </button>
            </form>
          </div>
        </div>
      </section>
      <!--Contact Section-->

      <!--FAQS Section-->
      <section class="faqs-section container-fluid" id="faqs">
        <p class="title">
          <i class="fa-regular fa-circle-question"></i> FAQs (Frequently Asked
          Questions)
        </p>
        <div class="faqs-content">
          <div class="accordion-cont">
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button
                    class="accordion-button"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseOne"
                    aria-expanded="true"
                    aria-controls="collapseOne"
                    id="accordion-head"
                  >
                    <p class="md-title">What is Produce Auction?</p>
                  </button>
                </h2>
                <div
                  id="collapseOne"
                  class="accordion-collapse collapse show"
                  aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    <p>
                      A produce auction is a wholesale market outlet for local
                      farm and greenhouse products. Fresh produce, as well as a
                      variety of other agricultural products, is offered for
                      sale to the highest bidder (Source: University of
                      Kentucky).
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo accordion-head">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo"
                    aria-expanded="false"
                    aria-controls="collapseTwo"
                    id="accordion-head"
                  >
                    <p class="md-title">
                      Who will benefit using Agrikultur'App?
                    </p>
                  </button>
                </h2>
                <div
                  id="collapseTwo"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    <p>
                      The farmers, consumers, and other industries (such as
                      restaurants) will benefit this Agrikultur'App platform.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseThree"
                    aria-expanded="false"
                    aria-controls="collapseThree"
                    id="accordion-head"
                  >
                    <p class="md-title">
                      What is the Agrikultur'App platform's goal?
                    </p>
                  </button>
                </h2>
                <div
                  id="collapseThree"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingThree"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    <p>
                      To help the farmers by placing their produce to auction
                      and act as the middleman (without the unfair payment to
                      their service) and to provide the agricultural products to
                      the market more affordable than ever.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseFour"
                    aria-expanded="false"
                    aria-controls="collapseFour"
                    id="accordion-head"
                  >
                    <p class="md-title">
                      Why and how will Agrikultur'App use produce auction?
                    </p>
                  </button>
                </h2>
                <div
                  id="collapseFour"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingFour"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    <p>
                      Produce auction is the most optimal method to sell the
                      agricultural products that the farmers are producing. It
                      would give them maximum possible revenues and more access
                      with larger consumer and co-producers connections online.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseFive"
                    aria-expanded="false"
                    aria-controls="collapseFive"
                    id="accordion-head"
                  >
                    <p class="md-title">
                      Which product or items does Agrikultur'App means to serve
                      for auction?
                    </p>
                  </button>
                </h2>
                <div
                  id="collapseFive"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingFive"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    <p>
                      Agricultural products, particularly high-value crops (HVC)
                      that provide higher net returns per hectare to the
                      farmers.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseSix"
                    aria-expanded="false"
                    aria-controls="collapseSix"
                    id="accordion-head"
                  >
                    <p class="md-title">
                      I am a farmer, how could I place or start an auction?
                    </p>
                  </button>
                </h2>
                <div
                  id="collapseSix"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingSix"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    <p>
                      If you are a farmer, you can add and select your chosen
                      product on "Add Auction Listing" at the auction page. Then
                      the possible buyers will place their bids on your
                      auctioned item.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingSeven">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseSeven"
                    aria-expanded="false"
                    aria-controls="collapseSeven"
                    id="accordion-head"
                  >
                    <p class="md-title">
                      I am a consumer/buyer, how could I place bidding?
                    </p>
                  </button>
                </h2>
                <div
                  id="collapseSeven"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingSeven"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    <p>
                      If you are a consumer/buyer, you can select "Bid" of your
                      desired amount on your chosen product at the Auction
                      Listing on the Auction Page.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--FAQS Section-->
    </main>

    <!--Footer-->
    <footer class="container-fluid">
      <div class="row row-cols-1 row-cols-md-1 row-cols-xxl-2">
        <div
          class="col d-flex flex-column justify-content-center align-items-center mb-5 mt-5"
        >
          <p class="title">Want to buy a produce?</p>
          <a
            class="btn btn-success fs-2 w-auto border-black"
            href="/pages/SignUp.html"
            >Get Started <i class="fa-solid fa-chevron-right"></i
          ></a>
        </div>
        <div
          class="col d-flex justify-content-center align-items-center d-block d-lg-none"
        >
          <ul class="nav">
            <li>
              <a class="nav-link fs-1 text-light" href="#hero">Home</a>
            </li>
            <li><a class="nav-link fs-1 text-light" href="#about">About</a></li>
            <li>
              <a class="nav-link fs-1 text-light" href="#contact">Contact Us</a>
            </li>
            <li><a class="nav-link fs-1 text-light" href="#faqs">FAQs</a></li>
          </ul>
        </div>
        <div class="col d-flex justify-content-center align-items-center">
          <a href="" class="md-title m-5 footer-link"
            ><i class="fa-brands fa-facebook"></i> Facebook</a
          >
          <a href="" class="md-title m-5 footer-link"
            ><i class="fa-brands fa-square-instagram"></i> Instagram</a
          >
          <a href="" class="md-title footer-link"
            ><i class="fa-brands fa-tiktok"></i> Tiktok</a
          >
        </div>
      </div>
    </footer>
    <!--Footer-->
  </body>
  
</html>
