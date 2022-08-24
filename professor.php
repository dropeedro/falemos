<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Falemos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/class_request.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  </head>
  <body>
    <header>
        <?php include './views/header.php'; ?>
    </header>


<div class="main">

<div class="container">
    <div class="go-back">
        <a href="search.php">
        <img src="./images/svg/back.svg" width="50rem">
        </a>
    </div>
    <div class="row">
    <div class="content-info">
    <div id="prof-info" class="prof-info col-3">
        <div class="card card-prof ">
            <div class="img-prof">
                <img class="card-img-top" src="https://thumbs.dreamstime.com/b/omita-el-icono-del-perfil-avatar-placeholder-gris-de-la-foto-99724602.jpg" alt="Card image cap">
            </div>
            <div class="stars">
                <i class="bi bi-star-fill"></i><strong> 5 </strong><small>(20 Reviews)</small>
            </div>

            <div class="card-body prof-top-info">
                <table class="table table-info-prof">
                    <tr>
                        <th>Students: </th>
                        <td>50</td>
                    </tr>
                    <tr>
                        <th>Place: </th>
                        <td>Utah</td>
                    </tr>
                </table>
            </div>
            <button class="btn btn-request" data-bs-toggle="modal" data-bs-target="#requestModal">
                <i class="bi bi-send"></i>&nbsp; Request a class
            </button>
        </div>
    </div>
    <div class="prof-text col-9">
        <div class="card prof-body-back">
        <div class="card-body">
                <p class="card-text prof-body">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto vero sunt totam ipsa nam corporis, ad similique molestias cupiditate voluptates!</p>
                <p class="card-text"><small class="text-muted">Salt Lake, Utah</small></p>
            </div>
            <!-- <img class="card-img-bottom" src="..." alt="Card image cap"> -->
        </div>
        <div class="about">
            <h1>About the class</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, vel! Numquam asperiores corrupti doloremque, accusamus facere laudantium commodi obcaecati excepturi veniam ipsum provident totam eligendi soluta quo temporibus natus ex dignissimos, itaque, cum eos. Maxime autem eaque veritatis minus magnam ullam cupiditate quas dignissimos molestiae beatae, nulla enim facere similique saepe obcaecati quo ex consequuntur illum nostrum qui debitis aliquam sequi. Cumque fugit, numquam aliquam pariatur tempore ducimus, repellendus debitis laudantium minus molestiae cum, ipsum incidunt sapiente non ipsam commodi nemo sed modi deserunt natus ullam? Asperiores, ipsum quos optio adipisci labore porro rem, excepturi assumenda nisi tempora alias officia.</p>
        </div>
        <div class="info">
                <div class=" info-class">
                    <div class="icons">
                        <i class="bi bi-flag"></i>
                    </div>
                    <p class="card-text"><strong>Language:</strong></p>
                    <p>Spanish</p>
                </div>
                <div class=" info-class">
                    <div class="icons">
                        <i class="bi bi-bullseye"></i>
                    </div>
                    <p><strong>Levels:</strong></p>
                    <p>Advance</p>
                    <p>Intermediate</p>
                    <p>Beginner</p>
                </div>
            
        </div>

        <div class="about-prof">
            <h1>About James...</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, vel! Numquam asperiores corrupti doloremque, accusamus facere laudantium commodi obcaecati excepturi veniam ipsum provident totam eligendi soluta quo temporibus natus ex dignissimos, itaque, cum eos. Maxime autem eaque veritatis minus magnam ullam cupiditate quas dignissimos molestiae beatae, nulla enim facere similique saepe obcaecati quo ex consequuntur illum nostrum qui debitis aliquam sequi. Cumque fugit, numquam aliquam pariatur tempore ducimus, repellendus debitis laudantium minus molestiae cum, ipsum incidunt sapiente non ipsam commodi nemo sed modi deserunt natus ullam? Asperiores, ipsum quos optio adipisci labore porro rem, excepturi assumenda nisi tempora alias officia.</p>
        </div>

        <div class="reviews">
            <div class="reviews-title">
                <h1>Reviews</h1>
                <h2><i class="bi bi-info-circle"
                        id="tooltipReviews" 
                        data-toggle="tooltip" 
                        data-bs-placement="bottom"
                        data-bs-custom-class="custom-tooltip"
                        data-bs-title="All our evaluations are collected by customer service and are 100% reliable. They correspond to real experiences lived by the students with James">
                    </i>
                </h2>
            </div>
            <div class="card reviews-container">
                <div class="card-body">
                    <div class="student-review-name">
                        <div class="icons-student"> J </div>
                        <div class="name-student">
                        <h5>James </h5>
                        </div>
                        <div class="stars" style=" position: absolute;
                                                    right: 10px;">
                            <i class="bi bi-star-fill"></i><strong> 5 </strong>
                        </div>
                    </div>
                    <p class="card-text">
                        <strong> Perfect! </strong>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto vero sunt totam
                    </p>
                    <p class="card-text">
                        <small class="text-muted">Salt Lake, Utah</small>
                    </p>
                </div>
            </div>
            <div class="card reviews-container">
                <div class="card-body">
                    <div class="student-review-name">
                        <div class="icons-student"> M </div>
                        <div class="name-student">
                        <h5>Mike </h5>
                        </div>
                        <div class="stars" style=" position: absolute;
                                                    right: 10px;">
                            <i class="bi bi-star-fill"></i><strong> 4 </strong>
                        </div>
                    </div>
                    <p class="card-text">
                        <strong> Excelent! </strong>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto vero sunt totam
                    </p>
                    <p class="card-text">
                        <small class="text-muted">Provo, Utah</small>
                    </p>
                </div>
            </div>

        </div>

        <div class="video-prof">
            <h1>Video</h1>
            <div class="video">
                <iframe class="video-config" src="https://www.youtube.com/embed/2SUwOgmvzK4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

    </div> 
    </div>   
    </div>
