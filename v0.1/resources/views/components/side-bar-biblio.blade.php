{{-- <div class="sidebar">
  <div class="form-check form-switch form-check-inline">    
    <label class="form-check-label" for="flexSwitchCheckDefault"><a class="active" href="#videos"><i class="fa-solid fa-video"></i>Comunicados</a></label>
    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked>
  </div>
  <div class="form-check form-switch">
    <label class="form-check-label" for="flexSwitchCheckChecked"><a href="#logos"><i class="fa-solid fa-train"></i>Convenios</a></label>
    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
  </div>
  <div class="form-check form-switch">
    <label class="form-check-label" for="flexSwitchCheckDisabled"><a href="#fotos"><i class="fa-solid fa-camera"></i>Legislación Laboral</a></label>
    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDisabled" disabled>
  </div>
  <div class="form-check form-switch">
    <label class="form-check-label" for="flexSwitchCheckCheckedDisabled"><a href="#carteles"><i class="fa-solid fa-image"></i>Legislación Ferroviaria</a></label>
    <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled" checked>
  </div>
</div> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="sidebar">
  
  <div class="form-check form-switch">    
    
    <label class="form-check-label" for="flexSwitchCheckDefault"><a class="active" href="#comunicados"><i class="fa-solid fa-bullhorn"></i>Comunicados</a></label>
    <input type="checkbox" name="colorCheckbox" value="comunicados" checked> 
    {{-- <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked></label> --}}
  </div>
  <div class="form-check form-switch">
    <label class="form-check-label" for="flexSwitchCheckChecked"><a href="#convenios"><i class="fa-solid fa-book"></i>Convenios</a></label>
    <input type="checkbox" name="colorCheckbox" value="convenios" checked>
    {{-- <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked> --}}
  </div>
  <div class="form-check form-switch">
    <label class="form-check-label" for="flexSwitchCheckDisabled"><a href="#laboral"><i class="fa-solid fa-book"></i>Legislación Laboral</a></label>
    <input type="checkbox" name="colorCheckbox" value="leg_laboral" checked>
  </div>
  <div class="form-check form-switch">
    <label class="form-check-label" for="flexSwitchCheckCheckedDisabled"><a href="#ferroviaria"><i class="fa-solid fa-train-tunnel"></i>Legislación Ferroviaria</a></label>
    <input type="checkbox" name="colorCheckbox" value="leg_ferroviaria" checked>
    {{-- <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled" checked> --}}
  </div>
</div>
