<x-app-layout>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">

                @if ($errors->any())
                    <ul class="alert alert-warning mt-2">
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h2><b>Edit Role</b>
                            <a href="{{ url('roles') }}" class="btn btn-sm btn-danger float-end">
                                <i class="fa-solid fa-circle-chevron-left opacity-75"></i>&nbsp;&nbsp;Back
                            </a>
                        </h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('roles/'.$role->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="name">Role Name</label>
                                <input type="text" name="name" value="{{ $role->name }}" class="form-control"/>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-sm btn-primary">
                                    <i class="fa-solid fa-floppy-disk opacity-75"></i>&nbsp;&nbsp;Update
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
