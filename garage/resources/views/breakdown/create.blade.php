   <div class="container">
       <div class="row justify-contnent-center">
           <div class="col-12">
               <div class="card">
                   <div class="card-header">
                       <h2>Register new breakdown.</h2>
                   </div>
                   <div class="card-body">

                    <select class="form-select mb-3" name="mechanic_id">
                        <option selected value="0">Choose mechanic</option>
                        @foreach($mechanics as $mechanic)
                        <option value="{{$mechanic->id}}">{{$mechanic->name}} {{$mechanic->surname}}</option>
                        @endforeach
                    </select>

                    <button type="submit" class="btn btn-primary mt-4">Add problem</button>
                   </div>
               </div>
           </div>
       </div>
   </div>
