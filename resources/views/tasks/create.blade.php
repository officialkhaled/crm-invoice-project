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
                        <h2 class="d-flex justify-content-between align-items-center">
                            <b>Create Task</b>
                            <a href="{{ route('tasks.index') }}" class="btn btn-sm btn-danger float-end shadow-sm">
                                <i class="fa-solid fa-circle-chevron-left opacity-75"></i>&nbsp;&nbsp;Back
                            </a>
                        </h2>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('tasks.store') }}" method="POST" id="customer-form" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="name">Title</label>
                                        <input type="text" name="name" id="name" class="form-control rounded-md" placeholder="e.g. John Doe"/>
                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="text" name="email" id="email" class="form-control rounded-md" placeholder="e.g. john@mail.com"/>
                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="phone">Phone</label>
                                        <input type="text" name="phone" id="phone" class="form-control rounded-md" placeholder="e.g. 01572456842"/>
                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="source">Source</label>
                                        <input type="text" name="source" id="source" class="form-control rounded-md" placeholder="e.g. Website/Referral"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="user_id">Assigned To</label>
                                        <select name="user_id" id="user_id" class="rounded-md select2 form-select">
                                            <option value="">Select</option>
                                            @foreach($users as $user)
                                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="description">Description</label>
                                        <textarea name="description" class="form-control rounded-md"
                                                  id="description" rows="2" placeholder="e.g. description"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-2 mt-4 flex justify-center gap-1">
                                        <button type="submit" class="btn btn-sm btn-success shadow-sm" onclick="formSubmit()">
                                            <i class="fa-solid fa-floppy-disk opacity-75"></i>&nbsp;&nbsp;Save
                                        </button>
                                        <button type="button" class="btn btn-sm btn-warning shadow-sm" onclick="pageRefresh()">
                                            <i class="fa-solid fa-arrows-rotate opacity-75"></i>&nbsp;&nbsp;Refresh
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

@section('scripts')
    <script>
        $.fn.select2.defaults.set("theme", "bootstrap-5");
        $.fn.select2.defaults.set("placeholder", "Select");

        $(document).ready(function () {
            $('.select2').select2({
                allowClear: false,
            });
        });
    </script>
@endsection
