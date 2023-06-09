@extends('layouts.app')
@section('content')
<style> 
     .select2-container--default .select2-selection--single { 
         height: 2.875rem; 
     } 
  
     .select2-container { 
         width: 100% !important; 
     } 
  
     .select2-container--default .select2-selection--single .select2-selection__arrow { 
         top: 9px; 
     } 
 </style> 
 <div class="content-wrapper"> 
     <div class="card p-2 my-2"> 
         <div class="card-body"> 
             <div class="card-title"> 
                 Ürün Grubu Ekle
             </div> 
             <div class="form" action="/" method="POST"> 
                 <div class="form-group"> 
                     <label for="edit_material_name" name="edit_material_name"> Kategori adı</label> 
                     <input type="text" class="form-control mb-2" placeholder="Kategori adı" aria-label="Kategori adı" id="edit_material_name" name="edit_material_name"> 
                 </div> 
                 <div class="form-group row mb-2"> 
                     <div class="col-md-6 mb-4"> 
                         <label for="edit-dropdown-toggle">Üst kategori</label> 
                         <select class="js-example-basic-single w-100"> 
                             <option value=""></option> 
                             <option value="1">Kategori 1</option> 
                             <option value="2">Kategori 2</option> 
                             <option value="3">Kategori 3</option> 
                             <option value="4">Kategori 4</option> 
                             <option value="5">Kategori 5</option> 
                         </select> 
                     </div> 
                     <div class="col-md-6"> 
                         <div class="form-group"> 
                             <label for="edit-dropdown-toggle">Temin Süresi</label> 
                             <input type="number" class="form-control mb-2" placeholder="Temin Süresi" aria-label="Temin Süresi" id="edit_material_order" name="edit_material_order"> 
                         </div> 
                     </div> 
                 </div> 
                 <div className="d-flex align-items-end"> 
                     <button class="btn btn-primary" type="submit">Kaydet</button> 
                 </div> 
             </div> 
         </div> 
  
     </div> 
 </div>
@endsection

