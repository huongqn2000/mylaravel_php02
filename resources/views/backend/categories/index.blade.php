@extends('layouts.master')
@section('title', 'Categories')
@section('main')
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body" style="width: 160%">
                <h4 class="card-title">Category Table</h4>
                <br>
                <a  class="btn btn-sm btn-outline-secondary" href="{{ route('categories.create') }}" >Create a new category</a>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th width="40%">Name</th>
                            <th width="20%">Created at</th>
                            <th width="20%">Updated at</th>
                            <th width="15%">Others</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->created_at }}</td>
                                <td>{{ $category->updated_at }}</td>
                                <td>
                                    Detail | <a href="{{ route('categories.edit', $category->id) }}">Edit</a>
                                    | <a href="javascript:;" class="delete" data_id="{{$category->id}}" >Delete</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5"><p>No Product Categories</p></td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <div>
                    {{ $categories->links() }}
                </div>
            </div>
        </div>
    </div>
@stop

@section('modal')
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" id="f_delete" action="">
                    @csrf
                    @method('DELETE')
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Delete product category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you want you to delete this product category?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Delele</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        var myModal = new bootstrap.Modal(document.getElementById('staticBackdrop'), {
            keyboard: false
        });
        $( document ).ready(function() {
            $('.delete').click(function(){
                var id = $(this).attr('data_id');
                $('#f_delete').attr('action', '/ims/categories/' + id + '/delete');
                myModal.toggle();
            });
        });
    </script>
@stop
