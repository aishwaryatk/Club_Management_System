<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="about.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title></title>
    <style>
        body {
            background-image: linear-gradient(to right, rgb(255, 240, 23), rgb(170, 133, 9));
        }

        .accordion {
            margin-left: 170px;
            width: 1000px;
        }

        
        

        

        

        #spark {
            width: 100px;
            height: 40px;
        }

        

        #footie {
            margin-top: 200px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <img height="30px"
            src="data:image/png;base64,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"
            alt="">
          <a class="navbar-brand" href="#">CSTH</a>
    
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
              </li>
    
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    
    <div class="accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                    aria-controls="panelsStayOpen-collapseOne">
                    History And Records
                </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">
                    <strong>History</strong>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse veniam architecto sed voluptatum reiciendis nemo nobis qui! Recusandae quidem reprehenderit dolorem iure, labore qui deleniti architecto maxime laboriosam. Debitis, rerum ducimus sint enim vero sequi rem libero aspernatur officia ullam temporibus obcaecati autem odit molestias odio hic nesciunt tempore repellat distinctio officiis mollitia reiciendis sapiente. Nam perspiciatis blanditiis vel illum?
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseTwo">
                    Features
                </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                aria-labelledby="panelsStayOpen-headingTwo">
                <div class="accordion-body">
                    <strong>Various Features we have are given below.</strong>
                    <ul>
                        <li>Joint accounts allowed</li>
                        <li>Automatic renewal of the deposit</li>
                        <li>Maturity period range: 7 days to 10 years</li>
                        <li>Square Bank FD rates for the general public for deposits less than Rs.2 crore: 2.95% p.a. to
                            5.50% p.a.</li>
                        <li>Partial withdrawals allowed in multiples of Rs.1,000</li>
                    </ul>


                </div>
            </div>
        </div>

       

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
            integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
            integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
            crossorigin="anonymous"></script>


</body>

</html>