</div>
<!-- related prof -->
<div class="content-related-prof container">
    <h1>Related Teachers</h1>
    <div class="related-prof-content row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
            <div class="card card-related">
            <img src="https://thumbs.dreamstime.com/b/omita-el-icono-del-perfil-avatar-placeholder-gris-de-la-foto-99724602.jpg" class="card-img" alt="...">
            <div class="card-body card-body-related">
                <div class="card-title-related">
                    <h5 class="card-title"><strong>Jack Sparrow</strong></h5>
                    <p><small>Utah</small></p>
                    <i class="bi bi-star-fill"></i><strong> 5 </strong><small>(20 Reviews)</small>
                </div>
                <br>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur fugiat minima obcaecati suscipit quos placeat nostrum quae harum praesentium repellat!</p>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card card-related">
            <img src="https://thumbs.dreamstime.com/b/omita-el-icono-del-perfil-avatar-placeholder-gris-de-la-foto-99724602.jpg" class="card-img" alt="...">
            <div class="card-body card-body-related">
                <div class="card-title-related">
                    <h5 class="card-title"><strong>Jack Sparrow</strong></h5>
                    <p><small>Utah</small></p>
                    <i class="bi bi-star-fill"></i><strong> 5 </strong><small>(20 Reviews)</small>
                </div>
                <br>
                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt, voluptate.</p>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card card-related">
            <img src="https://thumbs.dreamstime.com/b/omita-el-icono-del-perfil-avatar-placeholder-gris-de-la-foto-99724602.jpg" class="card-img" alt="...">
            <div class="card-body card-body-related">
                <div class="card-title-related">
                    <h5 class="card-title"><strong>Jack Sparrow</strong></h5>
                    <p><small>Utah</small></p>
                    <i class="bi bi-star-fill"></i><strong> 5 </strong><small>(20 Reviews)</small>
                </div>
                <br>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur fugiat minima obcaecati suscipit quos placeat nostrum quae harum praesentium repellat!</p>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card card-related">
            <img src="https://thumbs.dreamstime.com/b/omita-el-icono-del-perfil-avatar-placeholder-gris-de-la-foto-99724602.jpg" class="card-img" alt="...">
            <div class="card-body card-body-related">
                <div class="card-title-related">
                    <h5 class="card-title"><strong>Jack Sparrow</strong></h5>
                    <p><small>Utah</small></p>
                    <i class="bi bi-star-fill"></i><strong> 5 </strong><small>(20 Reviews)</small>
                </div>
                <br>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur fugiat minima obcaecati suscipit quos placeat nostrum quae harum praesentium repellat!</p>
            </div>
            </div>
        </div>
</div>
</div>

</div>


<!-- Modal  Request -->
    <div class="modal fade" id="requestModal" tabindex="-1" aria-labelledby="requestModalLabel" aria-hidden="true">
    <!-- Scrollable modal -->
    <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
        <div class="modal-body">
            <div class="form-contact-container">
                <div class="about-student">
                    <div class="text">
                        <h1>Your first class with James</h1>
                    </div>
                    <div class="introduce-student">
                        <p>Introduce yourself to James...</p>
                        <textarea rows="1" class="form-control introduce-input" placeholder="Tell him about you...&#10;- Your disponibility&#10;- Your needs"></textarea>
                    </div>
                    <div class="date-classes">
                        <p>Date to start your first class</p>
                        <input type="date" class="form-control date-picker">
                    </div>
                    <div class="send-request">
                        <a class="btn btn-request" href="#">
                            <i class="bi bi-send"></i>&nbsp; Send Request
                        </a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    </div>
</div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
   <footer>
    <?php include './views/footer.php' ?>
  </footer>
  <script src="scripts/jquery-1.4.2.min.js" type="text/javascript"></script>
  <script src="js/professor.js"></script>
  <script src="js/header.js"></script>
</html>