<div class="container mt-5">
        <div class="row">

            <div class="col-md-12">
                <h4>Tags en attente de validation !</h4>
                <div class="table-responsive">

                    <table id="mytable" class="table mt-5 table-bordred table-striped">

                        <thead>
                            <th>Name Tag</th>
                            <th class="text-center">Validate</th>
                            <th class="text-center">Delete</th>
                        </thead>
                        @foreach ($tags as $tag)
                            @csrf
                            <tbody>
                                <tr>
                                    <td>{{ $tag->name }}</td>
                                    <td class="text-center">
                                        <p data-placement="top" data-toggle="tooltip" title="ok"><button class="btn btn-success btn-xs"
                                                data-title="Validate" data-toggle="modal" data-target="#validateT{{ $tag->id }}"
                                                type="button"><span class="glyphicon glyphicon-ok"><i class="fas fa-check"></i></span></button></p>
                                    </td>

                                    <td class="text-center">
                                        <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs"
                                                data-title="Delete" data-toggle="modal" data-target="#deleteT{{ $tag->id }}" type="button"><span
                                                    class="glyphicon glyphicon-trash"><i class="fas fa-trash-alt"></i></span></button></p>
                                    </td>
                                </tr>
                            </tbody>
                        </form>
                        <div class="modal fade" id="validateT{{ $tag->id }}" tabindex="-1" role="dialog" aria-labelledby="edit"
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
                                        {{ $tag->id }}
                                        <form action="/validateTag/{{ $tag->id }}" method="POST">
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
                        <div class="modal fade" id="deleteT{{ $tag->id }}" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
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
                                        <form action="/deletetag/{{ $tag->id }}" method="POST">
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

