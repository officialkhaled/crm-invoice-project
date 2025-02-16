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
                            <b>Create Customer</b>
                            <a href="{{ route('customers.index') }}" class="btn btn-sm btn-danger float-end shadow-sm">
                                <i class="fa-solid fa-circle-chevron-left opacity-75"></i>&nbsp;&nbsp;Back
                            </a>
                        </h2>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('customers.store') }}" method="POST" id="customer-form" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" id="name" class="form-control rounded-md" placeholder="Enter Name"/>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" id="email" class="form-control rounded-md" placeholder="Enter Email"/>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" name="phone" id="phone" class="form-control rounded-md" placeholder="Enter Phone"/>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="company">Company</label>
                                        <input type="text" name="company" id="company" class="form-control rounded-md" placeholder="Enter Company"/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <textarea name="address" class="form-control rounded-md"
                                                  id="address" rows="2" placeholder="Enter Address"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="notes">Notes</label>
                                        <textarea name="notes" class="form-control rounded-md"
                                                  id="notes" rows="2" placeholder="Enter Notes"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="avatar">Avatar</label>
                                                <input type="file" name="avatar" id="avatar" class="form-control rounded-md" onchange="previewAvatar(event)"/>
                                            </div>
                                        </div>
                                        <div class="col-md-4 d-flex justify-content-center">
                                            <img src="{{ asset('assets/images/default-avatar.png') }}" class="shadow-sm card card-body object-fit-cover"
                                                 alt="Avatar" width="100px" id="preview_avatar">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-2 mt-4 flex justify-center gap-1">
                                        <button type="submit" class="btn btn-sm btn-success shadow-sm">
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
