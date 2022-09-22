   <div id="breakdown" class="container">
       <div class="row justify-contnent-center">
           <div class="col-12">
               <div class="card">
                   <div class="card-header">
                       <h2>Register new breakdown.</h2>
                   </div>
                   <div class="card-body">

                       <select data-create class="form-select mb-3" name="mechanic_id">
                           <option selected value="0">Choose mechanic</option>
                           @foreach ($mechanics as $mechanic)
                               <option value="{{ $mechanic->id }}">{{ $mechanic->name }} {{ $mechanic->surname }}
                               </option>
                           @endforeach
                       </select>

                       <div id="trucks-list"></div>

                       <div class="input-group mb-3">
                           <span class="input-group-text">Title</span>
                           <input data-create type="text" class="form-control" name="title">
                       </div>
                       <select data-create class="form-select mb-3" name="status">
                           <option value="1">Created</option>
                           <option value="2">In progress</option>
                           <option value="3">Done</option>
                       </select>
                       <div class="input-group mb-3">
                           <span class="input-group-text">Notes</span>
                           <textarea data-create class="form_control" type="text" cols="40" rows="15" class="form-control" name="notes"></textarea>
                       </div>
                       <div class="input-group mb-3">
                           <span class="input-group-text">Price</span>
                           <input data-create type="text" class="form-control" name="price">
                       </div>
                       <div class="input-group mb-3">
                           <span class="input-group-text">Discount</span>
                           <input data-create type="text" class="form-control" name="discount">
                       </div>

                       <button data-submit type="button" class="btn btn-primary mt-4">Add problem</button>

                   </div>
               </div>
           </div>
       </div>
   </div>
