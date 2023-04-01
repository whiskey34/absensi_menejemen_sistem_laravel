<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
			
        
            <div class="modal-header">
            <h5 class="modal-title"><b>Add New Role</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>

            </div>

            
            <div class="modal-body">
			

                <div class="card-body text-left">

                    <form method="POST" action="{{ route('role_setting.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name <i>{without any space}</i></label>
                            <input type="text" class="form-control" placeholder="Enter a Role name [hyphen accepted]" id="name" name="name"
                                required />
                        </div>
                        <div class="form-group">
                            <label for="slug">slug <i>{without any space & use capital}</i></label>
                            <input type="text" class="form-control" placeholder="Enter Role's slug [hyphen accepted]" id="slug" name="slug"
                                required />
                        </div>

                        <div class="form-group">
                            <div>
                                <button type="submit" class="btn btn-success waves-effect waves-light">
                                    Submit
                                </button>
                                <button type="reset" class="btn btn-danger waves-effect m-l-5" data-dismiss="modal">
                                    Cancel
                                </button>
                            </div>
                        </div>
                       
                        

                        
                    </form>

                </div>
            </div>
			

        </div>

    </div>
</div>
</div>