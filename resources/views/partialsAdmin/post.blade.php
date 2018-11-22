<div class="container">
    <div class="row">

        <div class="col-md-12">
            <h4><span class="text-danger">ARTICLE</span> en attente de validation !</h4>
            <div class="table-responsive">

                <table id="mytable" class="table mt-5 table-bordred table-striped">

                    <thead>
                        <th>Editeur Name</th>
                        <th>Article Name</th>
                        <th>Create at</th>
                        <th class="text-center">Article</th>
                        <th class="text-center">Validate</th>
                        <th class="text-center">Delete</th>
                    </thead>
                    @foreach ($articles as $article)
                    {{-- @if ($article->validation == 0) --}}
                    {{-- <form action="/validate/{{ $article->id }}" method="post"> --}}
                        @csrf
                        <tbody>
                            <tr>
                                <td>{{ $article->user->name }}</td>
                                <td>{{ $article->name }}</td>
                                <td>{{ $article->created_at->format('d.M.y') }}</td>

                                <td class="text-center">
                                    <p data-placement="top" data-toggle="tooltip" title="view"><a class="btn btn-warning btn-xs"
                                            href="/monArticle/{{ $article->id }}"><span class="text-white"><i class="far fa-eye"></i></span></a>
                                </td>

                                <td class="text-center">
                                    <p data-placement="top" data-toggle="tooltip" title="ok"><button class="btn btn-success btn-xs"
                                            data-title="Validate" data-toggle="modal" data-target="#validate{{ $article->id }}"
                                            type="button"><span class="glyphicon glyphicon-ok"><i class="fas fa-check"></i></span></button></p>
                                </td>

                                <td class="text-center">
                                    <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs"
                                            data-title="Delete" data-toggle="modal" data-target="#delete{{ $article->id }}" type="button"><span
                                                class="glyphicon glyphicon-trash"><i class="fas fa-trash-alt"></i></span></button></p>
                                </td>
                            </tr>
                        </tbody>
                    </form>

                    <div class="modal fade" id="validate{{ $article->id }}" tabindex="-1" role="dialog" aria-labelledby="edit"
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
                                    {{ $article->id }}
                                    <form action="/validate/{{ $article->id }}" method="POST">
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
                    <div class="modal fade" id="delete{{ $article->id }}" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
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
                                    <form action="/deleteArticle/{{ $article->id }}" method="POST">
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

                    {{-- @endif --}}
                    @endforeach
                </table>
                {{ $articles->links() }}
            </div>

        </div>
    </div>
</div>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
    crossorigin="anonymous">
<script src="{{url('js/app.js')}}"></script>
<link rel="stylesheet" href="{{url('css/app.css')}}">
