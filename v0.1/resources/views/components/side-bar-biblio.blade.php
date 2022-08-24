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


<div class="sidebar">
  
  <div class="btn-group">    
    <input type="checkbox" name="colorCheckbox" value="comunicados" checked> 
    <label class="form-check-label" for="flexSwitchCheckDefault"><a class="active" href="#comunicados"><i class="fa-solid fa-bullhorn"></i>Comunicados</a></label>
    
    {{-- <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked></label> --}}
  </div>
  <div class="btn-group">
    <input type="checkbox" name="colorCheckbox" value="convenios" checked>
    <label class="form-check-label" for="flexSwitchCheckChecked"><a href="#convenios"><i class="fa-solid fa-book"></i>Convenios</a></label>
    
    {{-- <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked> --}}
  </div>
  <div class="btn-group">
    <input type="checkbox" name="colorCheckbox" value="leg_laboral" checked>
    <label class="form-check-label" for="flexSwitchCheckDisabled"><a href="#laboral"><i class="fa-solid fa-scale-balanced"></i>Leg. Laboral</a></label>
    
  </div>
  <div class="btn-group">
    <input type="checkbox" name="colorCheckbox" value="leg_ferroviaria" checked>
    <label class="form-check-label" for="flexSwitchCheckCheckedDisabled"><a href="#ferroviaria"><i class="fa-solid fa-train"></i>Leg. Ferroviaria</a></label>
    
    {{-- <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled" checked> --}}
  </div>
</div>
