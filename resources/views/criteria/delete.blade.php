<form action="{{ route('criteria.destroy', $criteria->id) }}" method="post">
    <div class="modal-body">
        @csrf
        @method('DELETE')
        <h5 class="text-center">Are you sure you want to delete {{ $criteria->name }}?</h5>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="cancelButton">Cancel</button>
        <button type="submit" class="btn btn-danger">Delete</button>
    </div>
</form>

