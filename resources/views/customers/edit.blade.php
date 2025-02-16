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
                            <b>Edit Customer</b>
                            <a href="{{ route('customers.index') }}" class="btn btn-sm btn-danger float-end shadow-sm">
                                <i class="fa-solid fa-circle-chevron-left opacity-75"></i>&nbsp;&nbsp;Back
                            </a>
                        </h2>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('customers.update', $customer->id) }}" method="POST" id="customer-form" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" id="name" class="form-control rounded-md" placeholder="Enter Name"
                                               value="{{ $customer->name }}"/>
                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" id="email" class="form-control rounded-md" placeholder="Enter Email"
                                               value="{{ $customer->email }}"/>
                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" name="phone" id="phone" class="form-control rounded-md" placeholder="Enter Phone"
                                               value="{{ $customer->phone }}"/>
                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="company">Company</label>
                                        <input type="text" name="company" id="company" class="form-control rounded-md" placeholder="Enter Company"
                                               value="{{ $customer->company }}"/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <textarea name="address" class="form-control rounded-md" rows="2"
                                                  id="address" placeholder="Enter Address">{{ $customer->address }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="notes">Notes</label>
                                        <textarea name="notes" class="form-control rounded-md" rows="2"
                                                  id="notes" placeholder="Enter Notes">{{ $customer->notes }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="avatar">Avatar</label>
                                                <input type="file" name="avatar" id="avatar" class="form-control rounded-md" onchange="previewAvatar(event)"/>
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 d-flex justify-content-center">
                                            <div class="card card-body shadow-sm">
                                                <img src="{{ $customer->avatar ? ('/storage' . asset($customer->avatar)) : asset('assets/images/default-avatar.png') }}"
                                                     class="shadow-md rounded-full object-fit-cover" alt="Avatar" width="100px" id="preview_avatar">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-2 mt-4 flex justify-center gap-1">
                                        <button type="submit" class="btn btn-sm btn-success shadow-sm">
                                            <i class="fa-solid fa-floppy-disk opacity-75"></i>&nbsp;&nbsp;Update
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
