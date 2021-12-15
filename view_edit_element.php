<div class="modal fade" id="edit_element<?php echo $row['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Element</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="element/edit_element.php?id=<?php echo $row['id']; ?>" method="post">
        <div class="modal-body">


            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name']; ?>" >
              <label for="floatingInput">Name</label>
            </div>

            <div class="form-floating mb-3">
              <select class="form-select" id="group" name="group" aria-label="Floating label select example" value="<?php echo $row['group']; ?>">
                <option <?php if ($row['group'] == "None") {echo "selected";} ?>>None</option>
                <option value='Metallic' <?php if ($row['group'] == "Metallic") {echo "selected";} ?>>Metallic</option>
                <option value='Non-Metallic' <?php if ($row['group'] == "Non-Metallic") {echo "selected";} ?>>Non-Metallic</option>
                <option value='Metalloid' <?php if ($row['group'] == "Metalloid") {echo "selected";} ?>>Metalloid</option>
              </select>
              <label for="floatingSelect">Group</label>

            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="atomic_no" name="atomic_no" value="<?php echo $row['atomic_no']; ?>">
              <label for="floatingInput">Atomic No</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="atomic_weight" name="atomic_weight" value="<?php echo $row['atomic_weight']; ?>">
              <label for="floatingInput">Atomic Weight</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="description" name="description" value="<?php echo $row['description']; ?>">
              <label for="floatingInput">Description</label>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" name="edit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>