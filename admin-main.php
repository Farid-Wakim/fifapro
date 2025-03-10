<!DOCTYPE html>
<html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
  crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

  <link href="style.css" rel="stylesheet">
</head>

<body>

  <div class="p-3 title text-center display-1">FIFAPRO</div>
  <?php require("navbar-session.php");?>

  <div class="container">


    <h2>Hello Admin</h2> 
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#teams" type="button" role="tab" aria-controls="home" aria-selected="true">Teams</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#players" type="button" role="tab" aria-controls="profile" aria-selected="false">Players</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#matches" type="button" role="tab" aria-controls="contact" aria-selected="false">Matches</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#tournaments" type="button" role="tab" aria-controls="contact" aria-selected="false">Tournaments</button>
      </li>

    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="teams" role="tabpanel" aria-labelledby="teams-tab">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name of Team</th>
              <th scope="col">Logo</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td><img src="./resources/images/team-fcb.jpg" class="img-fluid w-25"></td>
              <td>
                <button class="btn btn-success">Edit</button>
                <button class="btn btn-danger">Delete</button>
              </td>
            </tr>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td><img src="./resources/images/team-fcb.jpg" class="img-fluid w-25"></td>
              <td>
                <button class="btn btn-success">Edit</button>
                <button class="btn btn-danger">Delete</button>
              </td>
            </tr>
          </tbody>
        </table>


      </div>
      <div class="tab-pane fade" id="players" role="tabpanel" aria-labelledby="players-tab">

        <table class="table text-light">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Team</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>
                <button class="btn btn-success">Edit</button>
                <button class="btn btn-danger">Delete</button>
              </td>              
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>
                <button class="btn btn-success">Edit</button>
                <button class="btn btn-danger">Delete</button>
              </td>            </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>
                  <button class="btn btn-success">Edit</button>
                  <button class="btn btn-danger">Delete</button>
                </td>            </tr>
              </tbody>
            </table></div>
            <div class="tab-pane fade" id="matches" role="tabpanel" aria-labelledby="matches-tab">


              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name of Team 1</th>
                    <th scope="col">Name of Team 2</th>
                    <th scope="col">Tournament</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>
                      <button class="btn btn-success">Edit</button>
                      <button class="btn btn-danger">Delete</button>
                    </td>
                  </tr>

                </tbody>
              </table>
            </div>
            <div class="tab-pane fade" id="tournaments" role="tabpanel" aria-labelledby="tournaments-tab">

              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
              <td>
                <button class="btn btn-success">Edit</button>
                <button class="btn btn-danger">Delete</button>
              </td>                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
              <td>
                <button class="btn btn-success">Edit</button>
                <button class="btn btn-danger">Delete</button>
              </td>                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
              <td>
                <button class="btn btn-success">Edit</button>
                <button class="btn btn-danger">Delete</button>
              </td>                  </tr>
                </tbody>
              </table></div>

            </div>


          </div>

          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
          crossorigin="anonymous"></script>
        </body>

        </html>