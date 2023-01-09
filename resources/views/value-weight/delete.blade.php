<form action="{{ route('value-weight.destroy', $valueWeight->id) }}" method="post">
    <div class="modal-body">
        @csrf
        @method('DELETE')
        <h5 class="text-center">Are you sure you want to delete {{ $valueWeight->name }}?</h5>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="cancelButton">Cancel</button>
        <button type="submit" class="btn btn-danger">Delete</button>
    </div>
</form>

