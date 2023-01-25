<style>
.comunicadosVista{
    float: right;
    margin: 8px;
}
</style>
@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <nav class="comunicadosVista">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><i class="fa-solid fa-file-lines"></i></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="fa-solid fa-image"></i></button>
                    </li>
                </ul>
            </nav>
            <div class="tab-content p-3" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                    <h3 class="rojo">Comunicado 12</h3>
                    <p class="blanco justificado"><br>
                    <i>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</i><br><br>
                    <i>"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain..."</i><br><br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dapibus arcu urna, ut placerat felis tincidunt id. Quisque luctus nibh eget volutpat eleifend. Aliquam rhoncus lorem ac enim aliquet, id feugiat libero tempor. Donec interdum sollicitudin neque, sed vestibulum ante porta a. Phasellus diam augue, congue ut elementum eget, blandit vel odio. Mauris pharetra pulvinar ipsum, quis pulvinar libero rhoncus eget. Suspendisse elit ligula, aliquet vel cursus sit amet, pellentesque cursus felis. Proin vitae molestie orci. Aliquam ac faucibus quam, eu commodo tellus.<br><br>
                    
                    Integer vel mollis neque. Fusce mauris nisl, malesuada eu sapien sed, fermentum efficitur nibh. Curabitur dignissim sed massa et sagittis. Donec accumsan eget mauris vel lobortis. Nunc imperdiet eget neque id porttitor. Vestibulum vel tortor nibh. Sed laoreet mollis pulvinar. Cras laoreet augue eu dui sodales, vel tempor diam ornare. Fusce lacinia ante ipsum, vitae cursus ante interdum in. Proin sollicitudin et metus in elementum. Integer quis vulputate odio, quis elementum dolor. Maecenas vitae ante dui.<br><br>
                    
                    Integer quis scelerisque orci. Donec at diam et mi malesuada scelerisque. Fusce tincidunt justo id sapien sollicitudin, dictum finibus nunc luctus. Sed suscipit ultricies elit. Nam id enim ac nisl feugiat eleifend. Nam et dignissim ex. Vivamus iaculis magna nulla. Nunc hendrerit ut tortor at iaculis. Sed pellentesque magna mi. Quisque hendrerit mollis ipsum at maximus. Donec eu lorem sit amet lectus molestie viverra. Ut commodo consequat porttitor. In quam sem, gravida eu rutrum et, mattis in tortor.<br><br>
                    
                    Fusce felis enim, sodales ut ipsum eget, vestibulum gravida arcu. Curabitur tempor lacus ut elit vehicula fermentum. Ut eu quam malesuada, imperdiet mi at, mattis nulla. Sed lacus metus, tincidunt quis pretium ut, tempor a massa. Sed at tristique nibh, quis lacinia metus. Nam et urna sit amet sem scelerisque fringilla. Morbi et ligula nec augue luctus commodo eu finibus urna. Sed a lacus sollicitudin, tincidunt dui a, consequat enim. Sed tortor felis, scelerisque eget lectus quis, aliquam dictum elit. Nulla eu turpis maximus, tincidunt felis a, condimentum erat. Pellentesque mollis purus justo, in dapibus urna luctus fermentum. Etiam nec augue vel orci euismod tincidunt nec vel dui. Integer elementum ipsum magna, sollicitudin imperdiet turpis luctus eget. Proin a tincidunt urna. Pellentesque volutpat lacus dignissim venenatis facilisis.<br><br>
                    
                    Integer iaculis magna orci, in posuere ex vestibulum et. Nulla sed faucibus ligula. Proin cursus nunc a nulla luctus mattis. Morbi accumsan lorem ut nisi sodales ornare. Nulla facilisi. Aliquam a justo laoreet, ultricies massa ut, dictum massa. Fusce facilisis, erat sit amet iaculis dapibus, augue nulla gravida ligula, ac ultricies elit purus a mi. In a tellus eget augue lacinia mollis accumsan pulvinar tellus. Fusce ipsum enim, rhoncus in auctor eu, finibus nec ex. Ut vel pellentesque justo. Nam finibus, turpis sit amet maximus scelerisque, dolor tortor aliquet leo, eget rutrum ligula urna ut neque. Donec sit amet luctus dui, non ultricies lacus. Sed non rhoncus libero, a eleifend nibh. Sed nec dignissim sem. Quisque nunc massa, lobortis ut ligula sit amet, hendrerit aliquam <br><br>
                    
                    Generated 5 paragraphs, 490 words, 3235 bytes of Lorem Ipsum</p>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                    <img class="img-fluid" src="/img/COM 6. RENFE. PV MATERNIDAD PATERNIDAD.jpg" alt="Comunicado" />
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">...</div>
                <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
            </div>
            {{-- <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false" disabled>Disabled</button>
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">...</div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">...</div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">...</div>
                <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
              </div> --}}
            
        </div>
        <div class="col-md-6">
            <h1 class="blanco">Elecciones Sindicales 2023</h1>
            <iframe width="900" height="506" src="https://www.youtube.com/embed/gyFjseUW0NE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>
</div>
@endsection