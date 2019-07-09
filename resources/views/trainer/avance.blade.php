@foreach ($history as $itemhistory)
        <div class="col-sm">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img style="heigth: 100px; width: 100px; background-color: #EFEFEF; margin: 20px;" src="images/{{$itemhistory->view}}" class="card-img-top rounded-circle mx-auto d-block" alt="">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">{{$itemhistory->name}} ({{$itemhistory->process}})</h5>
                      <p class="card-text"></p>{{$itemhistory->description}}</p>
                      <p class="card-text"><small class="text-muted"><a href="/trainers/{{$itemhistory->id}}/history">Ver más...</a></small></p>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        @endforeach