<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <link rel="stylesheet" href="{{asset('custom/css/demandeStyle.css')}}" />
    <link rel="stylesheet" href="navbar/css/style.css">
    <link rel="stylesheet" href="css/button.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    
    <title>Stage</title>
</head>
<style>
    .row{
        width: 60%;
    }
    .blockinp2{
        border-radius: 12px;
        box-shadow: 0px 3px 6px rgb(0 0 0 / 16%);
        padding: 15px;
        margin-bottom: 100px;
    }
    .desc{
        color: blue;
    }
    .rounded{
        width: 100% !important;
        height: auto;
    }
    .grid-container {
        display: grid;
        grid-template-columns: auto auto auto auto auto  ;
        padding: 10px; 
    }
    .item1 {
        grid-column: 1 / 2;
    }
    .navbar-nav{
        margin-left:auto;
    }
</style>
<body>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
      integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
      crossorigin="anonymous"></script>

      
    <div class="container">
          <div class="blockinp">
            <div class="row">
              <div class="col-sm" class="in">
                <select clas aria-label=".form-select-lg example" class="form-control input">
                  <option disabled selected hidden >Département</option>
                  <option value="1">Technologie de l'information</option>
                  <option value="2">Mecanique</option>
                  <option value="3">électrique</option>
                  <option value="4">Commerce</option>
                  <option value="5">Génie de Procédés</option>
                </select>
              </div>
              <div class="col-sm" class="in">
                <select clas aria-label=".form-select-lg example"  class="form-control input">
                  <option disabled selected hidden>Type de Stage</option>
                  <option value="1">Initiation</option>
                  <option value="2">Perfectionnement</option>
                  <option value="3">pfe</option>
                </select>
              </div>
            </div>
          </div>
        
        <div class="blockinp2">
            <div class="grid-container">
                <div class="item1">
                    <p> Stage de Perfectionnement</p>
                    <p>02/08/2021 </p>
                    <p>Département Technologie de l'information</p>
                    <p class="desc">Description:</p>
                    <p>orem lpsum is simply dummy text of the printing and typestting industry. Lorem Lpsum has been the industry's standard dummy text ever since 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. it has survived not only five centuries</p>
            
                    <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-primary">Demander</button>
                    
                    </div>
                </div>
                <div class="item2">
                    <img src="{{asset('custom/img/instructor-helping-students-in-computer-class.jpg')}}" class="rounded float-end" >
                </div>
            </div>    
        </div>

        <div class="blockinp2">
            <div class="grid-container">
                <div class="item1">
                    <p> Stage de Perfectionnement</p>
                    <p>02/08/2021 </p>
                    <p>Département Technologie de l'information</p>
                    <p class="desc">Description:</p>
                    <p>orem lpsum is simply dummy text of the printing and typestting industry. Lorem Lpsum has been the industry's standard dummy text ever since 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. it has survived not only five centuries</p>
            
                    <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-primary">Demander</button>
                    
                    </div>
                </div>
                <div class="item2">
                    <img src="{{asset('custom/img/instructor-helping-students-in-computer-class.jpg')}}" class="rounded float-end" >
                </div>
            </div>    
        </div>

        <div class="blockinp2">
            <div class="grid-container">
                <div class="item1">
                    <p> Stage de Perfectionnement</p>
                    <p>02/08/2021 </p>
                    <p>Département Technologie de l'information</p>
                    <p class="desc">Description:</p>
                    <p>orem lpsum is simply dummy text of the printing and typestting industry. Lorem Lpsum has been the industry's standard dummy text ever since 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. it has survived not only five centuries</p>
            
                    <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-primary">Demander</button>
                    
                    </div>
                </div>
                <div class="item2">
                    <img src="{{asset('custom/img/instructor-helping-students-in-computer-class.jpg')}}" class="rounded float-end" >
                </div>
            </div>    
        </div>

    </div>
</body>
</html>