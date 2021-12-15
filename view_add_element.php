<div class="modal fade" id="add_element" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Element</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="element/add_element.php" method="post">
        <div class="modal-body">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="name" name="name" placeholder="Name">
              <label for="floatingInput">Name</label>
            </div>
            <div class="form-floating mb-3">
              <select class="form-select" id="group" name="group" aria-label="Floating label select example">
                <option selected>None</option>
                <option value="Plant">Metallic</option>
                <option value="Beast">Non-Metallic</option>
                <option value="Aqua">Metalloid</option>
            
        
              </select>
              <label for="floatingSelect">Group</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="atomic_no" name="atomic_no">
              <label for="floatingInput">Atomic No</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="atomic_weight" name="atomic_weight">
              <label for="floatingInput">Atomic Weight</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="description" name="description" >
              <label for="floatingInput">Description</label>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" name="add" class="btn btn-secondary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>