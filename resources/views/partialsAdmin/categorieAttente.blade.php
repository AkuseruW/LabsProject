<div class="container mt-5">
        <div class="row">

            <div class="col-md-12">
                <h4>Categories en attente de validation !
                    </h4>
                <div class="table-responsive">

                    <table id="mytable" class="table mt-5 table-bordred table-striped">

                        <thead>
                            <th>Categorie Name</th>
                            <th class="text-center">Validate</th>
                            <th class="text-center">Delete</th>
                        </thead>
                        @foreach ($categories as $categorie)
                        {{-- <form action="/validate/{{ $categorie->id }}" method="post"> --}}
                            @csrf
                            <tbody>
                                <tr>
                                    <td>{{ $categorie->name }}</td>

                                    <td class="text-center">
                                        <p data-placement="top" data-toggle="tooltip" title="ok"><button class="btn btn-success btn-xs"
                                                data-title="Validate" data-toggle="modal" data-target="#validateC{{ $categorie->id }}"
                                                type="button"><span class="glyphicon glyphicon-ok"><i class="fas fa-check"></i></span></button></p>
                                    </td>

                                    <td class="text-center">
                                        <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs"
                                                data-title="Delete" data-toggle="modal" data-target="#delete{{ $categorie->id }}" type="button"><span
                                                    class="glyphicon glyphicon-trash"><i class="fas fa-trash-alt"></i></span></button></p>
                                    </td>
                                </tr>
                            </tbody>
                        </form>
                        <div class="modal fade" id="validateC{{ $categorie->id }}" tabindex="-1" role="dialog" aria-labelledby="edit"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span
                                                class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                        {{-- <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4> --}}
                                    </div>
                                    <div class="modal-body">

                                        <div class="alert alert-success"><span class="glyphicon glyphicon-warning-sign"></span>
                                            Are you sure you
                                            want to validate this ?</div>

                                    </div>

                                    <div class="modal-footer ">
                                        {{ $categorie->id }}
                                        <form action="/validateCategorie/{{ $categorie->id }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
                                        </form>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <div class="modal fade" id="delete{{ $categorie->id }}" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span
                                                class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
                                    </div>
                                    <div class="modal-body">

                                        <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span>
                                            Are you sure you
                                            want to delete this ?</div>

                                    </div>

                                    <div class="modal-footer ">
                                        <form action="/deletecategorie/{{ $categorie->id }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
                                        </form>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        @endforeach
                    </table>
                </div>

            </div>
        </div>
    </div>
